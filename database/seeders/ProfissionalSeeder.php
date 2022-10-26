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
            'id'            =>'',
            'nome'          =>'Vinicius',
   
        ]);

        Profissional::create([
            'id'            =>'',
            'nome'          =>'Iago'           
        ]);

        Profissional::create([
            'id'            =>'',
            'nome'          =>'Nayara',
           
        ]);

    }
}
