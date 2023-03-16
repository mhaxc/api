<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::updateOrCreate([
            'name' => 'Eduardo',
            'document' => '115',
            'email' => 'eduardoaraujo33@gmail.com',
            'postal_code' => '29179185'
        ]);
    }
}
