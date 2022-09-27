<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ator extends Model
{
    use HasFactory;

    protected $table = "atores";
    protected $fillable = ['nome', 'nacionalidade', 'dt_nascimento', 'inicio_atividades'];

}

