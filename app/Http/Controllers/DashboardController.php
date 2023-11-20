<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.dashboard-admin');
    }

    public function tambahBarang()
    {
        return view('dashboard.barang.tambah-data-barang');
    }

    public function store(Request $request)
    {
        // Memasukkan data baru ke tabel 'barang' dan mendapatkan ID
        $barangId = DB::table('barang')->insertGetId([
            'nama_barang' => $request->namaProduk,
            'price' => $request->price,
            'stock_barang' => $request->stockBarang,
            'created_at' => Carbon::now()->timezone('Asia/Jakarta'),
            'updated_at' => Carbon::now()->timezone('Asia/Jakarta'),
        ]);

        if ($request->hasFile('foto')) {
            // Pindahkan file gambar ke direktori yang sesuai
            $fotoPath = $request->file('foto')->store('assets/img');

            // Update nama file gambar dalam tabel 'barang'
            DB::table('barang')->where('id', $barangId)->update([
                'foto' => $fotoPath,
            ]);
        }
        return response()->json(['success' => true, 'message' => 'Berhasil menambahkan data barang', 'data' => $barangId]);
    }
}
