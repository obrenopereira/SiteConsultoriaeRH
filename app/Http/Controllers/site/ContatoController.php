<?php

namespace App\Http\Controllers\site;

use Illuminate\Support\Facades\Log;
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
            Log::error('falha na conexão com o e-mail', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'code' => $e->getCode(),
            ]);
            Log::info('Falha ao enviar email' , [
                'date' => now()->format('Y-m-d'),
                'name' => $data['nome'],
                'email' => $data['email'],
                'message' => $data['mensagem'],
            ]);

            return response(['status' => 200, 'msg' => "Contato enviado com sucesso!"]);
        }
    }
}
