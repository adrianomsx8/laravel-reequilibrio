<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->create([
            'name' => 'Adriano Marques de Souza',
            'email' => 'adriano.msx823@gmail.com',
            'password' => bcrypt('12345678')
        ]);
    }
}
