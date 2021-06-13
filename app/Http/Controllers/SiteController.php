<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Post;
use App\Models\Farmacia;

class SiteController extends Controller
{
    public function home(){
        $categorias = Categoria::get();
        return view('welcome',['categorias' => $categorias]);

    }

    public function about(){
        return view('site.about');
    }

    public function posts(){
        $posts = Post::orderBy('id','DESC')->paginate(2);
        return view('site.posts', [
            'posts' => $posts
        ]);
    }

    public function farmacias()
    {
        $farmacias = Farmacia::orderBy('id','DESC')->paginate(2);
        return view('site.farmacias', [
            'farmacias' => $farmacias
        ]);
    }
}
