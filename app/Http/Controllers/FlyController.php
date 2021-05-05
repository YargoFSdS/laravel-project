<?php

namespace App\Http\Controllers;

use App\Models\Fly;
use Illuminate\Http\Request;

class FlyController extends Controller

{
    public function create()
    {
        return view('admin.flies.create');
    }

    public function store(Request $request)
    {

        Fly::create($request->all());
        return redirect()
            ->route('posts.index')
            ->with('message', 'Vôo Cadastrado com Sucesso');
    }

    public function relatorio(){
        return view('admin.flies.report');
    }
}
