<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Candidaturas 
{

     public function getCandidaturas() 
    {
        $candidaturas = DB::table('candidaturas')
                            ->join('vagas', 'candidaturas.id_vaga', '=', 'vagas.id')
                            ->join('empresas', 'vagas.id_empresa', '=', 'empresas.id')
                            ->select('candidaturas.*', 'empresas.name as empresa_name', 'vagas.name as vaga_name', 'vagas.id as vaga_id', 'vagas.id_empresa as vaga_id_empresa')
                            ->orderBy("id", 'desc')
                            ->get();
        return $candidaturas;
    }

     public function getCandidaturaById($id) 
    {
        $candidatura = DB::table('candidaturas')
                        ->join('vagas', 'candidaturas.id_vaga', '=', 'vagas.id')
                        ->select('candidaturas.*', 'vagas.name as vaga_name', 'vagas.id as vaga_id', 'vagas.id_categorias as categorias')
                        ->where(['candidaturas.id' => $id])
                        ->get();
        return $candidatura;
    }
 

    public function addCandidatura($data)
    {
        $insert = DB::table('candidaturas')->insertGetId([
            'id_vaga'  => $data['id_vaga'],
            'name'  => $data['name'],
            'email'  => $data['email'],
            'escolaridade'  => $data['escolaridade'],
            'cidade'  => $data['cidade'],
            'descricao'  => $data['descricao'],
            'data_candidatura'  => date('d/m/Y H:i:s')
        ]);

        return $insert;
    }
    
}