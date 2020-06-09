<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Carro',
            'email' => 'carro@gmail.com',
            'password' => '$2y$10$7HdJSbpAuGGzXd4TipGGUePVGcCJqoGJ6WRfuQjbwHg4HH0Sc43mi',
            'user_type_id' => 1,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Niklas',
            'email' => 'niklasborg12@gmail.com',
            'password' => '$2y$10$TkFwEjRKqzM0G4Q2/m6RnOZec33VLSB04v6yvyDMy.a.UFrFxjUL2',
        ]);

        DB::table('users')->insert([
            'name' => 'Cassandra',
            'email' => 'cassandra@gmail.com',
            'password' => '$2y$10$FT/ppFeuakdexOTKrIuHe.3TXb4ppXkrffIv1i2PNpYX2255WEi5q',
        ]);
    }
}
