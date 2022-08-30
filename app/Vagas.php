<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;

class Vagas 
{

     public function getVagas() 
    {
        $vagas = DB::table('vagas')
                    ->join('empresas', 'vagas.id_empresa', '=', 'empresas.id')
                    ->select('vagas.*', 'empresas.name as empresa_name')
                    ->orderBy("id", 'desc')
                    ->get();
        return $vagas;
    }

    public function getVagasList($start = 0, $where = '', $limit) 
    {

        if($where == '') {
            $vagas = DB::table('vagas')
                        ->join('empresas', 'vagas.id_empresa', '=', 'empresas.id')
                        ->join('area', 'vagas.id_area', '=', 'area.id')
                        ->join('experiencia', 'vagas.id_experiencia', '=', 'experiencia.id')
                        ->join('escolaridade', 'vagas.id_escolaridade', '=', 'escolaridade.id')
                        ->select('vagas.*', 
                                'empresas.name as empresa_name', 
                                'area.id as area_id', 
                                'area.name as area_name', 
                                'experiencia.id as experiencia_id', 
                                'experiencia.name as experiencia_name',
                                'escolaridade.id as escolaridade_id', 
                                'escolaridade.name as escolaridade_name'
                        )
                        ->offset($start)
                        ->limit($limit)
                        ->orderBy("id", 'desc')
                        ->where(['vagas.status' => 'Aberta'])
                        ->get();
        }else {
            $final_query = "SELECT vagas.*, 
                                empresas.name AS empresa_name,
                                area.id AS area_id,
                                area.name AS area_name,
                                experiencia.id AS experiencia_id,
                                experiencia.name AS experiencia_name,
                                escolaridade.id AS escolaridade_id,
                                escolaridade.name AS escolaridade_name

                            FROM vagas 
                                INNER JOIN empresas 
                                    ON vagas.id_empresa = empresas.id 
                                INNER JOIN area 
                                    ON vagas.id_area = area.id 
                                INNER JOIN experiencia 
                                    ON vagas.id_experiencia = experiencia.id 
                                INNER JOIN escolaridade 
                                    ON vagas.id_escolaridade = escolaridade.id 
                            ".$where." 
                            ORDER BY id 
                            DESC 
                            LIMIT ".$start.",".$limit;
                            
            $vagas = DB::select($final_query);
        }
      
        return $vagas;
    }


     public function getVagaById($id) 
    {
        $vaga = DB::table('vagas')
                    ->join('empresas', 'vagas.id_empresa', '=', 'empresas.id')
                    ->select('vagas.*', 'empresas.name as empresa_name', 'empresas.logotipo', 'empresas.thumbnail')
                    ->where(['vagas.id' => $id])
                    ->get();
        return $vaga;
    }
    public function updateVaga($data) 
    {
        $update = DB::table('vagas')
                    ->where('id', $data['id'])
                    ->update([
                        'name'                  => $data['titulo'],
                        'id_categorias'         => $data['categorias'],
                        'id_empresa'            => $data['empresa'],
                        'contato'               => $data['contato'],
                        'remuneracao'           => $data['remuneracao'],
                        'contrato'              => $data['contrato'],
                        'descricao'             => $data['descricao-text'],
                        'breve_descricao'       => $data['breve_descricao'],
                        'status'                => $data['status'],
                        'cidade'                => $data['cidade'],
                        'uf'                    => $data['uf'],
                        'id_area'               => $data['area'],
                        'id_experiencia'        => $data['experiencia'],
                        'id_escolaridade'       => $data['escolaridade'],
                    ]);
        return $update;
    }
  
    public function addVaga($data)
    {
        $insert = DB::table('vagas')->insertGetId([
            'name'                  => $data['titulo'],
            'id_categorias'         => $data['categorias'],
            'id_empresa'            => $data['empresa'],
            'contato'               => $data['contato'],
            'remuneracao'           => $data['remuneracao'],
            'contrato'              => $data['contrato'],
            'descricao'             => $data['descricao-text'],
            'data_publicacao'       => date('Y/m/d'),
            'breve_descricao'       => $data['breve_descricao'],
            'status'                => $data['status'],
            'cidade'                => $data['cidade'],
            'uf'                    => $data['uf'],
            'id_area'               => $data['area'],
            'id_experiencia'        => $data['experiencia'],
            'id_escolaridade'       => $data['escolaridade'],
        ]);

        return $insert;
    }

  
    public function removeVaga($id)
    {
      DB::table('vagas')->where('id', $id)->delete();
      return true;
    }

   
}