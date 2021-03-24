<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Buku;
use App\Perpustakaan;

class PerpustakaanController extends Controller
{
    public function index(Request $request) {
        $perpustakaan = Perpustakaan::orderBy('nama_perpustakaan', 'asc')->get();

    	return view('admin.perpustakaans.index')->with('perpustakaan', $perpustakaan);
    }

    public function create() {
    	return view('admin.perpustakaans.create');
    }

    public function store(Request $request) {

    	$validation = $this->validate($request, [
    		'nama_perpustakaan' => 'required',
    		]);

    	if ($validation == TRUE) {
    		try {
	    		Perpustakaan::create([
	    			'nama_perpustakaan' => $request->nama_perpustakaan,
	    		]);
                // $perpustakaan = Perpustakaan::find([$id]);
                // $buku->perpustakaans()->attach($perpustakaan);	
				return redirect(route('admin.perpustakaan'))->with('success_message', 'Successfully created Perpustakaan');

    		} catch (Exception $e) {
    			return redirect()->back()->with('errors', $e->getMessage());
    		}
    	}
    }

    public function show($id) {
        $perpustakaan = Perpustakaan::where('id', $id)->firstOrFail();
        return view('admin.perpustakaans.show')->with('perpustakaan', $perpustakaan);
    }

    public function update(Request $request, $id) {
        $perpustakaan = Perpustakaan::where('id', $id)->first();
        $perpustakaan->update($request->all());
        return redirect(route('admin.perpustakaan'))->with('success_message', 'Successfully update Perpustakaan');
    }

    public function destroy($id) {
        $perpustakaan = Perpustakaan::where('id', $id)->first();
        $perpustakaan->delete();
        return redirect(route('admin.perpustakaan'))->with('success_message','Perpustakaan deleted successfully');
    }
}
