<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Product1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id'=> 1,
            'name' => 'Gray armchair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 99.50,
            'stars' => 5,
            'count' => 1,
            'status' => 'in stock',
            'picture' => 'img/chairs/Container.png',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'Blue armchair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 109.50,
            'stars' => 4,
            'count' => 1,
            'status' => 'in stock',
            'picture' => 'img/chairs/Container (3).jpg',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'Orange armchair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 149,
            'stars' => 5,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/chairs/Container (2).jpg',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'White chair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 49.50,
            'stars' => 5,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/chairs/Container (5).jpg',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'Brown armchair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 160.50,
            'stars' => 4,
            'count' => 2,
            'status' => 'in stock',
            'picture' => 'img/chairs/armchair_lord_005.jpeg',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'Silver armchair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 169.50,
            'stars' => 4,
            'count' => 3,
            'status' => 'in stock',
            'picture' => 'img/chairs/armchair_prestige_0030.jpeg',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'Gray chair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 49.50,
            'stars' => 4,
            'count' => 4,
            'status' => 'in stock',
            'picture' => 'img/chairs/chair-elios-0.jpeg',
        ]);
        
        Product::create([
            'category_id'=> 1,
            'name' => 'Plastic chair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 49.50,
            'stars' => 4,
            'count' => 5,
            'status' => 'in stock',
            'picture' => 'img/chairs/item_01dc10227_0.jpeg',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'Dark gray chair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 89.50,
            'stars' => 4,
            'count' => 3,
            'status' => 'in stock',
            'picture' => 'img/chairs/232chair_001.jpeg',
        ]);

        Product::create([
            'category_id'=> 1,
            'name' => 'Velvet chair',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 80,
            'stars' => 4,
            'count' => 5,
            'status' => 'in stock',
            'picture' => 'img/chairs/stul-elegant_01.jpeg',
        ]);
    }
}
