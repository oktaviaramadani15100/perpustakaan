<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landingpage()
    {
        $produk = Pesanan::all();
        return view('landing.indexlanding', compact('produk'));
    }
}
