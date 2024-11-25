<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = [
            ['kode' => 'W00001', 'nama' => 'Watch', 'kategori' => 'Accessories', 'harga' => 500000, 'stok' => 15],
            ['kode' => 'B00001', 'nama' => 'Bag', 'kategori' => 'Accessories', 'harga' => 250000, 'stok' => 10],
            ['kode' => 'E00001', 'nama' => 'Smartphone', 'kategori' => 'Gadget', 'harga' => 7000000, 'stok' => 25],
            ['kode' => 'E00002', 'nama' => 'Laptop', 'kategori' => 'Gadget', 'harga' => 15000000, 'stok' => 5],
            ['kode' => 'F00001', 'nama' => 'Dining Table', 'kategori' => 'Furniture', 'harga' => 1200000, 'stok' => 8],
            ['kode' => 'F00002', 'nama' => 'Office Chair', 'kategori' => 'Furniture', 'harga' => 750000, 'stok' => 12],
            ['kode' => 'C00001', 'nama' => 'Camera', 'kategori' => 'Electronics', 'harga' => 12000000, 'stok' => 3],
            ['kode' => 'C00002', 'nama' => 'Smartwatch', 'kategori' => 'Electronics', 'harga' => 3000000, 'stok' => 20],
            ['kode' => 'H00001', 'nama' => 'Hat', 'kategori' => 'Apparel', 'harga' => 200000, 'stok' => 50],
            ['kode' => 'B00002', 'nama' => 'Backpack', 'kategori' => 'Accessories', 'harga' => 350000, 'stok' => 20],
        ];
        return view('barang.index', compact('barang'));
    }
    //
}
