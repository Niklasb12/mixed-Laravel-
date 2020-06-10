<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'lunch',
        ]);

        DB::table('categories')->insert([
            'category' => 'dinner',
        ]);
    }
}
