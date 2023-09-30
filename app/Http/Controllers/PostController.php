<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Auth::user()->posts;
        return view('post.list', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all()->mapWithKeys(fn ($categorie) => [$categorie->id => $categorie->name])->toArray();
        //dd($categories);
        return view('post.add',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();

        // Vérifier si le fichier existe déjà dans le dossier
        if (Storage::disk('public')->exists('images/posts/' . $fileName)) {
            $filePath = 'images/posts/' . $fileName;
        } else {
            $filePath = $file->storeAs('images/posts', $fileName, 'public');
        }

        $userId = auth()->user()->id;
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->path = $filePath; // Chemin vers le fichier dans le système de fichiers
        $post->user_id = $userId;
        $post->category_id = $request->input('category_id');
        $post->save();

        //dd($post);
        return Redirect::to('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
