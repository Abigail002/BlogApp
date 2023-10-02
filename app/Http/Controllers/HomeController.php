<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('app', ['categories' => $categories, 'posts' => $posts]);
    }
}
