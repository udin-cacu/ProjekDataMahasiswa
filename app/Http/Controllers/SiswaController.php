<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
     public function index()
    {
    	$data_siswa = Siswa::all();
        return view('siswa.index',['data_siswa' => $data_siswa]);
    }

    public function create(Request $request)
    {
    	Siswa::create($request->all());
    	return redirect('siswa');
    }

    public function edit($id)
    {
    	$siswa = Siswa::find($id);
    	return view('siswa.edit',['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
    	$siswa = Siswa::find($id);
    	$siswa->update($request->all());
    	return redirect('/siswa')->with('status','Data Mahasiswa Berhasil DiUpdate!');
    }

    public function delete($id)
    {
    	$siswa = Siswa::find($id);
    	$siswa->delete();
    	return redirect('/siswa')->with('status','Data Siswa Berhasil DiHapus!');
    }
}
