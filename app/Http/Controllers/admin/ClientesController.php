<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Clientes;
use App\Skills;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $clientes;


    public function __construct()
    {
        $this->middleware('auth');
        $this->clientes = new Clientes();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = $this->clientes->getClientes();
        return view('admin/clientes/index')->With(['clientes' => $clientes]);
    }

    public function form()
    {
        $id   = (isset($_GET['id']) ? $_GET['id'] : false);
        $cliente = ($id ? $cliente = $this->clientes->getClienteById($id) : []);
        if($id && !count($cliente)){
            Session::flash('message-alert', 'danger'); 
            Session::flash('message-feedback', 'Nenhum cliente foi encontrado'); 
            return redirect('/admin/cases');
        }
        if($id) {
            $cliente = $cliente[0];
        }

        return view('admin/clientes/form')->With(['cliente' => $cliente ]);
    }

    public function save(Request $request)
    {

        $data = $_POST;
        unset($data['_token']);
        $action;
        $id;

        if(isset($data['id'])) {
            if($data['id'] == '' || $data['id'] == null || $data['id'] == 0) {
                return response(['status' => 500, 'msg' => "Cliente não encontrado"]);
            }

            $cliente = $this->clientes->getClienteById($data['id']);

            if(!count($cliente)) {
                return response(['status' => 500, 'msg' => "Cliente não encontrado"]);
            }
            $this->clientes->updateCliente($data);

            $action = 'update';
            $id = $data['id'];
        }else{
            $action = 'add';
            $id = $this->clientes->addCliente($data);
        }
        
        $cliente = $this->clientes->getClienteById($id)[0];

        if(isset($request->file()['imagem'])) {
            $imagem = $request->file()['imagem'];
            Storage::disk('public')->delete('clientes/'.$cliente->imagem);
            $imagemName = 'cliente-'.$cliente->id.'.'.$imagem->guessExtension();

            $imagem     = Image::make($imagem->getRealPath());
            $imagem->stream();
            Storage::disk('public')->put('clientes/'.$imagemName, $imagem, 'public');
            $this->clientes->saveImagem($cliente->id, $imagemName);
        }

        if($action == 'add') {
            return response(['status' => 200, 'msg' => "Cliente cadastrado com sucesso", 'action' => $action, 'id' => $id]);
        }
        return response(['status' => 200, 'msg' => "Cliente alterado com sucesso", 'action' => $action, 'id' => $id]);
    }


    public function remove()
    {
        $id = $_POST['id'];

        $cliente = $this->clientes->getClienteById($id);

        if(!count($cliente)) {
            return response(['status' => 500, 'msg' => "Nenhum cliente foi encontrado."]);
        }
        $cliente   = $cliente[0];
        $remove     = $this->clientes->remove($id);
        if(!$remove) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro inesperado. Por favor, contacte um administrador"]);
        }

        Storage::disk('public')->delete('clientes/'.$cliente->imagem);

        return response(['status' => 200, 'msg' => "Cliente removido com sucesso"]);
    }

}
