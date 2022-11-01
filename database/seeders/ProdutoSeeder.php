<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome'          =>'Cabelo',
            'quantidade'    => 10,
            'valor'         => 123,
            'categoria_id' => 1
        ]);

        Produto::create([
            'nome'          =>'Rosto',
            'quantidade'    => 5,
            'valor'         => 123,
            'categoria_id' => 2
        ]);

        Produto::create([
            'nome'          =>'Unhas',
            'quantidade'    => 20,
            'valor'         => 123,
            'categoria_id' => 3
        ]);

    }
}
