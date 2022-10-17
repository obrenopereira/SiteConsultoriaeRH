<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    public function area()
    {
        return $this->belongsTo(Area::class , 'id_area');
    }

    public function experiencia()
    {
        return $this->belongsTo(Experiencia::class , 'id_experiencia');
    }

    public function escolaridade()
    {
        return $this->belongsTo(Escolaridade::class , 'id_escolaridade');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class , 'id_empresa');
    }
}
