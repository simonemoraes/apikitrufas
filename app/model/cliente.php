<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'mensagem'
    ];
}
