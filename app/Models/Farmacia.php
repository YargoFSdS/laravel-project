<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
    use HasFactory;
    protected $table = 'farmacias';
    public $timestamps = true;

    protected $fillable = ['filial', 'endereco', 'bairro', 'cidade', 'estado', 'gerente', 'telefone', 'latitude', 'longitude'];
}
