<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Configuracoes;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;




class ConfiguracoesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Configuracoes;


    public function __construct()
    {
        $this->middleware('auth');
        $this->configuracoes = new Configuracoes();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $configuracoes = $this->configuracoes->getConfiguracoes();
        return view('admin/configuracoes/index')->With(['configuracoes' => $configuracoes[0]]);
    }

    public function save(Request $request)
    {
        $data = $_POST;
        unset($data['_token']);
        $this->configuracoes->updateConfiguracoes($data);
        $configuracoes = $this->configuracoes->getConfiguracoes()[0];

        if(isset($request->file()['logotipo_1'])) {
            $logotipo_1 = $request->file()['logotipo_1'];
            Storage::disk('public')->delete('configuracoes/'.$configuracoes->logotipo_1);
            $logotipo_1Name = 'TSConsultoria - Logotipo 1.'.$logotipo_1->guessExtension();

            $logotipo_1     = Image::make($logotipo_1->getRealPath());
            $logotipo_1->stream();
            Storage::disk('public')->put('configuracoes/'.$logotipo_1Name, $logotipo_1, 'public');
            $this->configuracoes->saveImagem(1, $logotipo_1Name);
        }
        if(isset($request->file()['logotipo_2'])) {
            $logotipo_2 = $request->file()['logotipo_2'];
            Storage::disk('public')->delete('configuracoes/'.$configuracoes->logotipo_2);
            $logotipo_2Name = 'TSConsultoria - Logotipo 2.'.$logotipo_2->guessExtension();

            $logotipo_2     = Image::make($logotipo_2->getRealPath());
            $logotipo_2->stream();
            Storage::disk('public')->put('configuracoes/'.$logotipo_2Name, $logotipo_2, 'public');
            $this->configuracoes->saveImagem(2, $logotipo_2Name);
        }

        return response(['status' => 200, 'msg' => "Configurações atualizadas com sucesso", 'action' => 'update']);
    }


}
