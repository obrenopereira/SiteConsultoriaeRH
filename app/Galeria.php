<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Galeria 
{

     public function getGaleria() 
    {
        $galeria = DB::table('galeria')
                    ->orderBy("id", 'desc')
                    ->get();
        return $galeria;
    }

     public function getGaleriaById($id) 
    {
        $galeria = DB::table('galeria')
                    ->where(['galeria.id' => $id])
                    ->get();
        return $galeria;
    }

    public function getGaleriaByPage($page) 
    {
        $galeria = DB::table('galeria')
                    ->where(['galeria.page_name' => $page])
                    ->get();
        return $galeria;
    }

 
    public function updateGaleria($data) 
    {
        $update = DB::table('galeria')
                    ->where('id', $data['id'])
                    ->update([
                        'page_name' => $data['page_name'],
                        'title_seo' => $data['title_seo'],
                        'alt_seo'   => $data['alt_seo'],
                    ]);
        return $update;
    }

    public function addGaleria($data)
    {
        $insert = DB::table('galeria')->insertGetId([
            'name'      => $data['titulo'],
            'page_name' => $data['page_name'],
            'title_seo' => $data['title_seo'],
            'alt_seo'   => $data['alt_seo'],
        ]);

        return $insert;
    }

    public function remove($id)
    {
      DB::table('galeria')->where('id', $id)->delete();
      return true;
    }

    public function saveImagem($id, $imagem) 
    {
        $update = DB::table('galeria')
        ->where('id', $id)
        ->update(['imagem' => $imagem]);
      
        return $update;
    }
    
}