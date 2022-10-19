<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Salao;

class SalaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salao::create([
            'nome'          =>'Teclado'

        ]);

        Salao::create([
            'nome'          =>'Mouse'
        ]);

        Salao::create([
            'nome'          =>'Monitor 29'
        ]);

    }
}
