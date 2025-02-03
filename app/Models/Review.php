<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'music_id','content','rating'];
    
    public function music()  
    {
        return $this->belongsTo(music::class);  
    }
    
    public function user()  
    {
        return $this->belongsTo(User::class); 
    }
}
