<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
