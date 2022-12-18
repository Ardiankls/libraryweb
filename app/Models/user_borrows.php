<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_borrows extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'book_id',
        'borrowed_at',
        'borrowed_end'
    ];

    public function borrows(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function borrowed(){
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }
}
