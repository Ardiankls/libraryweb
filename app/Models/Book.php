<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    // protected $guard = ['book_id'];
    public function books(){
        return $this->belongsToMany(User::class, 'user_borrows', 'book_id', 'user_id');
    }
    // protected
}
