<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriBarangController extends Controller
{
    public function index()
    {
        $kategoriBarang = [
            ['nama' => 'Gadget'],
            ['nama' => 'Furniture'],
            ['nama' => 'Electronics'],
            ['nama' => 'Apparel'],
            ['nama' => 'Accessories'],
        ];
        
        return view('kategori_barang.index', compact('kategoriBarang'));
    }
    //
}
