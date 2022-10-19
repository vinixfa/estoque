<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProdutoSeeder;

use Database\Seeders\CategoriaSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProfissionalSeeder;
use Database\Seeders\ClienteSeeder;
use Database\Seeders\SalaoSeeder;
use Database\Seeders\ServicoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
      $this->call([
        ProdutoSeeder::class,
        ProfissionalSeeder::class,
        ServicoSeeder::class,
        UserSeeder::class,
        SalaoSeeder::class,
        ServicoSeeder::class,
        CategoriaSeeder::class,
      ]);
        
    }
}


