<?php

namespace App\Http\Controllers;
use App\Soal;
use Illuminate\Http\Request;
use App\Http\Requests\SoalRequest;

class SoalController extends Controller
{
    public function getData(Request $request){
        return Soal::where('idPaket',$request->id)->get();
    }
    public function index(){

    }

    public function create(){

    }

    public function store(SoalRequest $request){
        echo "Hello World";
        $soal = new Soal;
        $soal->idPaket = $request->idPaket;
        $soal->pertanyaan = $request->soal;
        $soal->mapel=$request->mapel;
        $soal->pembahasan=$request->ans;
        $soal->pilihana=$request->A;
        $soal->pilihanb=$request->B;
        $soal->pilihanc=$request->C;
        $soal->pilihand=$request->D;
        $soal->pilihane=$request->E;
        $soal->jawaban = $request->ansUser;
        echo "Done";
        
        $soal->save();
        return $soal;
    }
    public function destroy(Soal $soal){
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
