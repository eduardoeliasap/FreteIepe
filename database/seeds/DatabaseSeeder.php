<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Informa que quando rodar o Seeder deve-se chamar o Seeder UsersTableSeeder
        $this->call(UsersTableSeeder::class);
    }
}
