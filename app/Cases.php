<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Cases 
{

     public function getCases() 
    {
        $cases = DB::table('cases')
                    ->orderBy("id", 'desc')
                    ->get();
        return $cases;
    }
    public function getCasesCount() 
    {
        $cases = DB::table('cases')
                    ->orderBy("id", 'desc')
                    ->get();


        return count($cases);
    }

     public function getCaseById($id) 
    {
        $case = DB::table('cases')
                    ->where(['cases.id' => $id])
                    ->get();
        return $case;
    }

 
    public function updateCase($data) 
    {
        $update = DB::table('cases')
                    ->where('id', $data['id'])
                    ->update([
                        'name'                  => $data['titulo'],
                        'titulo_destaque'       => $data['titulo_destaque'],
                        'texto_destaque'        => $data['texto_destaque'],
                        'titulo_introducao'     => $data['titulo_introducao'],
                        'texto_introducao'      => $data['texto_introducao'],
                        'titulo_destaque'       => $data['titulo_destaque'],
                        'fase_1_legenda'        => $data['fase_1_legenda'],
                        'fase_1_titulo'         => $data['fase_1_titulo'],
                        'fase_1_texto'          => $data['fase_1_texto'],
                        'fase_2_legenda'        => $data['fase_2_legenda'],
                        'fase_2_titulo'         => $data['fase_2_titulo'],
                        'fase_2_texto'          => $data['fase_2_texto'],
                    ]);
        return $update;
    }

    public function addCase($data)
    {
        $insert = DB::table('cases')->insertGetId([
            'name'                  => $data['titulo'],
            'titulo_destaque'       => $data['titulo_destaque'],
            'texto_destaque'        => $data['texto_destaque'],
            'titulo_introducao'     => $data['titulo_introducao'],
            'texto_introducao'      => $data['texto_introducao'],
            'titulo_destaque'       => $data['titulo_destaque'],
            'fase_1_legenda'        => $data['fase_1_legenda'],
            'fase_1_titulo'         => $data['fase_1_titulo'],
            'fase_1_texto'          => $data['fase_1_texto'],
            'fase_2_legenda'        => $data['fase_2_legenda'],
            'fase_2_titulo'         => $data['fase_2_titulo'],
            'fase_2_texto'          => $data['fase_2_texto'],
        ]);

        return $insert;
    }

    public function remove($id)
    {
      DB::table('cases')->where('id', $id)->delete();
      return true;
    }

    public function saveImagem($type, $id, $imagem) 
    {
        if($type == 1) {
            $update = DB::table('cases')
            ->where('id', $id)
            ->update(['imagem' => $imagem]);
        }
        if($type == 2){
            $update = DB::table('cases')
            ->where('id', $id)
            ->update(['fase_2_imagem' => $imagem]);
        }
        if($type == 3){
            $update = DB::table('cases')
            ->where('id', $id)
            ->update(['banner_tela_inteira' => $imagem]);
        }
        return $update;

        
    }
    
}