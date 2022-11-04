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
            'name'          =>'Teclado',
            'cpf'           => 12345678912,
            'email'         =>'iago1delas@hotmail.com',
            'telefone'      => 2199999999,
            'password'      => Hash::make('123456')
        ]);

    }
}
