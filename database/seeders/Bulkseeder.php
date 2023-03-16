<?php

namespace Database\Seeders;

use App\Models\Bulk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Bulkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bulk::updateOrCreate([
            'name'=> 'Peso',
            'Slug' => 'KG'
        ]);
    }
}
