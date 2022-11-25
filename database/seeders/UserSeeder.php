<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          =>'Iago',
            'cpf'           => 12345678912,
            'email'         =>'iago1delas@gmail.com',
            'telefone'      => 2199999999,
            'password'      => Hash::make('123456'),
            'perfil'    => 'admin'
        ]);

        User::create([
            'name'          =>'André',
            'cpf'           => 12345678912,
            'email'         =>'andr@andr.com.br',
            'telefone'      => 2199999999,
            'password'      => Hash::make('123456'),
            'perfil'    => 'admin'
        ]);

    }
}
