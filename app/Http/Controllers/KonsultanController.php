<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Konsultan;

class KonsultanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Konsultan::all();
        return view('konsultan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konsultan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Konsultan();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jasa = $request->jasa;
        $data->email = $request->email;
        $data->tarif = $request->tarif;
        //$data->rating = $request->rating;
        $data->rating = 0;
        $data->save();
        return redirect()->route('konsultan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Konsultan::find($id);
        return view('konsultan.lihat', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Konsultan::where('id', $id)->get();
        return view('konsultan.edit', compact('data'));
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
        $data = Konsultan::where('id', $id)->first();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jasa = $request->jasa;
        $data->email = $request->email;
        $data->tarif = $request->tarif;
        //$data->rating = $request->rating;
        $data->rating = 0;
        $data->save();
        return redirect()->route('konsultan.index')->with('alert-success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Konsultan::where('id', $id)->first();
        $data->delete();
        return redirect()->route('konsultan.index');
    }
}
