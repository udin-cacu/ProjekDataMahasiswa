<?php

namespace App\Http\Controllers;

use App\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
     public function index()
    {
    	$data_prodi = Prodi::all();
        return view('prodi.index',['data_prodi' => $data_prodi]);
    }

    public function create(Request $request)
    {
    	/*Prodi::create($request->all());
        return redirect('prodi');*/
        \App\Prodi::create($request->all());
        return $request->all();
    }

    public function edit($id)
    {
    	$prodi = Prodi::find($id);
    	return view('prodi.edit',['prodi' => $prodi]);
    }

    public function update(Request $request, $id)
    {
    	$prodi = Prodi::find($id);
    	$prodi->update($request->all());
    	return redirect('/prodi')->with('status','Data Prodi Berhasil DiUpdate!');
    }

    public function delete($id)
    {
    	$prodi = Prodi::find($id);
    	$prodi->delete();
    	return redirect('/prodi')->with('status','Data Prodi Berhasil DiHapus!');
    }
}
