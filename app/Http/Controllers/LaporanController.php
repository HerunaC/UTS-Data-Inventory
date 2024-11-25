<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $laporan = [
            ['kode_barang' => 'E00001', 'nama_barang' => 'Smartphone', 'kategori' => 'Gadget', 'tanggal' => '2024-11-25', 'jumlah' => 10],
            ['kode_barang' => 'E00002', 'nama_barang' => 'Laptop', 'kategori' => 'Gadget', 'tanggal' => '2024-11-26', 'jumlah' => 2],
            ['kode_barang' => 'F00001', 'nama_barang' => 'Dining Table', 'kategori' => 'Furniture', 'tanggal' => '2024-11-27', 'jumlah' => 3],
            ['kode_barang' => 'F00002', 'nama_barang' => 'Office Chair', 'kategori' => 'Furniture', 'tanggal' => '2024-11-28', 'jumlah' => 6],
            ['kode_barang' => 'C00001', 'nama_barang' => 'Camera', 'kategori' => 'Electronics', 'tanggal' => '2024-11-29', 'jumlah' => 5],
            ['kode_barang' => 'C00002', 'nama_barang' => 'Smartwatch', 'kategori' => 'Electronics', 'tanggal' => '2024-11-30', 'jumlah' => 7],
            ['kode_barang' => 'H00001', 'nama_barang' => 'Hat', 'kategori' => 'Apparel', 'tanggal' => '2024-12-01', 'jumlah' => 8],
            ['kode_barang' => 'B00001', 'nama_barang' => 'Bag', 'kategori' => 'Accessories', 'tanggal' => '2024-12-02', 'jumlah' => 4],
            ['kode_barang' => 'F00003', 'nama_barang' => 'Sofa', 'kategori' => 'Furniture', 'tanggal' => '2024-12-03', 'jumlah' => 2],
            ['kode_barang' => 'P00001', 'nama_barang' => 'T-Shirt', 'kategori' => 'Apparel', 'tanggal' => '2024-12-04', 'jumlah' => 30],
        ];
        
        return view('laporan.index', compact('laporan'));
    }
    //
}
