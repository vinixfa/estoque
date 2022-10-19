<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Servico;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servico::create([
            'nome'          =>'Teclado',
            'valor'         => 260
        ]);

        Servico::create([
            'nome'          =>'Mouse',
            'valor'         => 150
        ]);

        Servico::create([
            'nome'          =>'Monitor 29',
            'valor'         => 2200
        ]);
    }
}
