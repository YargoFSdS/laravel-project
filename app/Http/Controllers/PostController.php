<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::get();
        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());
        /*Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image'   => 'semimagem.jpg'
        ]);*/
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->route('posts.index');
        }
        return view('admin.posts.show', compact('post'));
    }

    public function destroy($id)
    {
        if (!$post = Post::find($id))
            return redirect()->route('posts.index');

        $post->delete();
        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Deletado com Sucesso');
    }
}
