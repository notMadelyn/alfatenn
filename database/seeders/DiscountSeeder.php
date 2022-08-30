<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discount::create([
            'product_id'=> 4,
            'percentage'=> 10,
            'start_date'=> '2022-8-1',
            'end_date'=> '2022-8-30'
        ]);

        Discount::create([
            'product_id'=> 3,
            'percentage'=> 10,
            'start_date'=> '2022-8-1',
            'end_date'=> '2022-8-15'
        ]);
    }
}
