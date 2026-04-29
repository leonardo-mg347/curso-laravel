<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $user_exemplo = [
            'codpes'  => '1234567',
            'email'   => 'qualquer@usp.br',
            'name'    => 'Fulano da Silva',
            'password'=> 'password' 
        ];
        User::create($user_exemplo); 
        User::factory(30)->create();
    }
}
