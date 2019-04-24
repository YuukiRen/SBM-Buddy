<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PaketRequest;
use App\Paket;
class PaketController extends Controller
{
    public function nangis(){
        $hehe = new Paket; 
        return $hehe->getSoalIPS();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
    }
    public function getData()
    {
        return Paket::orderBy('kode','ASC')->get();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $paket->penjurusan = $request->choiceJurusan;
        $paket->kode = $request->kodePaket;
        $paket->tahun = $request->tahunPaket;
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
