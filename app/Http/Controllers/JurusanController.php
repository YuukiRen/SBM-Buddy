<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JurusanRequest;
use App\Jurusan;

class JurusanController extends Controller
{
    /* 
    * function to get all data of jurusan by specific
    * univ with passing grade, and packing the data
    * with descending order
    */ 
    public function getData(Request $request)
    {
        return Jurusan::where('univ',$request->univ)->orderBy('passing_grade','DESC')->get();
    }
    // Storing data to jurusan database
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
    // get all jurusan in database with ascending order
    public function readAll(Jurusan $jurusan)
    {
        return Jurusan::orderBy('univ','ASC')->get();
    }

}
