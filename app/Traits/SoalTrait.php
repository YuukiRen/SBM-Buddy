<?php

namespace App\Traits;
use App\Soal;
trait SoalTrait{
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
    protected function getSoalTryOut(){
        $fisika = $this->getSoalFisika(1);
        $kimia = $this->getSoalKimia(1);
        $biologi = $this->getSoalBio(1);
        $math = $this->getSoalMath(1);
        $merged = $fisika->merge($kimia)->merge($biologi)->merge($math);
        return $merged->all();
    }
}
