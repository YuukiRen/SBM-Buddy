<?php

namespace App\Http\Controllers;
use App\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function create(Request $request){
        $soal = new Soal;
        $soal->pertanyaan = $request->pertanyaan;
        $soal->jawaban=$request->jawaban;
        $soal->mapel=$request->mapel;
        $soal->pilihana=$request->pilihana;
        $soal->pilihanb=$request->pilihanb;
        $soal->pilihanc=$request->pilihanc;
        $soal->pilihand=$request->pilihand;
        $soal->pilihane=$request->pilihane;
        $soal->save();
        return $soal;
    }
    public function read(){}
    public function delete(Soal $soal){
        Soal::where('id',$soal->id)->delete();
    }
}
