<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
          $barang = \App\barang::paginate(5);
        return view('barang.index',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('barang.create');
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
         $barang=new barang;
        $barang->nama=$request->a;
        $barang->jenis=$request->b;
        $barang->merek=$request->c;
        $barang->warna=$request->d;
        $barang->jumlah = $request->e;
         $barang->jual = $request->f;
          $barang->beli = $request->g;
        if($request->hasfile('cover')){
            $barangs=$request->file('cover');
            $extension=$barangs->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $barangs->move($destinationPath ,$filename);
            $barang->cover=$filename;
        }
        $barang->save();
        return redirect()->route('barang.index');
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
        $barang = barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
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
        $barang = barang::findOrFail($id);
         $barang->nama=$request->a;
         $barang->jenis=$request->b;
        $barang->merek=$request->c;
        $barang->warna=$request->d;
        $barang->jumlah = $request->e;
        $barang->jual = $request->f;
        $barang->beli = $request->g;
         if($request->hasfile('cover')){
            $barangs=$request->file('cover');
            $extension=$barangs->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $barangs->move($destinationPath ,$filename);
            $barang->cover=$filename;
        }
        $barang->save();
        return redirect()->route('barang.index');
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
        $barang = barang::findOrFail($id);
        $barang ->delete();
        return redirect()->route('barang.index');
    }
     
     public function search(Request $request)
    {
        $query = $request->get('nama');
        $barang = barang::where('nama', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('barang.hasil', compact('barang','query'));
    }

}
