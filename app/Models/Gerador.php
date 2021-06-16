<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gerador extends Model
{
    use HasFactory;

    protected $table = 'gerador';

    protected $fillable = [
        'cnpj',
    ];
}
