<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponto extends Model
{
    use HasFactory;

    protected $table = 'mov_pontos';

        protected $fillable = [
        'id_colaborador'
    ];
}
