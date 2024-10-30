<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    protected $filable = [
        'title',
        'slug',
        'author',
        'image',
        'page',
        'content',
        'status',
    ];
    public function comments(){
        return $this -> hasmany (Comment::class);
    }
    
}
