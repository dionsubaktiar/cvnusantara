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
        $data = Data::whereNotNull('tanggal')->orderBy('tanggal')->get()->groupBy(function ($item) {
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
                        'nopol'=>$item->nopol,
                        'driver'=>$item->driver,
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
            'driver'=>'string',
            'origin' => 'required|string',
            'destinasi' => 'required|string',
            'uj' => 'required|numeric',
            'harga' => 'required|numeric',
            'status' => 'required|string',
        ]);

        // $today = Carbon::today()->toDateString();
        $check_exist = Data::where('nopol',$request->nopol)
        ->whereDate('tanggal',$request->tanggal)->exists();

        if($check_exist){
            return response()->json([
                'status' => false,
                'message' => 'This nomor polisi has already been inputted today.',
            ], 422);
        }

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
            'driver'=> 'sometimes|string',
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
        $monthName = Carbon::createFromDate($year, $month, 1)->format('F');
        $monthYear = sprintf('%s-%02d', $year, $month);

        // Query data for the specific month
        $data = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$monthYear])
                    // ->where('status', 'confirmed')
                    ->get();

        // Count the different status types for the month
        $countSukses = $data->where('status', 'confirmed')->count();
        $countPending = $data->where('status', 'pending')->count();
        $countGagal = $data->where('status', 'canceled')->count();

        // If all counts are 0, skip this month and do not add it to the results
        if ($countSukses === 0 && $countPending === 0 && $countGagal === 0) {
            continue;
        }

        // Calculate margin for the month
        $marginSum = $data->where('status','confirmed')->reduce(function ($carry, $item) {
            return $carry + ($item->harga - $item->uj); // Calculate margin (harga - uj)
        }, 0);

        // Determine if the result is profit or loss
        $untungrugi = $marginSum < 0 ? 'RUGI' : 'UNTUNG';

        // Add the month data to the results array
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
        'status' => 'success',
        'year' => $year,
        'dataByMonth' => $results,
    ]);
}

    public function setLunas($id)
    {
        $data = Data::findOrFail($id);
        $data->update(['status' => 'confirmed']);
        return response()->json(['data' => $data]);
    }

    public function pinVerified(Request $request)
    {
    $key = env('PIN_CORRECT');

    if ($request->input('pin') === $key) {
        // Generate a verification token
        $verificationToken = base64_encode('verified_' . now());

        return response()->json([
            'success' => true,
            'verification_token' => $verificationToken,
        ]);
    } else {
        return response()->json(['success' => false, 'message' => 'Invalid PIN']);
    }
    }

    public function lockscreen(Request $request)
    {
    // Invalidate verification on client-side by simply removing the token
    return response()->json(['success' => true, 'message' => 'Locked']);
    }

}
