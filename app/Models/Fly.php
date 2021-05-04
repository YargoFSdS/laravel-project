<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fly extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'origin_city',
        'origin_latitude',
        'origin_longitude',
        'destiny_city',
        'destiny_latitude',
        'destiny_longitude',
        'price',
        'company_code',
        'flight_code'
    ];
    use HasFactory;
}
