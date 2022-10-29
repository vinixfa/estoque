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
            'profissao'     =>'Manucure',
   
        ]);

        Profissional::create([
            
            'nome'          =>'Iago',  
            'profissao'     =>'cabelereiro',
        ]);

        Profissional::create([
            
            'nome'          =>'Nayara',
            'profissao'     =>'Pedicure',
        ]);

    }
}
