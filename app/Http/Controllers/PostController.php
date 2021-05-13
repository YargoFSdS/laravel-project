<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id','DESC')->paginate(2);
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
        $data = $request->all();

        if ($request->image->isValid()) {

            $fileName = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('posts', $fileName);
            $data['image'] = $image;
        }

        Post::create($data);

        return redirect()
                ->route('posts.index')
                ->with('message', 'Post criado com sucesso');
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

        if(Storage::exists($post->image))
            Storage::delete($post->image);
        
        $post->delete();
        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Deletado com Sucesso');
    }

    public function edit($id)
    {
        if (!$post = Post::find($id))
            return redirect()->back();

        return view('admin.posts.edit', compact('post'));
    }

    public function update(StoreUpdatePost $request, $id)
    {

        if (!$post = Post::find($id))
            return redirect()->back();

        $data = $request->all();

        if ($request->image && $request->image->isValid()) {
            if(Storage::exists($post->image))
                Storage::delete($post->image);
            
            $fileName = Str::of($request->title)->slug('-') . '.' .$request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('posts', $fileName);
            $data['image'] = $image;
        }
        
        $post->update($data);

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post Alterado com Sucesso');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $posts = Post::where('title', 'LIKE', "%{$request->search}%")
                        ->orWhere('content', 'LIKE', "%{$request->search}%")
                        ->paginate();

        return view('admin.posts.index', compact('posts', 'filters'));
    }
}
