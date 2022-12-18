<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Candidaturas;
use Illuminate\Support\Facades\Storage;


class CandidaturasController extends Controller
{


    public function __construct()
    {
        $this->candidaturas = new Candidaturas();
    }

    public function send(Request $request) {
        $data = $_POST;
        unset($data['_token']);

        if(!isset($request->file()['curriculo'])) {
            return response(['status' => 500, 'msg' => "Currículo não foi anexado à candidatura."]);
        }
        $candidatura = $this->candidaturas->addCandidatura($data);
        $candidatura = $this->candidaturas->getCandidaturaById($candidatura);

        if(!count($candidatura)) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro à candidatar-se. Por favor, contacte um administrador."]);
        }

        $candidatura = $candidatura[0];

        Storage::disk('public')->delete('curriculos/'.$candidatura->curriculo);

        $request->file('curriculo')->getClientOriginalName();
        $curriculoName = 'curriculo-'.$candidatura->id.'.'. $request->file('curriculo')->guessExtension();

        $request->file('curriculo')
            ->storeAs('curriculos/', $curriculoName , 'local');

        return response(['status' => 200, 'msg' => "Enviado com sucesso!"]);
    }

}
