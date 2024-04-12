<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BlogController extends Controller
{
    public function create(Request $request)
    {
        $blog = $request->input('blog');
        Redis::publish('create:blog', json_encode($blog));

        return $blog;
    }
}
