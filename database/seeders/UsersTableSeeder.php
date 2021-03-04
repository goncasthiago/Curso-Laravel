<?php

namespace Database\Seeders;


use App\Models\User;
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
        
        //factory(User::class, 10)->create();
        //rodar o comando
        //php artisan db:seed --class=UserTableSeeder
        User::factory()->count(10)->create(); //criando usuarios fakes

        /* //criando um usuario por seed
        User::create([
            'name' => 'Thiago Goncalves',
            'email' => 'thiagodebia@gmail.com',
            'password' => bcrypt('12345'),        
            ]);
        */
    }
}
