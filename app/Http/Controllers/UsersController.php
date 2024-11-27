<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users()
    {
        $users = [
            ['username' => 'johndoe', 'nama' => 'John Doe', 'email' => 'johndoe@example.com'],
            ['username' => 'janedoe', 'nama' => 'Jane Doe', 'email' => 'janedoe@example.com'],
        ];
        return view('users', compact('users'));
    }
}
