<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function blogpost(Request $request){
        return DB::table('blog_posts')->get();
    }
}
