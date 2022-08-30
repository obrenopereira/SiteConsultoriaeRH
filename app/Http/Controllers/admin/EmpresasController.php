<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Empresas;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class EmpresasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Empresas;


    public function __construct()
    {
        $this->middleware('auth');
        $this->empresas = new Empresas();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $empresas = $this->empresas->getEmpresas();
        return view('admin/empresas/index')->With(['empresas' => $empresas]);
    }

    public function form()
    {
        $id   = (isset($_GET['id']) ? $_GET['id'] : false);
        $empresa = ($id ? $empresa = $this->empresas->getEmpresaById($id) : []);
        if($id && !count($empresa)){
            Session::flash('message-alert', 'danger'); 
            Session::flash('message-feedback', 'Nenhuma empresa foi encontrada'); 
            return redirect('/admin/empresas');
        }
        if($id) {
            $empresa = $empresa[0];
        }
        return view('admin/empresas/form')->With(['empresa' => $empresa]);
    }

    public function save(Request $request)
    {

        $data = $_POST;
        unset($data['_token']);
        $action;
        $id;

        if(isset($data['id'])) {
            if($data['id'] == '' || $data['id'] == null || $data['id'] == 0) {
                return response(['status' => 500, 'msg' => "Empresa não encontrada"]);
            }

            $empresa = $this->empresas->getEmpresaById($data['id']);

            if(!count($empresa)) {
                return response(['status' => 500, 'msg' => "Empresa não encontrada"]);
            }
            $this->empresas->updateEmpresa($data);

            $action = 'update';
            $id = $data['id'];
        }else{
            $action = 'add';
            $id = $this->empresas->addEmpresa($data);
        }
        
        $empresa = $this->empresas->getEmpresaById($id)[0];

        if(isset($request->file()['imagem_principal'])) {
            $imagemPrincipal = $request->file()['imagem_principal'];
            Storage::disk('public')->delete('empresas/'.$empresa->logotipo);
            $imagemPrincipalName = 'logotipo-'.$empresa->id.'.'.$imagemPrincipal->guessExtension();

            $imagemPrincipal     = Image::make($imagemPrincipal->getRealPath());
            $imagemPrincipal->stream();
            Storage::disk('public')->put('empresas/'.$imagemPrincipalName, $imagemPrincipal, 'public');
            $this->empresas->saveImagem(1, $empresa->id, $imagemPrincipalName);
        }
        if(isset($request->file()['imagem_secundaria'])) {
            $imagemSecundaria = $request->file()['imagem_secundaria'];
            Storage::disk('public')->delete('empresas/'.$empresa->thumbnail);
            $imagemSecundariaName = 'thumbnail-'.$empresa->id.'.'.$imagemSecundaria->guessExtension();

            $imagemSecundaria     = Image::make($imagemSecundaria->getRealPath());
            $imagemSecundaria->stream();
            Storage::disk('public')->put('empresas/'.$imagemSecundariaName, $imagemSecundaria, 'public');
            $this->empresas->saveImagem(2, $empresa->id, $imagemSecundariaName);
        }

        if($action == 'add') {
            return response(['status' => 200, 'msg' => "Empresa cadastrada com sucesso", 'action' => $action, 'id' => $id]);
        }
        return response(['status' => 200, 'msg' => "Empresa alterada com sucesso", 'action' => $action, 'id' => $id]);
    }

    public function remove()
    {
        $id = $_POST['id'];

        $empresa = $this->empresas->getEmpresaById($id);

        if(!count($empresa)) {
            return response(['status' => 500, 'msg' => "Nenhuma empresa foi encontrada."]);
        }
        $empresa   = $empresa[0];
        $remove     = $this->empresas->remove($id);
        if(!$remove) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro inesperado. Por favor, contacte um administrador"]);
        }

        Storage::disk('public')->delete('empresas/'.$empresa->logotipo);
        Storage::disk('public')->delete('empresas/'.$empresa->thumbnail);

        return response(['status' => 200, 'msg' => "Empresa removida com sucesso"]);
    }

}
