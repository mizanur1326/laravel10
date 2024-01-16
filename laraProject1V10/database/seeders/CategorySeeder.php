<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Shirt',
        ]);
        DB::table('categories')->insert([
            'name' => 'Pant',
        ]);
        DB::table('categories')->insert([
            'name' => 'Shoe',
        ]);
        DB::table('categories')->insert([
            'name' => 'Belt',
        ]);
    }
}
