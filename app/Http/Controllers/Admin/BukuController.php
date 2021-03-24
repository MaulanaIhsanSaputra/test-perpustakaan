<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Buku;
use App\Perpustakaan;

class BukuController extends Controller
{
    public function index(Request $request) {
        $buku = Buku::orderBy('nama_buku', 'asc')->get();

    	return view('admin.bukus.index')->with('buku', $buku);
    }

    public function create() {
    	return view('admin.bukus.create');
    }

    public function store(Request $request) {

    	$validation = $this->validate($request, [
    		'nama_buku' => 'required',
    		]);

    	if ($validation == TRUE) {
    		try {
	    		Buku::create([
	    			'nama_buku' => $request->nama_buku,
	    		]);
                // $perpustakaan = Perpustakaan::find([$id]);
                // $buku->perpustakaans()->attach($perpustakaan);	
				return redirect(route('admin.buku'))->with('success_message', 'Successfully created Buku');

    		} catch (Exception $e) {
    			return redirect()->back()->with('errors', $e->getMessage());
    		}
    	}
    }

    public function show($id) {
        $buku = Buku::where('id', $id)->firstOrFail();
        return view('admin.bukus.show')->with('buku', $buku);
    }

    public function update(Request $request, $id) {
        $buku = Buku::where('id', $id)->first();
        $buku->update($request->all());
        return redirect(route('admin.buku'))->with('success_message', 'Successfully update Buku');
    }

    public function destroy($id) {
        $buku = Buku::where('id', $id)->first();
        $buku->delete();
        return redirect(route('admin.buku'))->with('success_message','Buku deleted successfully');
    }
}
