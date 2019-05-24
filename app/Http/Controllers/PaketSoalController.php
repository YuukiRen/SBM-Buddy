<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PaketSoal;
class PaketSoalController extends Controller
{
    // function to assign soal to paketsoal
    public function assign($id_soal, $id_paket){
    	$bridge = new PaketSoal;
    	$bridge->id_soal = $id_soal;
    	$bridge->id_paket = $id_paket;
    	$bridge->save();
    }
    // function to destroy soal
    public function destroy_soal($id_soal){
    	PaketSoal::where('id_soal',$id_soal)->delete();
    }
    // function to destroy paket soal
    public function destroy_paket($id_paket){
    	PaketSoal::where('id_paket',$id_paket)->delete();
    }
}
