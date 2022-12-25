<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Product2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id'=> 2,
            'name' => 'Gray bed',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 189.50,
            'stars' => 3,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/bed/bed_odri_3.jpeg',
        ]);

        Product::create([
            'category_id'=> 2,
            'name' => 'Gray bed',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 249,
            'stars' => 4,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/bed/bed_prima_005.jpeg',
        ]);

        Product::create([
            'category_id'=> 2,
            'name' => 'Velvet gold bed',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 369,
            'stars' => 5,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/bed/bauntibed_000.jpeg',
        ]);

        Product::create([
            'category_id'=> 2,
            'name' => 'Brownbed',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 299.50,
            'stars' => 5,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/bed/garmoniya_002.jpeg',
        ]);
    }
}
