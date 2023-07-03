<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getPostsCountByCategory($categoryId)
    {
        return $this->where('category_id', $categoryId)->count();
    }

    public static function getSoftDeletedPosts()
    {
        return self::onlyTrashed()->get();
    }
}
