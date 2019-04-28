<?php

use App\PaketSoal;
use Illuminate\Database\Seeder;

class paketSoal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 40; $i++){
            PaketSoal::create([
                'id_soal' => $i,
                'id_paket' => 'A1314'
            ]); 
        }
          
    }
}
