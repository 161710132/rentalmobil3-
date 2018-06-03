<?php

namespace App\Http\Controllers;

use App\Supir;
use Illuminate\Http\Request;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $supir = Supir::all();
        return view('supir.index',compact('supir'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supir.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'alamat'=>'required|',
            'umur'=>'required|',
            'harga'=>'required|'
        ]);
        $supir = new Supir;
        $supir->nama = $request->nama;
        $supir->alamat = $request->alamat;
        $supir->umur = $request->umur;
        $supir->harga = $request->harga;
        $supir->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('supir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function show(Supir $supir)
    {
        $supir = Supir::findOrFail($id);
        return view('supir.show',compact('supir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function edit(Supir $supir)
    {
        $supir = Supir::findOrFail($id);
        return view('supir.edit',compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supir $supir)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'alamat'=>'required|',
            'umur'=>'required|',
            'harga'=>'required|'
        ]);
        $supir = Supir::findOrFail($id);
        $supir->nama = $request->nama;
        $supir->alamat = $request->alamat;
        $supir->umur = $request->umur;
        $supir->harga = $request->harga;
        $supir->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$a->nama</b>"
        ]);
        return redirect()->route('supir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supir $supir)
    {
        $supir = Supir::findOrFail($id);
        $supir->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('supir.index');
    }
}
