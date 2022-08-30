<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'name' => 'snacks'
        ]);

        Category::create([
            'name' => 'foods & goods'
        ]);

        Category::create([
            'name' => 'drinks'
        ]);

        Category::create([
            'name' => 'beauties'
        ]);

        Category::create([
            'name' => 'medicine'
        ]);
    }
}
