<?php

namespace App\Http\Controllers;

use App\Models\Data; // Assuming you have a Data model
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DataController extends Controller
{
    // Get all data records
    public function index()
    {
       // Retrieve all data and group by month
    $data = Data::all()->groupBy(function ($item) {
        return Carbon::parse($item->tanggal)->format('F'); // Group by month name
    });

    // Transform grouped data into a more readable format
    $results = [];
    foreach ($data as $month => $items) {
        $results[$month] = [
            'count' => $items->count(),
            'data' => $items->map(function ($item) {
                return [
                    'id' => $item->id,
                    'tanggal' => $item->tanggal,
                    'status' => $item->status,
                    'harga' => $item->harga,
                    'uj' => $item->uj,
                ];
            }),
        ];
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Data grouped by month retrieved successfully',
        'dataByMonth' => $results,
    ]);
    }

    // Create a new data record
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'nopol' => 'required|string',
            'origin' => 'required|string',
            'destinasi' => 'required|string',
            'uj' => 'required|numeric',
            'harga' => 'required|numeric',
            'status' => 'required|string',
        ]);

        $data = Data::create($validatedData);
        return response()->json($data, 201);
    }

    // Get a specific data record
    public function show($id)
    {
        $data = Data::findOrFail($id);
        return response()->json($data);
    }

    // Update a data record
    public function update(Request $request, $id)
    {
        $data = Data::findOrFail($id);
        $validatedData = $request->validate([
            'tanggal' => 'sometimes|required|date',
            'nopol' => 'sometimes|required|string',
            'origin' => 'sometimes|required|string',
            'destinasi' => 'sometimes|required|string',
            'uj' => 'sometimes|required|numeric',
            'harga' => 'sometimes|required|numeric',
            'status' => 'sometimes|required|string',
        ]);

        $data->update($validatedData);
        return response()->json($data);
    }

    // Delete a data record
    public function destroy($id)
    {
        $data = Data::findOrFail($id);
        $data->delete();
        return response()->json(['message' => 'Data record deleted successfully']);
    }

    public function sum()
    {
        $year = Carbon::now()->format('Y'); // Get the current year
        $results = [];

        for ($month = 1; $month <= 12; $month++) {
            // Format the month name and month-year string
            $monthName = Carbon::createFromDate($year, $month, 1)->format('F'); // E.g., "January"
            $monthYear = sprintf('%s-%02d', $year, $month);

            // Query data for the specific month
            $data = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$monthYear])
                        ->where('status', 'confirmed')
                        ->get();

            $countSukses = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$monthYear])
                               ->where('status', 'confirmed')
                               ->count();
            $countPending = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$monthYear])
                                ->where('status', 'pending')
                                ->count();
            $countGagal = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$monthYear])
                              ->where('status', 'canceled')
                              ->count();

            // Calculate margin
            $marginSum = 0;
            foreach ($data as $item) {
                $marginSum += $item['harga'] - $item['uj'];
            }

            // Determine profit or loss
            $untungrugi = $marginSum < 0 ? 'RUGI' : 'UNTUNG';

            // Append results for the current month with month name as the key
            $results[$monthName] = [
                'monthYear' => $monthYear,
                'untungrugi' => $untungrugi,
                'marginSum' => $marginSum,
                'countSukses' => $countSukses,
                'countPending' => $countPending,
                'countGagal' => $countGagal,
            ];
        }

        return response()->json([
            'year' => $year,
            'dataByMonth' => $results,
        ]);
    }


    public function setLunas($id){
        $data = Data::findOrFail($id);
        $data->update(['status'=>'confirmed']);
        return response()->json(['data'=>$data]);
    }
}
