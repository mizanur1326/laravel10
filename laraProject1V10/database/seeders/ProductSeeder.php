<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Catefory ID-1 
        DB::table('products')->insert([
            'name' => 'White Shirt',
            'description' => 'Pure Cotton White Shirt',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '100',
            'category_id' => '1',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Black Shirt',
            'description' => 'Mix Cotton Black Shirt',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '1',
            'availability' => '1',
        ]);

        // Category ID-2
        DB::table('products')->insert([
            'name' => 'Blue Pant',
            'description' => 'Pure Cotton Blue pant',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '100',
            'category_id' => '2',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Black pant',
            'description' => 'Mix Cotton Black pant',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '2',
            'availability' => '1',
        ]);

        // Category ID-3
        DB::table('products')->insert([
            'name' => 'Boots',
            'description' => 'lorem ipsum habijabi',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '100',
            'category_id' => '3',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Converse',
            'description' => 'lorem ipsum habijabi',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '3',
            'availability' => '1',
        ]);
        // Category ID-4
        DB::table('products')->insert([
            'name' => 'Leather Belt',
            'description' => 'lorem ipsum habijabi',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '100',
            'category_id' => '4',
            'availability' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Cotton Belt',
            'description' => 'lorem ipsum habijabi',
            'image' => 'images/no_photo.jpg',
            'tags' => 'no tags',
            'price' => '150',
            'category_id' => '4',
            'availability' => '1',
        ]);
    }
}
