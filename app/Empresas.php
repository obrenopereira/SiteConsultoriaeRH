<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Empresas 
{

     public function getEmpresas() 
    {
        $empresas = DB::table('empresas')
                    ->orderBy("id", 'desc')
                    ->get();
        return $empresas;
    }

     public function getEmpresaById($id) 
    {
        $empresa = DB::table('empresas')
                    ->where(['empresas.id' => $id])
                    ->get();
        return $empresa;
    }

 
    public function updateEmpresa($data) 
    {
        $update = DB::table('empresas')
                    ->where('id', $data['id'])
                    ->update(['name'  => $data['titulo'],
                    ]);
        return $update;
    }

    public function addEmpresa($data)
    {
        $insert = DB::table('empresas')->insertGetId([
            'name'      => $data['titulo'],
            'email'     => $data['email']
        ]);

        return $insert;
    }

    public function remove($id)
    {
      DB::table('empresas')->where('id', $id)->delete();
      return true;
    }

    public function saveImagem($type, $id, $imagem) 
    {
        if($type == 1) {
            $update = DB::table('empresas')
            ->where('id', $id)
            ->update(['logotipo' => $imagem]);
        }else{
            $update = DB::table('empresas')
            ->where('id', $id)
            ->update(['thumbnail' => $imagem]);
        }
      
        return $update;
    }
    
}