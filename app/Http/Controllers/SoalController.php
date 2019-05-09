<?php

namespace App\Http\Controllers;
use App\Soal;
use App\Paket;
use Illuminate\Http\Request;
use App\Http\Requests\SoalRequest;
use App\Traits\SoalTrait;

use Illuminate\Support\Facades\Auth;
use App\Traits\NilaiTrait;
use App\Rapor;
class SoalController extends Controller
{
    use SoalTrait;
    public function getData(Request $request){
        return Soal::where('idPaket',$request->id)->get();
    }
    public function checkAns(Request $request){
        $score = new NilaiTrait;
        $dt = array();
        foreach($request->all() as $key=>$item){
            array_push($dt,Paket::find(Soal::find($key)->idPaket)->kode);
            if($item == Soal::find($key)->jawaban){
                $score->addNilai(4);
            }
            else{
                $score->addNilai(-1);
            }
        }
        $report = new Rapor;
        $report->score = $score->getNilai();
        $report->id_siswa = Auth::user()->id;
        $report->fillPaket(array_unique($dt));
        $report->save();
        return $score->getNilai();
    }
    public function index(){
        
    }
    public function TryOut(){
        return $this->getSoalTryOut();
    }
    public function fisika(){
        return $this->getSoalFisika(15);
    }
    public function kimia(){
        return $this->getSoalKimia(15);
    }
    public function biologi(){
        return $this->getSoalBio(15);
    }
    public function math(){
        return $this->getSoalMath(15);
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
