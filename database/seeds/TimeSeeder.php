<?php

use Illuminate\Database\Seeder;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('times')->insert([
            'category_id' => 1,
            'time' => '11.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 1,
            'time' => '12.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 1,
            'time' => '13.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 1,
            'time' => '14.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 1,
            'time' => '15.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 2,
            'time' => '17.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 2,
            'time' => '18.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 2,
            'time' => '19.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 2,
            'time' => '20.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 2,
            'time' => '21.00',
            
        ]);
        DB::table('times')->insert([
            'category_id' => 2,
            'time' => '22.00',
            
        ]);
    }
    }

