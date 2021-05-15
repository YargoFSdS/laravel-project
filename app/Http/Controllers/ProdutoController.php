<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$produtos = Produto::orderBy('id','DESC')->paginate(2);
        $produtos = DB::table('produtos')
            ->join('categorias', 'produtos.categorias_id', '=', 'categorias.id')
            ->select('produtos.*', 'categorias.descricao as desc_categoria')
            ->paginate(2);

        return view('admin.produtos.index', [
            'produtos' => $produtos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categorias = Categoria::get();

        return view('admin.produtos.create',['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->image->isValid()) {

            $fileName = Str::of($request->descricao)->slug('-') . '.' .$request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('produtos', $fileName);
            $data['imagem'] = $image;
        }

        Produto::create($data);

        return redirect()
                ->route('produtos.index')
                ->with('message', 'Farmácia criada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $produtos = Produto::where('descricao', 'LIKE', "%{$request->search}%")->paginate(2);
        
        return view('admin.produtos.index', [
            'produtos' => $produtos
        ]);
    }
}
