<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $data = post::whit('comments') -> get();

        return response()->json(['data' => $data], 200);
    }
}
