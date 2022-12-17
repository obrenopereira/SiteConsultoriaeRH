<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'imagem'
    ];
}
