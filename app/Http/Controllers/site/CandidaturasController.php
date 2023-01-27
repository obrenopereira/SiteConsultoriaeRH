<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Candidaturas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class CandidaturasController extends Controller
{


    public function __construct()
    {
        $this->candidaturas = new Candidaturas();
    }

    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email',
            'id_vaga' => 'required|integer',
            'escolaridade' => 'required|string',
            "cidade" => 'required|string',
            'descricao' => 'required|string',
            'curriculo' => 'required|mimes:pdf'
        ]);

        if ($validator->fails()) {
            return response()
                ->json([
                    'status' => 500,
                    'msg' => 'Ops! ' . $validator->errors()->first()
                ], 500);
        }

        /**if(!isset($request->file()['curriculo'])) {
            return response(['status' => 500, 'msg' => "Currículo não foi anexado à candidatura."]);
        }**/

        $candidatura = $this->candidaturas->addCandidatura($request->all());
        $candidatura = $this->candidaturas->getCandidaturaById($candidatura);

        if (count($candidatura) === 0) {
            return response()->json([
                'status' => 500,
                'msg' => "Ocorreu um erro à candidatar-se. Por favor, contacte um administrador."
            ], 500);
        }

        $candidatura = $candidatura[0];

        Storage::disk('public')->delete('curriculos/'.$candidatura->curriculo);

        $request->file('curriculo')->getClientOriginalName();
        $curriculoName = 'curriculo-'.$candidatura->id.'.'. $request->file('curriculo')->guessExtension();

        $request->file('curriculo')
            ->storeAs('curriculos/', $curriculoName , 'local');

        return response()
            ->json([
                'status' => 200,
                'msg' => 'Enviado com sucesso!'
            ]);
    }

}
