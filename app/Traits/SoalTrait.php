<?php

namespace App\Traits;
use App\Soal;
use Illuminate\Support\Facades\Auth;
trait SoalTrait{
    // IPA
    protected function getSoalMath(int $i){
        return Soal::where('mapel','matematika')->get()->random($i);
    }
    protected function getSoalFisika(int $i){
        return Soal::where('mapel','fisika')->get()->random($i);
    }
    protected function getSoalKimia(int $i){
        return Soal::where('mapel','kimia')->get()->random($i);
    }
    protected function getSoalBio(int $i){
        return Soal::where('mapel','biologi')->get()->random($i);
    }
    // IPS
    protected function getSoalEko(int $i){
        return Soal::where('mapel','ekonomi')->get()->random($i);
    }
    protected function getSoalGeo(int $i){
        return Soal::where('mapel','geografi')->get()->random($i);
    }
    protected function getSoalSej(int $i){
        return Soal::where('mapel','sejarah')->get()->random($i);
    }
    protected function getSoalSosio(int $i){
        return Soal::where('mapel','sosiologi')->get()->random($i);
    }
    protected function getSoalTryOut(){
        if(Auth::user()->jurusan == "IPA"){
            $fisika = $this->getSoalFisika(15);
            $kimia = $this->getSoalKimia(15);
            $biologi = $this->getSoalBio(15);
            $math = $this->getSoalMath(15);
            $merged = $fisika->merge($kimia)->merge($biologi)->merge($math);
        }
        else if(Auth::user()->jurusan == "IPS"){
            $geo = $this->getSoalGeo(15);
            $sosio = $this->getSoalSosio(15);
            $sej = $this->getSoalSej(15);
            $eko = $this->getSoalEko(15);
            $merged = $geo->merge($sosio)->merge($sej)->merge($eko);
        }
        return $merged->all();
    }
}
