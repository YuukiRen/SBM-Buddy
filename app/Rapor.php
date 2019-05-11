<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    // protected $casts = [ 'created_at' => 'datetime:Y-m-d'];
    public function fillPaket($len){
        if(count($len)>1){
            $this->paketsoal = "PEMANASAN";
        }
        else{
            $this->paketsoal = $len[0];
        }
    }
}
