<?php
use App\Soal;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $strings = array(
            'matematika',
            'fisika',
            'kimia',
            'biologi'
        );
        for($i = 0;$i<15;$i++){    
            // $key = array_rand($strings);
            Soal::create([
                'idPaket' => 1,
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
        
        for($i = 0;$i<15;$i++){    
            Soal::create([
                'idPaket' => 1,
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
        
        for($i = 0;$i<15;$i++){    
            Soal::create([
                'idPaket' => 1,
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
        
        for($i = 0;$i<15;$i++){    
            Soal::create([
                'idPaket' => 1,
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
