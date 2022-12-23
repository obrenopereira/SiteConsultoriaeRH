<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vagas;
use App\Categorias;
use App\Empresas;
use App\Filtros;
use Session;



class VagasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Vagas;
    private $Categorias;
    private $Empresas;


    public function __construct()
    {
        $this->middleware('auth');
        $this->vagas = new Vagas();
        $this->categorias = new Categorias();
        $this->empresas = new Empresas();
        $this->filtros = new Filtros();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $vagas = $this->vagas->getVagas();
        return view('admin/vagas/index')->With(['vagas' => $vagas]);
    }

    public function form()
    {
        $id   = (isset($_GET['id']) ? $_GET['id'] : false);
        $vaga = ($id ? $vaga = $this->vagas->getVagaById($id) : []);
        $categorias = $this->categorias->getCategorias();
        if($id && !count($vaga)){
            Session::flash('message-alert', 'danger');
            Session::flash('message-feedback', 'Nenhuma vaga foi encontrada');
            return redirect('/admin/vagas');
        }
        if($id) {
            $vaga = $vaga[0];
            $vaga->id_categorias = str_replace('"', '', $vaga->id_categorias);
            $vaga->id_categorias = str_replace('[', '', $vaga->id_categorias);
            $vaga->id_categorias = str_replace(']', '', $vaga->id_categorias);
            $vaga->id_categorias = explode(",",$vaga->id_categorias);


        }
        $empresas           = $this->empresas->getEmpresas();
        $areas              = $this->filtros->getAreas();
        $escolaridades      = $this->filtros->getEscolaridades();
        $experiencias       = $this->filtros->getExperiencias();


        return view('admin/vagas/form')->With(['vaga' => $vaga, 'categorias' => $categorias, 'empresas' => $empresas, 'areas' => $areas, 'escolaridades' => $escolaridades, 'experiencias' => $experiencias]);
    }

    public function save()
    {
        try {
            $data = $_POST;
            unset($data['_token']);

            $data['categorias'] = json_encode($data['categorias']);
            $area = intval($data['area']);

            if(!$area) {
                $area = $this->filtros->addNewArea($data['area']);
            }

            $data['area'] = $area;

            if(isset($data['id'])) {
                if($data['id'] == '' || $data['id'] == null || $data['id'] == 0) {
                    return response(['status' => 500, 'message' => "Vaga não encontrada"]);
                }

                $vaga = $this->vagas->getVagaById($data['id']);

                if(!count($vaga)) {
                    return response(['status' => 500, 'message' => "Vaga não encontrada"]);
                }
                $this->vagas->updateVaga($data);

                return response(['status' => 200, 'message' => "Vaga atualizada com sucesso", 'action' => 'update', 'id' => $vaga[0]->id]);
            }
            $vaga = $this->vagas->addVaga($data);
            return response(['status' => 200, 'message' => "Vaga cadastrada com sucesso", 'action' => 'add', 'id' => $vaga]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocorreu um erro inesperado.'
            ] , 500);
        }



    }

    public function remove()
    {
        $id = $_POST['id'];

        $vaga = $this->vagas->getVagaById($id);

        if(!count($vaga)) {
            return response(['status' => 500, 'msg' => "Nenhuma vaga foi encontrada."]);
        }
        $vaga   = $vaga[0];
        $remove     = $this->vagas->removeVaga($id);
        if(!$remove) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro inesperado. Por favor, contacte um administrador"]);
        }

        return response(['status' => 200, 'msg' => "Vaga removida com sucesso"]);
    }

}
