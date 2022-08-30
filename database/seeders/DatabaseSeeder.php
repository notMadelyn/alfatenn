<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FirstSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            StockSeeder::class,
            TransactionSeeder::class,
            DiscountSeeder::class
        ]);
    }
}
