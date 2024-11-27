<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function item()
    {
        $products = [
            ['kode' => 'P001', 'nama' => 'Laptop', 'kategori' => 'Elektronik', 'harga' => 15000000, 'stok' => 10],
            ['kode' => 'P002', 'nama' => 'Baju Kaos', 'kategori' => 'Pakaian', 'harga' => 100000, 'stok' => 50],
        ];
        return view('products', compact('products'));
    }
}
