<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JurusanRequest;
use App\Jurusan;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function getData(Request $request)
    {
        return Jurusan::where('univ',$request->univ)->orderBy('passing_grade','DESC')->get();
    }

    public function store(JurusanRequest $request)
    {
        $jurusan = new Jurusan;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->univ = $request->univ;
        $jurusan->passing_grade = $request->passing_grade;
        $jurusan->save();
        return $jurusan;
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
    public function update(JurusanRequest $request)
    {
        $jurusan = Jurusan::find($request->id);
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->univ = $request->univ;
        $jurusan->passing_grade = $request->passing_grade;
        $jurusan->save();
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        Jurusan::where('id',$jurusan->id)->delete();
    }
    public function readAll(Jurusan $jurusan)
    {
        return Jurusan::orderBy('univ','ASC')->get();
    }

}