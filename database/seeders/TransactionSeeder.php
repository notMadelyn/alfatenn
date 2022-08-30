<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'product_id'=> 1,
            'user_id'=> 2,
            'quantity'=> 3,
            'status'=> 'unpaid',
            'invoice_code' => 'INV_32301'
        ]);

        Transaction::create([
            'product_id'=> 2,
            'user_id'=> 2,
            'quantity'=> 5,
            'status'=> 'unpaid',
            'invoice_code' => 'INV_32301'
        ]);

        Transaction::create([
            'product_id'=> 3,
            'user_id'=> 2,
            'quantity'=> 1,
            'status'=> 'unpaid',
            'invoice_code' => 'INV_32301'
        ]);

        Transaction::create([
            'product_id'=> 4,
            'user_id'=> 2,
            'quantity'=> 1,
            'status'=> 'unpaid',
            'invoice_code' => 'INV_32301'
        ]);

        Transaction::create([
            'product_id'=> 5,
            'user_id'=> 2,
            'quantity'=> 3,
            'status'=> 'unpaid',
            'invoice_code' => 'INV_32301'
        ]);
    }
}
