<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Clientes 
{

     public function getClientes() 
    {
        $clientes = DB::table('clientes')
                    ->orderBy("id", 'desc')
                    ->get();
        return $clientes;
    }
     public function getClienteById($id) 
    {
        $cliente = DB::table('clientes')
                    ->where(['clientes.id' => $id])
                    ->get();
        return $cliente;
    }

 
    public function updateCliente($data) 
    {
        $update = DB::table('clientes')
                    ->where('id', $data['id'])
                    ->update([
                        'name'                  => $data['titulo']
                    ]);
        return $update;
    }

    public function addCliente($data)
    {
        $insert = DB::table('clientes')->insertGetId([
            'name'                  => $data['titulo'],
        ]);

        return $insert;
    }

    public function remove($id)
    {
      DB::table('clientes')->where('id', $id)->delete();
      return true;
    }

    public function saveImagem($id, $imagem) 
    {
        $update = DB::table('clientes')
        ->where('id', $id)
        ->update(['imagem' => $imagem]);
        return $update;

    }
    
}