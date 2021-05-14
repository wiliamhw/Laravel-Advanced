<?php

namespace Database\Seeders;

use App\Models\Post;
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
        Post::factory(5)->create();
        User::factory(1)->create();
        Video::factory(1)->create();

        $post = Post::first();
        $user = User::first();
        $video = Video::first();

        // One to one
        $post->image()->create(['url' => 'some/image.jpg']);
        $user->image()->create(['url' => 'profile.jpg']);

        // One to many
        $post->comments()->create(['body' => 'First cool comment.']);
        $post->comments()->create(['body' => 'First cool comment again.']);
        $video->comments()->create(['body' => 'Video comment.']);

        // Many to many
        $post->tags()->create(['name' => 'Laravel']);
        $post->tags()->create(['name' => 'Eloquent']);
        $video->tags()->create(['name' => 'PHP']);
        $post->tags()->attach(1);
    }
}
