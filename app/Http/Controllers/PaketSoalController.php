<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaketSoal;
class PaketSoalController extends Controller
{
    public function assign($id_soal, $id_paket){
    	$bridge = new PaketSoal;
    	$bridge->id_soal = $id_soal;
    	$bridge->id_paket = $id_paket;
    	$bridge->save();
    }
    public function destroy_soal($id_soal){
    	PaketSoal::where('id_soal',$id_soal)->delete();
    }
    public function destroy_paket($id_paket){
    	PaketSoal::where('id_paket',$id_paket)->delete();
    }
    public function nopal(){
        
    }
}
