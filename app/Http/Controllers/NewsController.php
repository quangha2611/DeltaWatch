<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::with("author")->get();
        $viewData = [
            'posts' => $posts
        ];
        return view('pages.news')->with($viewData);
    }
}
