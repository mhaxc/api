<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderItem::updateOrCreate([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 3,
            'value' => 8.7,

        ]);

        OrderItem::updateOrCreate([
            'order_id' => 2,
            'product_id' => 1,
            'quantity' => 3,
            'value' => 5.7,

        ]);
    }
}
