<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Chairs & Armchairs',
            'sort' => 1,
        ]);

        Category::create([
            'name' => 'Our beds',
            'sort' => 2,
        ]);

        Category::create([
            'name' => 'Our lamps',
            'sort' => 3,
        ]);

        Category::create([
            'name' => 'Our tables',
            'sort' => 4,
        ]);
    
        Category::create([
            'name' => 'Our sofas',
            'sort' => 5,
        ]);
    }
}
