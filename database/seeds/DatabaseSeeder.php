<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => "Luiz Otávio Rodrigues",
            'email' => 'luiz.otavior18@gmail.com',
            'password' => bcrypt('senha123'),
        ]);
        DB::table('users')->insert([
            'name' => "André Vitebo",
            'email' => 'vitebo@hotmail.com',
            'password' => bcrypt('senha123'),
        ]);
        DB::table('types')->insert([
            'name' => "Escolha Unica",
        ]);
        DB::table('types')->insert([
            'name' => "Escolha Multiplica",
        ]);
    }
}
