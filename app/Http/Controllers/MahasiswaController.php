<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::with(['user'])->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }
    public function create()
       {
           $user = User::all();
           return view('mahasiswa.create', compact('user'));
       }
    public function store(Request $request)
       {
           mahasiswa::create($request->all());
           alert()->success('Success','Berhasil Menyimpan Data');
           return redirect()->route('mahasiswa');
       }
   
    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = mahasiswa::find($id);
       return view('mahasiswa.edit',compact('mahasiswa','user'));
    }
    public function update(Request $request, $id)
    {
       $mahasiswa = mahasiswa::find($id);
       $mahasiswa->update($request->all());
       toast('Oke Data Berhasil Di Edit','success');
       return redirect()->route('mahasiswa');
    }
   public function destroy($id)
   {
       $mahasiswa = mahasiswa::find($id);
       $mahasiswa->delete();
       toast('Data Telah Berhasil Dihapus','success');
       return redirect()->route('mahasiswa');
   }
}