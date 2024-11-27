<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function users()
    {
        $users = [
            ['username' => 'gustu', 'nama' => 'GustuPratama', 'email' => 'gustupyb123@gmail.com'],
            ['username' => 'rena', 'nama' => 'Serena', 'email' => 'renamaharani@gmail.com'],
        ];
        return view('users', compact('users'));
    }

    public function categories()
    {
        $categories = [
            ['nama' => 'Mobil'],
            ['nama' => 'Pakaian'],
            ['nama' => 'Peralatan Rumah Tangga'],
        ];
        return view('categories', compact('categories'));
    }

    public function products()
    {
        $products = [
            ['kode' => 'P11', 'nama' => 'Laptop', 'kategori' => 'Elektronik', 'harga' => 15000000, 'stok' => 10],
            ['kode' => 'P22', 'nama' => 'Baju Kaos', 'kategori' => 'Pakaian', 'harga' => 100000, 'stok' => 50],
        ];
        return view('products', compact('products'));
    }

    public function reports()
    {
        $reports = [
            ['kode_barang' => 'P11', 'nama_barang' => 'Laptop', 'kategori' => 'Elektronik', 'tanggal' => '2024-11-01', 'jumlah' => 5],
            ['kode_barang' => 'P22', 'nama_barang' => 'Baju Kaos', 'kategori' => 'Pakaian', 'tanggal' => '2024-11-05', 'jumlah' => 10],
        ];
        return view('reports', compact('reports'));
    }
}
