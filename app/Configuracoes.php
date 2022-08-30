<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;


class Configuracoes 
{

     public function getConfiguracoes() 
    {
        $configuracoes = DB::table('configuracoes')
                    ->get();
        return $configuracoes;
    }

 
    public function updateConfiguracoes($data) 
    { 
        $update = DB::table('configuracoes')
                    ->where('id', 1)
                    ->update([
                        'email_contato' => $data['email_contato'],
                        'email_candidaturas' => $data['email_candidaturas'],
                        'telefone_contato' => $data['telefone_contato'],
                        'endereco' => $data['endereco'],
                        'facebook' => $data['facebook'],
                        'linkedin' => $data['linkedin'],
                        'whatsapp_geral' => $data['whatsapp_geral'],
                        'whatsapp_especialista' => $data['whatsapp_especialista'],
                        'instagram' => $data['instagram'],
                    ]);
        return $update;
    }

    
    public function saveImagem($type, $imagem) 
    {
        if($type == 1) {
            $update = DB::table('configuracoes')
            ->where('id', 1)
            ->update(['logotipo_1' => $imagem]);
        }else{
            $update = DB::table('configuracoes')
            ->where('id', 1)
            ->update(['logotipo_2' => $imagem]);
        }
        return $update;
    }
}