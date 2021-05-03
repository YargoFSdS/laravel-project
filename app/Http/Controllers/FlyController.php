<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlyController extends Controller
{
    public function create()
    {
        return view('admin.flies.create');
    }

    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());        
        return redirect()
            ->route('posts.index')
            ->with('message', 'Vôo Cadastrado com Sucesso');
    }

}
