<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
