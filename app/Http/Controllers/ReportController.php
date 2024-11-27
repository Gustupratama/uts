<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $reports = [
            ['kode_barang' => 'P001', 'nama_barang' => 'Laptop', 'kategori' => 'Elektronik', 'tanggal' => '2024-11-01', 'jumlah' => 5],
            ['kode_barang' => 'P002', 'nama_barang' => 'Baju Kaos', 'kategori' => 'Pakaian', 'tanggal' => '2024-11-05', 'jumlah' => 10],
        ];
        return view('reports', compact('reports'));
    }
}
