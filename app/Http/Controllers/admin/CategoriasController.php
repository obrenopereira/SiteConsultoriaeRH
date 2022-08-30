<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categorias;
use Session;



class CategoriasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Categorias;


    public function __construct()
    {
        $this->middleware('auth');
        $this->categorias = new Categorias();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorias = $this->categorias->getCategorias();
        return view('admin/categorias/index')->With(['categorias' => $categorias]);
    }

    public function form()
    {
        $id   = (isset($_GET['id']) ? $_GET['id'] : false);
        $categoria = ($id ? $categoria = $this->categorias->getCategoriaById($id) : []);
        if($id && !count($categoria)){
            Session::flash('message-alert', 'danger'); 
            Session::flash('message-feedback', 'Nenhuma categoria foi encontrada'); 
            return redirect('/admin/categorias');
        }
        if($id) {
            $categoria = $categoria[0];
        }
        return view('admin/categorias/form')->With(['categoria' => $categoria]);
    }

    public function save()
    {

        $data = $_POST;
        unset($data['_token']);

        if(isset($data['id'])) {
            if($data['id'] == '' || $data['id'] == null || $data['id'] == 0) {
                return response(['status' => 500, 'msg' => "Categoria não encontrada"]);
            }

            $categoria = $this->categorias->getCategoriaById($data['id']);

            if(!count($categoria)) {
                return response(['status' => 500, 'msg' => "Categoria não encontrada"]);
            }
            $this->categorias->updateCategoria($data);

            return response(['status' => 200, 'msg' => "Categoria atualizada com sucesso", 'action' => 'update', 'id' => $categoria[0]->id]);
        }
        $categoria = $this->categorias->addCategoria($data);
        return response(['status' => 200, 'msg' => "Categoria cadastrada com sucesso", 'action' => 'add', 'id' => $categoria]);


    }

    public function remove()
    {
        $id = $_POST['id'];

        $categoria = $this->categorias->getCategoriaById($id);

        if(!count($categoria)) {
            return response(['status' => 500, 'msg' => "Nenhuma categoria foi encontrada."]);
        }
        $categoria   = $categoria[0];
        $remove     = $this->categorias->remove($id);
        if(!$remove) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro inesperado. Por favor, contacte um administrador"]);
        }

        return response(['status' => 200, 'msg' => "Categoria removida com sucesso"]);
    }

}
