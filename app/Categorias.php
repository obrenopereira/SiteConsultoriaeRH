<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Categorias 
{

     public function getCategorias() 
    {
        $categorias = DB::table('categorias')
                    ->orderBy("id", 'desc')
                    ->get();
        return $categorias;
    }

     public function getCategoriaById($id) 
    {
        $categoria = DB::table('categorias')
                    ->where(['categorias.id' => $id])
                    ->get();
        return $categoria;
    }

 
    public function updateCategoria($data) 
    {
        $update = DB::table('categorias')
                    ->where('id', $data['id'])
                    ->update([
                        'name'                  => $data['titulo'],
                    ]);
        return $update;
    }

    public function addCategoria($data)
    {
        $insert = DB::table('categorias')->insertGetId([
            'name'                  => $data['titulo']
        ]);

        return $insert;
    }

    public function remove($id)
    {
      DB::table('categorias')->where('id', $id)->delete();
      return true;
    }
    
}