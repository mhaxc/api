<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Orderseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Order::updateOrCreate([
            'number' => 1,
            'observation' => "Agora vai",
            'date' => "07.20.2022"

        ]);

        Order::updateOrCreate([
            'number' => 2,
            'observation' => " Segunda",
            'date' => "07.20.2022"

        ]);

        Order::updateOrCreate([
            'number' => 3,
            'observation' => " terceiro",
            'date' => "20.20.2022"

        ]);

        Order::updateOrCreate([
            'number' => 4,
            'observation' => " terceiro",
            'date' => "20.20.2022"

        ]);
    }
}
