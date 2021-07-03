<?php

namespace App\Http\Controllers;

use App\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
    	$data_matkul = Matkul::all();
        return view('matkul.index',['data_matkul' => $data_matkul]);
    }

    public function create(Request $request)
    {
    	Matkul::create($request->all());
    	return redirect('matkul');
    }

    public function edit($id)
    {
    	$matkul = Matkul::find($id);
    	return view('matkul.edit',['matkul' => $matkul]);
    }

    public function update(Request $request, $id)
    {
    	$matkul = Matkul::find($id);
    	$matkul->update($request->all());
    	return redirect('/matkul')->with('status','Data Matkul Berhasil DiUpdate!');
    }

    public function delete($id)
    {
    	$matkul = Matkul::find($id);
    	$matkul->delete();
    	return redirect('/matkul')->with('status','Data Matkul Berhasil DiHapus!');
    }
}
