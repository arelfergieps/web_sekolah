<?php

namespace App\Http\Controllers;

use App\Models\saran as ModelsSaran;
use Illuminate\Http\Request;

class saran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelsSaran::all();
        return view ('beranda/saran', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $addSaran = new ModelsSaran();
        $addSaran->nama = $request->nama;
        $addSaran->email = $request->email;
        $addSaran->tipe = $request->tipe;
        $addSaran->pesan = $request->pesan;
        $addSaran->save();
        return redirect()->route('saran.view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $editData = ModelsSaran::find($id);
        return view('beranda/editsaran',compact('editData'));
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
       
        $UpdateSaran = ModelsSaran::find($id);
        $UpdateSaran->nama = $request->nama;
        $UpdateSaran->email = $request->email;
        $UpdateSaran->tipe = $request->tipe;
        $UpdateSaran->pesan = $request->pesan;
        $UpdateSaran->update();
        return redirect()->route('saran.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteData = ModelsSaran::find($id);
        $deleteData->delete();
        return redirect()->route('saran.view')->with('info', 'DATA TELAH BERHASIL DIHAPUS'); 
    }
}
