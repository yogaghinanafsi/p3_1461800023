<?php

namespace App\Http\Controllers;

use App\Models\Perpustakaan;
use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpustakaan = perpustakaan::all();
        return view('perpustakaan', ['perpustakaan' => $perpustakaan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perpustakaan_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perpustakaan::create([
            'nbi' => $request->nbi,
            'nama_mhs' => $request->nama_mhs,
        ]);

        return redirect('perpustakaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perpustakaan = Perpustakaan::find($id);
        return view('perpustakaan_edit', ['perpustakaan' => $perpustakaan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $perpustakaan = perpustakaan::find($id);
        $perpustakaan->nbi = $request->nbi;
        $perpustakaan->nama_mhs = $request->nama_mhs;
        $perpustakaan->save();

        return redirect('perpustakaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
