<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Channel;
use App\Models\Customer;
use App\Models\Post;
use App\Models\Tweet;
use App\Models\User;
use App\Models\Video;
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
        /** e2 - View Composers **/
        Channel::factory(20)->create();

        /** e3 - Polumorphic Relation **/
        $this->polymorphicRelation();

        /** e6 - Pipelines Pattern **/
        Post::factory(50)->create();

        /** e7 - Repository Pattern **/
        Customer::factory(50)->create();

        /** e9 - Soft Deletes **/
        Article::factory(10)->create();
    }

    private function polymorphicRelation()
    {
        Tweet::factory(5)->create();
        User::factory(1)->create();
        Video::factory(1)->create();

        $tweet = Tweet::first();
        $user = User::first();
        $video = Video::first();

        // One to one
        $tweet->image()->create(['url' => 'some/image.jpg']);
        $user->image()->create(['url' => 'profile.jpg']);

        // One to many
        $tweet->comments()->create(['body' => 'First cool comment.']);
        $tweet->comments()->create(['body' => 'First cool comment again.']);
        $video->comments()->create(['body' => 'Video comment.']);

        // Many to many
        $tweet->tags()->create(['name' => 'Laravel']);
        $tweet->tags()->create(['name' => 'Eloquent']);
        $video->tags()->create(['name' => 'PHP']);
        $tweet->tags()->attach(1);
    }
}
