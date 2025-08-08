<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Post $post)
    {

        $date = Carbon::parse($post->created_at);
        $posts = Post::paginate(6);
        return view('main.index', compact('posts', 'date'));
    }
}
