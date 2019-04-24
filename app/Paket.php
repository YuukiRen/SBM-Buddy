<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    public function getSoalIPA(){
        return $this->where("penjurusan","IPA")->get();
    }
    public function getSoalIPS(){
        return $this->where("penjurusan","Soshum")->get();
    }
}
