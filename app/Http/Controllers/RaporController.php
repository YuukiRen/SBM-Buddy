<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rapor;
use Illuminate\Support\Facades\Auth;
class RaporController extends Controller
{
    // function to get progress of siswa that is currently logged in
    public function getData(){
        $show = Rapor::where('id_siswa',Auth::user()->id)->get();
        return $show;
    }
}
