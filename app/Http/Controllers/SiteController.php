<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Post;
use App\Models\Farmacia;
use App\Models\Produto;

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
        $posts = Post::orderBy('id','DESC')->paginate(20);
        return view('site.posts', [
            'posts' => $posts
        ]);
    }

    public function farmacias()
    {
        $farmacias = Farmacia::orderBy('id','DESC')->paginate(20);
        return view('site.farmacias', [
            'farmacias' => $farmacias
        ]);
    }

    public function catalogo()
    {

        //$produtos = Produto::orderBy('id','DESC')->paginate(2);
        $produtos = DB::table('produtos')
            ->join('categorias', 'produtos.categorias_id', '=', 'categorias.id')
            ->select('produtos.*', 'categorias.descricao as desc_categoria')
            ->paginate(200);

        return view('site.catalogo', [
            'produtos' => $produtos
        ]);
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $produtos = DB::table('produtos')
            ->join('categorias', 'produtos.categorias_id', '=', 'categorias.id')
            ->select('produtos.*', 'categorias.descricao as desc_categoria')
            ->where('produtos.descricao', 'LIKE', "%{$request->search}%")
            ->paginate(200);
    
        return view('site.catalogo', [
            'produtos' => $produtos
        ]);
    }

}
