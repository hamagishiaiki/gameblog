<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'category_id',
        'evaluate',
        'difficult',
        'image_path',
        'title',
        'body',
    ];
        public function category()
    {
        return $this->belongsTo(Category::class);
    }

        public function user()
    {
        return $this->belongsTo(User::class);
    }
}