<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\konsumen;
class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $konsu = \App\konsumen::paginate(5);
        return view('konsumen.index',compact('konsu'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('konsumen.create');
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
         $konsu = new konsumen;
        $konsu->nama = $request->a;
        $konsu->email = $request->c;
        $konsu->no_hp = $request->d;
        $konsu->alamat = $request->notes;
        $konsu->save();
        return redirect()->route('konsumen.index');
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
         $konsu = konsumen::findOrFail($id);
        return view('konsumen.edit', compact('konsu'));
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
        $konsu = konsumen::findOrFail($id);
        $konsu->nama = $request->a;
        $konsu->email = $request->c;
        $konsu->no_hp = $request->d;
        $konsu->alamat = $request->e;
        $konsu->save();
        return redirect()->route('konsumen.index');

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
         $konsu = konsumen::findOrFail($id);
        $konsu ->delete();
        return redirect()->route('konsumen.index');
    }
     public function search(Request $request)
    {
        $query = $request->get('nama');
        $konsu = konsumen::where('nama', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('konsumen.hasil', compact('konsu', 'query'));
    }
}
