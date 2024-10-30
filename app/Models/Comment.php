<?php

namespace App\Models;

use App\post;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'post_id'];

    public function post() 
    {
        return $this-belongsTo(post::class);
    }
}
