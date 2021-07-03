<?php

namespace App\Http\Controllers;

use App\Kuliah;
use Illuminate\Http\Request;

class KuliahController extends Controller
{
    public function index()
    {
    	$data_kuliah = Kuliah::all();
        return view('kuliah.index',['data_kuliah' => $data_kuliah]);
    }

    public function create(Request $request)
    {
    	Kuliah::create($request->all());
    	return redirect('kuliah');
    }

    public function edit($id)
    {
    	$kuliah = Kuliah::find($id);
    	return view('kuliah.edit',['kuliah' => $kuliah]);
    }

    public function update(Request $request, $id)
    {
    	$kuliah = Kuliah::find($id);
    	$kuliah->update($request->all());
    	return redirect('/kuliah')->with('status','Data Kuliah Berhasil DiUpdate!');
    }

    public function delete($id)
    {
    	$kuliah = Kuliah::find($id);
    	$kuliah->delete();
    	return redirect('/kuliah')->with('status','Data Kuliah Berhasil DiHapus!');
    }
}
