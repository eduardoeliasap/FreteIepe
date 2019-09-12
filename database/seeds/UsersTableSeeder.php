<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Eduardo Elias Alves Pereira',
            'email'    => 'eduardo.eliasap@gmail.com',
            'password' => '123',
        ]);
    }
}
