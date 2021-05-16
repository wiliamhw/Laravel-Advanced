<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Post;
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
        /** e6 - Pipelines **/
        Post::factory(50)
            ->create();

        /** e7 - Repository **/
        Customer::factory(50)
            ->create();
    }
}
