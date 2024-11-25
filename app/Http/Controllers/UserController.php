<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Data
        $users = [
            ['username' => 'taro', 'nama' => 'Taro Tanaka', 'email' => 'taro123@gmail.com'],
            ['username' => 'hanako', 'nama' => 'Hanako Yamada', 'email' => 'hanako456@gmail.com'],
            ['username' => 'jiro', 'nama' => 'Jiro Takahashi', 'email' => 'jiro789@gmail.com'],
            ['username' => 'yuki', 'nama' => 'Yuki Murakami', 'email' => 'yuki123@gmail.com'],
            ['username' => 'sakura', 'nama' => 'Sakura Sato', 'email' => 'sakura456@gmail.com'],
        ];
            
        return view('user.index', compact('users'));
    }
}
