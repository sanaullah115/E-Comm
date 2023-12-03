<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usermodels')->insert([
            'Name'=>'ali',
            'Email'=>'ali@gmail.com',
            'Password'=>Hash::make('1234')
        ]);
    }
}
