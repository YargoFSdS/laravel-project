<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['descricao', 'preco', 'desconto','ativo','imagem','categorias_id'];

    public function categoria()
    {
        return $this->hasOne(categoria::class);
    }
}
