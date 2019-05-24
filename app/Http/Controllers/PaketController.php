<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaketRequest;
use App\Paket;
class PaketController extends Controller
{
    // get all paket soal database with ascending order
    public function getData()
    {
        return Paket::orderBy('kode','ASC')->get();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaketRequest $request)
    {
        $paket = new Paket;
        $paket->penjurusan = $request->choiceJurusan;
        $paket->kode = $request->kodePaket;
        $paket->tahun = $request->tahunPaket;
        $paket->save();
        return $paket;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaketRequest $request)
    {
        $paket = Paket::find($request->id);
        $paket->penjurusan = $request->penjurusan;
        $paket->kode = $request->kode;
        $paket->tahun = $request->tahun;
        $paket->save();
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        Paket::where('id',$paket->id)->delete();
    }
}
