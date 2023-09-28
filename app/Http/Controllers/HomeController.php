<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('app', ['categories' => $categories]);
    }

    public function showControllers()
    {
        $categories = Category::all();
        view()->share('categories', $categories);
        return view('layouts.Partials.navbar');
    }
}
