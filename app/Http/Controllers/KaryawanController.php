<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $karya = \App\karyawan::paginate(5);
        return view('karyawan.index',compact('karya'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('karyawan.create');
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
        $karya = new karyawan;
        $karya->nama = $request->a;
        $karya->bidang = $request->b;
        $karya->email = $request->c;
        $karya->no_hp = $request->d;
        $karya->alamat = $request->notes;
        $karya->save();
        return redirect()->route('karyawan.index');
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
        //
         $karya = karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karya'));
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
        //
        $karya = karyawan::findOrFail($id);
        $karya->nama = $request->a;
        $karya->bidang = $request->b;
        $karya->email = $request->c;
        $karya->no_hp = $request->d;
        $karya->alamat = $request->e;
        $karya->save();
        return redirect()->route('karyawan.index');
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
         $karya = karyawan::findOrFail($id);
        $karya ->delete();
        return redirect()->route('karyawan.index');
    }
     public function search(Request $request)
    {
        $query = $request->get('nama');
        $karya = karyawan::where('nama', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('karyawan.hasil', compact('karya', 'query'));
    }
}
