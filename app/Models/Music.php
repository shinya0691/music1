<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre_id'];

    public function genre()  
    {
        return $this->belongsTo(Genre::class);  
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    //public function likes()
    //{
        //return $this->hasMany(Like::class);
    //}
}
