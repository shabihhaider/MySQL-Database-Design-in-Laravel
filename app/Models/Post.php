<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function author() // try to find author_id but we have user_id so We need to explicitly add user_id in arguments
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
