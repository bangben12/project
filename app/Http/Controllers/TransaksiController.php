<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;
use App\konsumen;
use App\barang;
use Session;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tran= \App\transaksi::paginate(5);
    return view('transaksi.index', compact('tran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $konsu= konsumen::all();
         $barang= barang::all();
        return view('transaksi.create', compact('barang','konsu'));
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
        $tran = new transaksi;
       
        $tran->konsumen_id = $request->a;
        $tran->barang_id = $request->b;
          if($request->hasfile('barang')){
            $transaksis=$request->file('barang');
            $extension=$transaksis->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $transaksis->move($destinationPath ,$filename);
            $tran->$barang->cover=$filename;
        }
        
        $tran->jumlah = $request->e;

        $barang = barang::findOrFail($request->b);
        $barang->jumlah = $barang->jumlah - $request->e;
        $barang->save();
       

        $tran->bayar = $request->g;
        $tran->total = $request->e* $barang->jual;
        $tran->kembali = $request->e*$barang->jual-$request->g;
        $tran->save();
      
        // for($id = 0; $id < cout($request->barang_id); $id++){
        //     $tran = new transaksi;
        //     $tran->barang_id = $request->barang_id[$id];
        //     $tran->konsumen_id = $request->konsumen_id[$id];
        //     $tran->jumlah = $request->jumlah[$id];

        //     $barang = barang::findOrFail($request->barang_id[$id]);
        //     $barang->jumlah = $barang->jumlah + $request->jumlah[$id];
        //     $tran->total = $request->jumlah[$id] * $barang->jual;
        //     $barang->save();
        //     $tran->save();

        // }
    
        // if ($barang->jumlah >= $request ->b); {
        //     Session::flash("flash_notification",[
        //         "level"=>"danger",
        //         "message"=>"Stok Tidak Mencukupi"]);
           
        // }
          return redirect()->route('transaksi.index');
        
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
         $tran= transaksi::findOrFail($id);
         $konsu= konsumen::all();
         $barang = barang::all();
        return view('transaksi.edit',compact('tran','konsu','barang'));

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
         $tran= transaksi::findOrFail($id);
        $tran->konsumen_id = $request->a;
        $tran->barang_id = $request->b;
        if($request->hasfile('barang')){
            $transaksis=$request->file('barang');
            $extension=$transaksis->getClientOriginalExtension();
            $filename=str_random(6). '.' .$extension;
            $destinationPath=public_path() .
            DIRECTORY_SEPARATOR . 'img';
            $transaksis->move($destinationPath ,$filename);
            $tran->$barang->cover=$filename;
        }
        $tran->jumlah = $request->e;

        $barang = barang::findOrFail($request->b);
        $barang->jumlah = $barang->jumlah - $request->e;
        $barang->save();

         $tran->bayar = $request->g;
        $tran->total = $request->e*$barang->jual;;
         $tran->kembali = $request->e*$barang->jual-$request->g;
        $tran->save();
        return redirect()->route('transaksi.index');
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
         $tran = transaksi::findOrFail($id);
        $tran ->delete();
        return redirect()->route('transaksi.index');
    }
       public function search(Request $request)
    {
         $konsu = konsumen::all();
          $barang = barang::all();
     $query = $request->get('konsumen_id');
        $tran = transaksi::where('konsumen_id', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('transaksi.hasil', compact('tran','query','barang','konsu'));
    }
}
