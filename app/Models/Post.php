<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function scopePublished($query){
        // We can omit 'return'
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured', true);
    }
}
