<?php

namespace Database\Seeders;

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
        // \App\Models\PaymentPlatformsTableSeeder::factory(10)->create();
         $this->call(PaymentPlatformsTableSeeder::class);
         $this->call(CurrenciesTableSeeder::class);
         //\App\Models\CurrenciesTableSeeder::factory(10)->create();
    }
}
