<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    //Mendefinisikan relasi Many-to-One dengan model Author
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
    
}
