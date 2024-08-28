<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RfidData;

//fungsi untuk menampilkan halaman dashboard
class RfidController extends Controller
{
    public function index()
    {
        // Mengembalikan view utama RFID jika diperlukan
        return view('rfid');
    }

    public function dashboard()
    {
        // Mengambil data terbaru dari model RfidData
        $rfidData = RfidData::latest()->take(10)->get();

        // Mengirimkan data ke view 'rfid-dashboard'
        return view('rfid-dashboard', ['rfidData' => $rfidData]);
    }
}
