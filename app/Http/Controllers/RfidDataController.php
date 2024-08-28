<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RfidData;

//fungsi untuk menerima data dari RFID sensor
class RfidDataController extends Controller
{
    public function store(Request $request)
{
    try {
        // Log data yang diterima
        \Log::info('Request Data:', $request->all());

        $validated = $request->validate([
            'id_card' => 'required|string',
            'name' => 'required|string',
        ]);

        $rfidData = RfidData::create([
            'id_card' => $validated['id_card'],
            'name' => $validated['name'],
        ]);

        return response()->json($rfidData, 201);
    } catch (\Exception $e) {
        \Log::error('Error:', ['message' => $e->getMessage()]);
        return response()->json([
            'error' => 'Internal Server Error',
            'message' => $e->getMessage()
        ], 500);
    }
}


}
