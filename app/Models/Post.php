<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished($query){
        // We can omit 'return'
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeFeatured($query){
        $query->where('featured', true);
    }
}
