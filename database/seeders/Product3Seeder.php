<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Product3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category_id'=> 3,
            'name' => 'Love lamps',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 59.50,
            'stars' => 5,
            'count' => 6,
            'status' => 'in stock',
            'picture' => 'img/lamps/catherine-G5vrZGOHPoM-unsplash 1.jpg',
        ]);

        Product::create([
            'category_id'=> 3,
            'name' => 'Tranquility',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.',
            'price' => 49.50,
            'stars' => 3,
            'count' => 7,
            'status' => 'in stock',
            'picture' => 'img/lamps/i-m__prakhar-kont-hUVHv2CUihY-unsplash 1.jpg',
        ]);

        Product::create([
            'category_id'=> 3,
            'name' => 'Stacked Rock Lamp',
            'description_small' => 'Now days LED lights are generally utilized by It helps carbon.',
            'description' => 'Now days LED lights are generally utilized by It helps carbon.Now days LED lights are generally utilized by It helps carbon.Now days LED lights are generally utilized by It helps carbon.Now days LED lights are generally utilized by It helps carbon.Now days LED lights are generally utilized by It helps carbon.Now days LED lights are generally utilized by It helps carbon.',
            'price' => 49.50,
            'stars' => 4,
            'count' => 5,
            'status' => 'in stock',
            'picture' => 'img/lamps/Rectangle 46.jpg',
        ]);

        Product::create([
            'category_id'=> 3,
            'name' => 'Torchiere Lamp',
            'description_small' => 'Now days LED lights are generally utilized by individuals to spare.',
            'description' => 'Now days LED lights are generally utilized by individuals to spare .Now days LED lights are generally utilized by individuals to spare .Now days LED lights are generally utilized by individuals to spare .Now days LED lights are generally utilized by individuals to spare .Now days LED lights are generally utilized by individuals to spare .Now days LED lights are generally utilized by individuals to spare.',
            'price' => 49.50,
            'stars' => 5,
            'count' => 3,
            'status' => 'in stock',
            'picture' => 'img/lamps/Rectangle 44.jpg',
        ]);
        
        Product::create([
            'category_id'=> 3,
            'name' => 'Way or Tree Lamp',
            'description_small' => 'Now days LED lnature and power. It helps carbon.',
            'description' => 'Now days LED lnature and power. It helps carbon.Now days LED lnature and power. It helps carbon.Now days LED lnature and power. It helps carbon.Now days LED lnature and power. It helps carbon.Now days LED lnature and power. It helps carbon.Now days LED lnature and power. It helps carbon.Now days LED lnature and power. It helps carbon.Now days LED lnature and power. It helps carbon.',
            'price' => 49.50,
            'stars' => 4,
            'count' => 7,
            'status' => 'in stock',
            'picture' => 'img/lamps/Rectangle 45.jpg',
        ]);

        Product::create([
            'category_id'=> 3,
            'name' => 'Dawn lamp',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layout.The readable content of a page when looking at its layout.The readable content of a page when looking at its layout. The readable content of a page when looking at its layout. The readable content of a page when looking at its layout. The readable content of a page when looking at its layout. The readable content of a page when looking at its layout. The readable content of a page when looking at its layout.',
            'price' => 149.50,
            'stars' => 5,
            'count' => 5,
            'status' => 'in stock',
            'picture' => 'img/lamps/eJPm3aDb1b 3.jpg',
        ]);

        Product::create([
            'category_id'=> 3,
            'name' => 'Luminous lamp',
            'description_small' => 'The readable content of a page when looking at its layout.',
            'description' => 'The readable content of a page when looking at its layoutThe readable content of a page when looking at its layoutThe readable content of a page when looking at its layoutThe readable content of a page when looking at its layout .The readable content of a page when looking at its layout .The readable content of a page when looking at its layout ...',
            'price' => 199.50,
            'stars' => 4,
            'count' => 5,
            'status' => 'in stock',
            'picture' => 'img/lamps/Qga7CanoRZ 1.jpg',
        ]);
    }
}
