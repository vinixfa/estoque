<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome'          =>'Teclado',
            'quantidade'    => 10,
            'valor'         => 260
        ]);

        Categoria::create([
            'nome'          =>'Mouse',
            'quantidade'    => 5,
            'valor'         => 150
        ]);

        Categoria::create([
            'nome'          =>'Monitor 29',
            'quantidade'    => 20,
            'valor'         => 2200
           
        ]);

    }
}
