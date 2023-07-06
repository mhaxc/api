<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class Categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cozinha = Category::updateOrCreate([
            'name'=>'Cozinha',
        ]);

        Category::updateOrCreate([
            'name'=>'Panela',
            'category_id' => $cozinha->id
        ]);

        $pets = Category::updateOrCreate([
            'name'=>'Pets',
        ]);
           
        Category::updateOrCreate([
            'name'=>'Ração',
            'category_id' => $pets->id
        ]);
    }
}
