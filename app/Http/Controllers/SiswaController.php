<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
    {
        //
        $siswa = Siswa::all();
        return view('admin.siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
            'id_kelas'=>'required',
        ]);
        Siswa::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'no_telp'=>$request->input('no_telp'),
            'id_kelas'=>$request->input('id_kelas'),
        ]);
        // $input = $request->all();
        // Siswa::create($input);
        return redirect()->route('siswa.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(siswa $siswa, $id)
    {
        //
        $siswa = Siswa::find($id);
        return view('admin.siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, siswa $siswa, $id)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
            'id_kelas'=>'required',
        ]);

        $siswa = Siswa::find($id);
        $siswa->name = $request->input('name');
        $siswa->email = $request->input('email');
        $siswa->no_telp = $request->input('no_telp');
        $siswa->id_kelas = $request->input('id_kelas');
        $siswa->save();
        return redirect()->route('siswa.index')->with('status', 'Data Siswa Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa, $id)
    {
        //
        $siswa = Siswa::find($id)->delete();
        return redirect()->back();
    }
}
