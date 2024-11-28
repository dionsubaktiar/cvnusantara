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
        return response()->json(Data::all());
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
        $currentMonthYear = Carbon::now()->format('Y-m'); // "2024-11"
        $data = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$currentMonthYear])->where('status','confirmed')->get();
        $countSukses = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$currentMonthYear])->where('status','confirmed')->count();
        $countPending = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$currentMonthYear])->where('status','pending')->count();
        $countGagal = Data::whereRaw('DATE_FORMAT(tanggal, "%Y-%m") = ?', [$currentMonthYear])->where('status','canceled')->count();

        $marginSum = 0;

        foreach ($data as $item) {
            $marginSum += $item['harga'] - $item['uj'];
        }

        // Determine profit or loss
        $untungrugi = $marginSum < 0 ? 'RUGI' : 'UNTUNG';

        return response()->json([
            'monthYear'=>$currentMonthYear,
            'untungrugi' => $untungrugi,
            'marginSum' => $marginSum,
            'countSukses'=>$countSukses,
            'countPending'=>$countPending,
            'countGagal'=>$countGagal
        ]);
    }

    public function setLunas($id){
        $data = Data::findOrFail($id);
        $data->update(['status'=>'confirmed']);
        return response()->json(['data'=>$data]);
    }
}
