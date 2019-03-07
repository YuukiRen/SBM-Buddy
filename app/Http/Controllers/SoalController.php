<?php

namespace App\Http\Controllers;
use App\Soal;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index(){

    }
    public function create(SoalRequest $request){
        $soal = new Soal;
        $soal->pertanyaan = $request->pertanyaan;
        $soal->jawaban=$request->jawaban;
        $soal->mapel=$request->mapel;
        $soal->pembahasan=$request->pembahasan;
        $soal->pilihana=$request->pilihana;
        $soal->pilihanb=$request->pilihanb;
        $soal->pilihanc=$request->pilihanc;
        $soal->pilihand=$request->pilihand;
        $soal->pilihane=$request->pilihane;
        $soal->save();
        return $soal;
    }
    public function delete(Soal $soal){
        Soal::where('id',$soal->id)->delete();
    }
    public function readSoal(Soal $soal){
        return Soal::where('id',$soal->id)->get();
        // Pastikan ga dibalikin semua
    }
    public function edit(){
        
    }
    public function update(SoalRequest $request){
        $soal = Soal::find($request->id);
        $soal->pertanyaan = $request->pertanyaan;
        $soal->jawaban=$request->jawaban;
        $soal->mapel=$request->mapel;
        $soal->pembahasan=$request->pembahasan;
        $soal->pilihana=$request->pilihana;
        $soal->pilihanb=$request->pilihanb;
        $soal->pilihanc=$request->pilihanc;
        $soal->pilihand=$request->pilihand;
        $soal->pilihane=$request->pilihane;
        $soal->save();
        return $request->all();
    } 
}
