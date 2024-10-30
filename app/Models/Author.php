<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Book;

class Author extends Model
{
    use HasFactory;
    
    public function books() 
    {
        return $this->hasMany(Book::class, 'author_id');
    }
    
}
