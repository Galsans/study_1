<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelas = Kelas::all();
        return view('admin.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'kelas'=>'required',
            'dkr'=>'required',
        ]);
        Kelas::create($request->all());
        return redirect()->route('kelas.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kelas $kelas, $id)
    {
        //
        $kelas = kelas::find($id);
        return view('admin.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kelas $kelas, $id)
    {
        //
        $request->validate([
            'kelas'=>'required',
            'dkr'=>'required',
        ]);
        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kelas $kelas, $id)
    {
        //
        Kelas::find($id)->delete();
        return redirect()->back();
    }
}
