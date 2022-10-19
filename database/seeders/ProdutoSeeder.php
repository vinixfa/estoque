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
            'nome'          =>'Teclado',
            'quantidade'    => 10,
            'valor'         => 123
        ]);

        Produto::create([
            'nome'          =>'Mouse',
            'quantidade'    => 5,
            'valor'         => 123
        ]);

        Produto::create([
            'nome'          =>'Monitor 29',
            'quantidade'    => 20,
            'valor'         => 123
        ]);

    }
}
