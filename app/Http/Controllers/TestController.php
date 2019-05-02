<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\NilaiTrait;
class TestController extends Controller
{
    public function nangis(){
        $hehe = new NilaiTrait;
        $hehe->addNilai(100);
        return $hehe->getNilai();
    }
}
