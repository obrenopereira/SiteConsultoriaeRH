<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Candidaturas;
use App\Categorias;
use Illuminate\Support\Facades\Storage;
use Session;



class CandidaturasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Candidaturas;


    public function __construct()
    {
        $this->middleware('auth');
        $this->candidaturas = new Candidaturas();
        $this->categorias = new Categorias();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $candidaturas = $this->candidaturas->getCandidaturas();
        return view('admin/candidaturas/index')->With(['candidaturas' => $candidaturas]);
    }

    public function visualizar($id)
    {
        $candidatura = $this->candidaturas->getCandidaturaById($id)[0];
        $candidatura->categorias    = str_replace('"', '', $candidatura->categorias);
        $candidatura->categorias    = str_replace('[', '', $candidatura->categorias);
        $candidatura->categorias    = str_replace(']', '', $candidatura->categorias);

        $categorias_string          = explode(",", $candidatura->categorias);
        $categorias_names           = '';
        foreach($categorias_string as $categoria) {
            $categoria = $this->categorias->getCategoriaById($categoria)[0];
            $categorias_names .= $categoria->name.', ';
        }
        $candidatura->categorias = substr($categorias_names, 0, -2);

        return response(['status' => 200, 'msg' => "Vaga visualizada com sucesso", 'candidatura' => $candidatura]);

    }

    public function download($id)
    {
        try {
            return response()
                ->download(storage_path( "app/curriculos/curriculo-".$id.".pdf"), "curriculo-".$id.".pdf" , [
                    'Content-Type'=> 'application/pdf'
                ]);

        } catch (\Exception $e) {
            return back()
                ->withErrors([
                    'message' => 'Arquivo não encontrado.'
                ]);
        }
    }
}
