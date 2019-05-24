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
    // function to get all soal in a paket
    public function getData(Request $request){
        return Soal::where('idPaket',$request->id)->get();
    }
    // function to check how many correct answer and return the score
    // with settings :
    // if correct + 4, if wrong answer -1, if no answer 0
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
    // function to return Tryout Soal from traits
    public function TryOut(){
        return $this->getSoalTryOut();
    }
    // function to return fisika Soal from traits
    public function fisika(){
        return $this->getSoalFisika(15);
    }
    // function to return kimia Soal from traits
    public function kimia(){
        return $this->getSoalKimia(15);
    }
    // function to return biologi Soal from traits
    public function biologi(){
        return $this->getSoalBio(15);
    }
    // function to return math Soal from traits
    public function math(){
        return $this->getSoalMath(15);
    }
    // function to store soal in database
    public function store(SoalRequest $request){
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
        $soal->save();
        return $soal;
    }
    // function to delete soal in database
    public function destroy(Soal $soal){
        Soal::where('id',$soal->id)->delete();
    }
    // function to get the detail of a soal in database
    public function readSoal(Soal $soal){
        return Soal::where('id',$soal->id)->get();
    }
    // function to update detail of soal in database
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
