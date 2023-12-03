<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Products')->insert([
            'Name'=>'LG mobile',
            'Price'=>'10000',
            'Category'=>'mobile',
            'Gallery'=>'C:/Users/A and Z Computechs/Pictures/laravel.png',
            'Description'=>'samart phone',
            
        ]);
    }
}
