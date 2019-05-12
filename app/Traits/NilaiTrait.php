<?php
namespace App\Traits;

class NilaiTrait{
    private $nilai;
    public function __construct() {
        $this->nilai = 0;
    }
    public function getNilai(){
        return $this->nilai;
    }
    public function addNilai(int $add){
        $this->nilai = $this->nilai + $add;
    }
}