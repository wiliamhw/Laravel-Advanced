<?php

namespace Database\Seeders;

use App\Models\Channel;
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
        /** e2 - View Composers */
        Channel::factory(20)->create();

        /** e6 - Pipelines Pattern **/
        Post::factory(50)->create();

        /** e7 - Repository Pattern **/
        Customer::factory(50)->create();
    }
}
