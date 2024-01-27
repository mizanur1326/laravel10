<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Samsung',
                'description' => 'Brand Samsung',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Samsung_Logo.svg/2560px-Samsung_Logo.svg.png'
            ],
            [
                'name' => 'Apple',
                'description' => 'Brand Apple',
                'logo' => 'https://substackcdn.com/image/fetch/f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fsubstack-post-media.s3.amazonaws.com%2Fpublic%2Fimages%2F8ed3d547-94ff-48e1-9f20-8c14a7030a02_2000x2000.jpeg'
            ],
            [
                'name' => 'HP',
                'description' => 'Brand HP',
                'logo' => 'https://p1.hiclipart.com/preview/473/1008/853/hp-logo-png-clipart-thumbnail.jpg'
            ]
        ];

        foreach($brands as $key => $value){
            Brand::create($value);
        }
    }
}
