<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'product_id'=> 1,
            'quantity'=> 50,
            'expire_date'=> '2023-5-1'
        ]);

        Stock::create([
            'product_id'=> 2,
            'quantity'=> 50,
            'expire_date'=> '2023-5-1'
        ]);
        Stock::create([
            'product_id'=> 3,
            'quantity'=> 50,
            'expire_date'=> '2023-5-1'
        ]);

        Stock::create([
            'product_id'=> 4,
            'quantity'=> 50,
            'expire_date'=> '2023-5-1'
        ]);

        Stock::create([
            'product_id'=> 5,
            'quantity'=> 50,
            'expire_date'=> '2023-5-1'
        ]);
    }
}
