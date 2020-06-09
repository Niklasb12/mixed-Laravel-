<?php

use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'id' => 1,
            'type' => 'admin'
        ]);
        DB::table('user_types')->insert([
            'id' => 2,
            'type' => 'user'
        ]);
    }
}
