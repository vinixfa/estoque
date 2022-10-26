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
            'nome'          =>'Creme de Hidratação',
            'quantidade'    => 10,
            'valor'         => 123,
            'categoria_id' => 1
        ]);

        Produto::create([
            'nome'          =>'Gel Capilar',
            'quantidade'    => 5,
            'valor'         => 123,
            'categoria_id' => 2
        ]);

        Produto::create([
            'nome'          =>'Tintura Capilar',
            'quantidade'    => 20,
            'valor'         => 123,
            'categoria_id' => 3
        ]);

    }
}
