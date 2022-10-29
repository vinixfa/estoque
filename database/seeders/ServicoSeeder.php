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
            'nome'                   =>'Teclado',
            'servico'                =>'Corte de cabelo',
            'profissional'           =>'Iago',
            'valor'                  => 260
        ]);

        Servico::create([
            'nome'                   =>'Teclado',
            'servico'                =>'Barba simples',
            'profissional'           =>'Vinicius',
            'valor'                  => 260
        ]);

        Servico::create([
            'nome'                    =>'Teclado',
            'servico'                 =>'Progressiva',
            'profissional'            =>'Nayara',
            'valor'                   => 260
        ]);
    }
}
