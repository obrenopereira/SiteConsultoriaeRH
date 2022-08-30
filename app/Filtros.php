<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Filtros 
{

     public function getAreas() 
    {
        $areas = DB::table('area')
                    ->get();
        return $areas;
    }

    public function getCidades() 
    {
        $cidades = DB::table('vagas')
                    ->distinct()
                    ->get('vagas.cidade');
        return $cidades;
    }
    public function addNewArea($data)
    {
        $insert = DB::table('area')->insertGetId(['name'=> $data]);

        return $insert;
    }
    public function getExperiencias() 
    {
        $experiencias = DB::table('experiencia')
                    ->get();
        return $experiencias;
    }
    public function getEscolaridades() 
    {
        $escolaridades = DB::table('escolaridade')
                    ->get();
        return $escolaridades;
    }
   
}