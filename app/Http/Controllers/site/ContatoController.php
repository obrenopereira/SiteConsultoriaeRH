<?php

namespace App\Http\Controllers\site;

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contato;
use App\Configuracoes;

class ContatoController extends Controller
{
    public function index() {

        return view("site/contato");
    }

    public function sendEmail() {
        try {
            $data = $_POST;
            $configuracoes = new Configuracoes();
            $configuracoes = $configuracoes->getConfiguracoes()[0];

            Mail::to($configuracoes->email_contato)->send(new Contato($data['nome'], $data['email'], $data['mensagem'], 'contato'));
            Mail::to($data['email'])->send(new Contato($data['nome'], $data['email'], 0, 'feedback'));
            return response(['status' => 200, 'msg' => "Contato enviado com sucesso!"]);
        } catch (\Exception $e) {
            return response(['status' => 500, 'msg' => "Oops! Ocorreu um erro inesperado!"]);
        }
    }
}
