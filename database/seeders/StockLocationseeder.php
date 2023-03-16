<?php

namespace Database\Seeders;

use App\Models\StockLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockLocationseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StockLocation::updateOrCreate([
            'description'=> 'Central',
        ]);
    }
}
