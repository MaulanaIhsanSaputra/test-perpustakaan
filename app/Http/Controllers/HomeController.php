<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Perpustakaan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $perpustakaans = Perpustakaan::orderBy('id', 'desc')->take(3)->get();

    	return view('home')->with('perpustakaans', $perpustakaans);
    }

    public function ShowPerpustakaan()
    {
    	return view('home')->with('page_active', 'home')->with('perpustakaans', $perpustakaans);
    }
}
