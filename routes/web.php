<?php

use App\Http\Controllers\{
    PostController,
    FarmaciaController,
    ProdutoController,
    SiteController
};
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::any('/posts/search', [PostController::class, 'search'])->name('posts.search');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

    /* Farmácias */
    Route::any('/farmacias/search', [FarmaciaController::class, 'search'])->name('farmacias.search');
    Route::get('/farmacias', [FarmaciaController::class, 'index'])->name('farmacias.index');
    Route::get('/cadastrar-farmacia', [FarmaciaController::class, 'create'])->name('farmacias.create');
    Route::post('/farmacias/store', [FarmaciaController::class, 'store'])->name('farmacias.store');
    Route::get('/farmacias/{id}', [FarmaciaController::class, 'show'])->name('farmacias.show');
    Route::get('/farmacias/edit/{id}', [PostControFarmaciaControllerller::class, 'edit'])->name('farmacias.edit');

    /* Produtos */
    Route::any('/produtos/search', [ProdutoController::class, 'search'])->name('produtos.search');
    Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
    Route::get('/cadastrar-produto', [ProdutoController::class, 'create'])->name('produtos.create');
    Route::post('/produtos/store', [ProdutoController::class, 'store'])->name('produtos.store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/sobre-nos', [SiteController::class, 'about'])->name('site.about');
Route::get('/noticias', [SiteController::class, 'posts'])->name('site.posts');
Route::get('/unidades', [SiteController::class, 'farmacias'])->name('site.unidades');
Route::get('/catalogo', [SiteController::class, 'catalogo'])->name('site.catalogo');
Route::post('/buscar', [SiteController::class, 'search'])->name('site.search');




require __DIR__.'/auth.php';