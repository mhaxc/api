<?php

namespace Database\Seeders;

use App\Models\AlternativeUnit;
use App\Models\StockLocation;
use App\Models\TypePayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            Categoryseeder::class,
            Customerseeder::class,
            Bulkseeder::class,
            Productseeder::class,
            TypePaymentseeder::class,
            Userseeder::class,
            //Orderseeder::class,
            //OrderItemseeder::class,
            StockLocationseeder::class,
            AlternativeUnitseeder::class,
        ]);
    }
}
