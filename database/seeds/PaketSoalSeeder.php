<?php

use Illuminate\Database\Seeder;
use App\Paket;

class PaketSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paket::create([
            'penjurusan'=>'IPA',
            'kode'=>'A1314',
            'tahun'=>2013
        ]);
        Paket::create([
            'penjurusan'=>'IPS',
            'kode'=>'B11',
            'tahun'=>2019
        ]);
    }
}