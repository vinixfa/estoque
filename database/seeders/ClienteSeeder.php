<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome'          =>'Vinicius',
            'quantidade'    => 10,
            'valor'         => 260
        ]);

        Cliente::create([
            'nome'          =>'Iago',
            'quantidade'    => 5,
            'valor'         => 150
        ]);

        Cliente::create([
            'nome'          =>'Nayara',
            'quantidade'    => 20,
            'valor'         => 2200
        ]);

    }
}
