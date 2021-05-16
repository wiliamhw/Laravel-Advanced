<?php

namespace App\Models;

use App\QueryFilters\Active;
use App\QueryFilters\Sort;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Post extends Model
{
    use HasFactory;

    public static function allPosts()
    {
        return app(Pipeline::class)
            ->send(Post::query())
            ->through([
                Active::class, // value: 1 or 0
                Sort::class, // value: 'ASC' or 'DESC'
            ])
            ->thenReturn()
            ->paginate(10);
    }
}
