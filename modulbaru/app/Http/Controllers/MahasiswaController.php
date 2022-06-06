<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
        return view ('datamahasiswa', compact('data'));
    }

    public function tambahmahasiswa(){
        return view ('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success','Data berhasil ditambahkan!');
    }

    public function tampildata($id){
        $data = Mahasiswa::find($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data berhasil diupdate!');
    }

    public function deletedata($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data berhasil dihapus!');
    }
}
