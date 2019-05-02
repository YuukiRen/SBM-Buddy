<?php

use App\Soal;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class IpsSoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $strings = array(
            'sosiologi',
            'geografi',
            'ekonomi',
            'sejarah'
        );
        for($i = 0;$i<30;$i++){    
            // $key = array_rand($strings);
            Soal::create([
                'idPaket' => 2,
                'pertanyaan' =>Str::random(30),
                'jawaban' => chr(rand(65,69)),
                'mapel'=>$strings[0],
                'pilihana'=> Str::random(45),
                'pilihanb'=> Str::random(45),
                'pilihanc'=> Str::random(45),
                'pilihand'=> Str::random(45),
                'pilihane'=> Str::random(45),
                'pembahasan' => Str::random(100)
            ]);
        }
        
        for($i = 0;$i<30;$i++){    
            Soal::create([
                'idPaket' => 2,
                'pertanyaan' =>Str::random(30),
                'jawaban' => chr(rand(65,69)),
                'mapel'=>$strings[1],
                'pilihana'=> Str::random(45),
                'pilihanb'=> Str::random(45),
                'pilihanc'=> Str::random(45),
                'pilihand'=> Str::random(45),
                'pilihane'=> Str::random(45),
                'pembahasan' => Str::random(100)
            ]);
        }
        
        for($i = 0;$i<30;$i++){    
            Soal::create([
                'idPaket' => 2,
                'pertanyaan' =>Str::random(30),
                'jawaban' => chr(rand(65,69)),
                'mapel'=>$strings[2],
                'pilihana'=> Str::random(45),
                'pilihanb'=> Str::random(45),
                'pilihanc'=> Str::random(45),
                'pilihand'=> Str::random(45),
                'pilihane'=> Str::random(45),
                'pembahasan' => Str::random(100)
            ]);
        }
        
        for($i = 0;$i<30;$i++){    
            Soal::create([
                'idPaket' => 2,
                'pertanyaan' =>Str::random(30),
                'jawaban' => chr(rand(65,69)),
                'mapel'=>$strings[3],
                'pilihana'=> Str::random(45),
                'pilihanb'=> Str::random(45),
                'pilihanc'=> Str::random(45),
                'pilihand'=> Str::random(45),
                'pilihane'=> Str::random(45),
                'pembahasan' => Str::random(100)
            ]);
        }
        
    }
}
