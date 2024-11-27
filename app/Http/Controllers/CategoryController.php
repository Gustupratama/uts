<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = [
            ['nama' => 'Elektronik'],
            ['nama' => 'Pakaian'],
            ['nama' => 'Peralatan Rumah Tangga'],
        ];
        return view('categories', compact('categories'));
    }
}
