<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Profissional;

class ProfissionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profissional::create([
            
            'nome'          =>'Vinicius',
   
        ]);

        Profissional::create([
            
            'nome'          =>'Iago'           
        ]);

        Profissional::create([
            
            'nome'          =>'Nayara',
           
        ]);

    }
}
