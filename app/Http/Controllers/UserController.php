<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Galeri;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::all();
        $post = Post::paginate(6);
        return view('index', ['post' => $post]);
    }

    public function viewBerita(Request $request)
    {
        $post = Post::all();
        $post = Post::paginate(6);
        return view('news', ['post' => $post]);
    }

    public function showBerita($slug)
    {
        $post = Post::where('slug', $slug)->get();
        return view('single-page', ['post' => $post]);
    }

    public function viewGallery()
    {
        $galeri = Galeri::all();
        $galeri = Galeri::paginate(8);
        return view('gallery', ['galeri' => $galeri]);
    }
}
