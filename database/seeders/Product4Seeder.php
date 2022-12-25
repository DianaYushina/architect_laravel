<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Product4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id'=> 4,
            'name' => 'Galaxy',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 69,
            'stars' => 5,
            'count' => 4,
            'status' => 'in stock',
            'picture' => 'img/table/3table_10163_1.jpeg',
        ]);

        Product::create([
            'category_id'=> 4,
            'name' => 'Sweetheart table',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 260,
            'stars' => 5,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/table/classic_t102_00.jpeg',
        ]); 

        Product::create([
            'category_id'=> 4,
            'name' => 'Butterfly table',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 60,
            'stars' => 3,
            'count' => 4,
            'status' => 'in stock',
            'picture' => 'img/table/st132_01.jpeg',
        ]);

        Product::create([
            'category_id'=> 4,
            'name' => 'Sunshine table',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 120,
            'stars' => 4,
            'count' => 5,
            'status' => 'in stock',
            'picture' => 'img/table/classic_t101n_01.jpeg',
        ]);
    }
}
