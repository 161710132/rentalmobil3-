<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;
use App\Merk;
use Session;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = Mobil::with('Merk')->get();
        return view('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        return view('mobil.create',compact('merk'));
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
            'perseneling' => 'required|',
            'plat_no' => 'required|',
            'warna' => 'required|',
            'tahun_keluaran'=> 'required|',
            'harga'=>'required|',
            'stock'=>'required|',
            'jenis'=>'required|',
            'merk_id'=>'required'
        ]);
        $mobil = new Mobil;
        $mobil->nama = $request->nama;
        $mobil->perseneling = $request->perseneling;
        $mobil->plat_no = $request->plat_no;
        $mobil->warna = $request->warna;
        $mobil->tahun_keluaran = $request->tahun_keluaran;
        $mobil->harga = $request->harga;
        $mobil->stock = $request->stock;
        $mobil->jenis = $request->jenis;
        $mobil->merk_id = $request->merk_id;
        $mobil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$mobil->nama</b>"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        $merk = Merk::all();
        $selectedMerk = Mobil::findOrFail($id)->merk_id;
        // dd($selected);
        return view('mobil.edit',compact('mobil','merk','selectedMerk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'perseneling' => 'required|',
            'plat_no' => 'required|',
            'warna' => 'required|',
            'tahun_keluaran'=> 'required|',
            'harga'=>'required|',
            'stock'=>'required|'
        ]);
        $mobil = Mobil::findOrFail($id);
        $mobil->nama = $request->nama;
        $mobil->perseneling = $request->perseneling;
        $mobil->plat_no = $request->plat_no;
        $mobil->warna = $request->warna;
        $mobil->tahun_keluaran = $request->tahun_keluaran;
        $mobil->harga = $request->harga;
        $mobil->stock = $request->stock;
        $mobil->merk_id = $request->merk_id;
        $mobil->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$mobil->nama</b>"
        ]);
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merk = Mobil::findOrFail($id);
        $merk->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('mobil.index');
    }
}
