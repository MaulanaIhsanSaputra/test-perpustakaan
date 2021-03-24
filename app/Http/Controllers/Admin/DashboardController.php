<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perpustakaan;
use App\Buku;

class DashboardController extends Controller
{
    //
    public function index(Request $request) {
        $perpustakaan = Perpustakaan::orderBy('id', 'desc')->take(3)->get();
        $buku = Buku::orderBy('id', 'desc')->take(3)->get();

    	return view('admin.home', ['perpustakaans' => $perpustakaan])
        ->with('perpustakaan' , $perpustakaan)
        ->with('buku', $buku);
    }

}
