<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Carbon\Carbon;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use App\Vagas;
use App\Filtros;
use App\Categorias;
use App\Galeria;

use Illuminate\Support\Collection;
use Session;

class VagasController extends Controller
{

    public function __construct()
    {
        $this->vagas = new Vagas();
        $this->filtros = new Filtros();
        $this->categorias = new Categorias();
        $this->galeria = new galeria();

    }


    public function index(Request $request) {
        $areas              = $this->filtros->getAreas();
        $escolaridades      = $this->filtros->getEscolaridades();
        $experiencias       = $this->filtros->getExperiencias();
        $cidades            = $this->filtros->getCidades();
        $vagas              = $this->getVagas($request, 'private');
        $galeria = $this->galeria->getGaleriaByPage("Cases");
        $bannerPrincipal = '';
        foreach($galeria as $value) {
            if($value->name == 'Banner principal') {
                $bannerPrincipal = $value;
            }
        }


        return view("site/vagas")->with(['bannerPrincipal' => $bannerPrincipal, 'vagas' => $vagas, 'escolaridades' => $escolaridades, 'areas' => $areas, 'experiencias' => $experiencias, 'cidades' => $cidades]);
    }

    public function getVagas(Request $request, $action = 'public', $limit = 3) {
        $areas = $request->areas;
        $escolaridades = $request->escolaridades;
        $experiencias = $request->experiencias;
        $cidades = $request->cidades;

        $vagas = Vaga::with([
            'area',
            'experiencia',
            'escolaridade'
        ])->where([
            'status' => 'Aberta'
        ])->when(Session::has('search') , function ($query) {
            $query->where('name' , 'LIKE' , '%' . Session::get('search') . '%');
        })->when(is_array($areas) , function ($query) use ($areas){
            return $query->whereIn('id_area' , $areas);
        })->when(is_array($escolaridades) , function ($query) use ($escolaridades){
            return $query->whereIn('id_escolaridade' , $escolaridades);
        })->when(is_array($experiencias) , function ($query) use ($experiencias){
            return $query->whereIn('id_experiencia' , $experiencias);
        })->when(is_array($cidades) , function ($query) use ($cidades){
            return $query->whereIn('cidade' , $cidades);
        })->orderBy('data_publicacao' , 'desc')->get()->map(function(Vaga $vaga){
            $publicationDate = Carbon::createFromFormat('Y/m/d' , $vaga->data_publicacao);
            $vaga->data_publicacao = $publicationDate->isToday() ? 'Publicada hoje' : $publicationDate->diffForHumans();
            $vaga->area_name = $vaga->area->name;
            $vaga->experiencia_name = $vaga->experiencia->name;
            $vaga->escolaridade_name = $vaga->escolaridade->name;
            $vaga->empresa_name = $vaga->empresa->name;
            return $vaga;
        });

        if($action == 'private') {
            return $vagas;
        }

        return response()->json([
            'status' => 200,
            'vagas' => $vagas
        ]);
    }

    public function search(Request $request) {
        $filter = $_GET['filtro'];

        Session::put('search', $filter);

        $vagas = $this->getVagas($request, 'private');
        return response(['status' => 200, 'vagas' => $vagas]);
    }


    public function removeFilter(Request $request) {
        $filter = $_GET['filter'];
        $val = $_GET['val'];
        if(Session::has($filter)) {
            $sessionArray = Session::get($filter);
            foreach($sessionArray as $key => $value) {
                if($value == $val) {
                    unset($sessionArray[$key]);
                }
            }
            Session::forget($filter);
            Session::put($filter, $sessionArray);
        }

        $vagas = $this->getVagas($request,'private');
        return response(['status' => 200, 'vagas' => $vagas]);
    }

    public function detalhes(Request $request, $id) {

        $vaga = $this->vagas->getVagaById($id);
        if(!count($vaga)) {
            return redirect("/vagas");
        }
        $vaga = $vaga[0];
        $publicacao = explode("/", $vaga->data_publicacao);
        $publicacao = $publicacao[2].'-'.$publicacao[1].'-'.$publicacao[0];

        $data_final = date("Y-m-d");
        $diferenca = strtotime($data_final) - strtotime($publicacao);
        $dias = floor($diferenca / (60 * 60 * 24));
        $dias = intval($dias);

        $vaga->data_publicacao = $dias;


        Session::put('escolaridade', [0 => $vaga->id_escolaridade]);
        Session::put('area', [0 => $vaga->id_area]);
        Session::put('experiencia', [0 => $vaga->id_experiencia]);

        $vaga_similiar = $this->getVagas($request, 'private', 1);

        Session::forget("search");
        Session::forget("escolaridade");
        Session::forget("area");
        Session::forget("experiencia");

        if(count($vaga_similiar)) {
            $vaga_similiar = $vaga_similiar[0];
        }else {
            $vaga_similiar = false;
        }

        return view("site/vagas-interno")->with(['vaga' => $vaga, 'vaga_similiar' => $vaga_similiar]);
    }
}
