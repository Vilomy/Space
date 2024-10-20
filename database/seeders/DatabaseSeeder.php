<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Doctor;
use App\Models\Order;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Promocode;
use App\Models\Transaction;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Doctor::factory(20)->create();
        Order::factory(20)->create();
        Product::factory(20)->create();
        Profile::factory(20)->create();
        Promocode::factory(20)->create();
        Transaction::factory(20)->create();
    }
}
