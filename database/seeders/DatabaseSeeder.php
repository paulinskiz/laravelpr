<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Order;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Book::factory(10)->create();
        Order::factory(10)->create();

        $this->call([
            UserSeeder::class,
        ]);
    }
}
