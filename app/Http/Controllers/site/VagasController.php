<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vagas;
use App\Filtros;
use App\Categorias;
use App\Galeria;

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


    public function index() {
        $areas              = $this->filtros->getAreas();
        $escolaridades      = $this->filtros->getEscolaridades();
        $experiencias       = $this->filtros->getExperiencias();
        $cidades            = $this->filtros->getCidades();
        $vagas              = $this->getVagas('private');
        $galeria = $this->galeria->getGaleriaByPage("Cases");
        $bannerPrincipal = '';
        foreach($galeria as $value) {
            if($value->name == 'Banner principal') {
                $bannerPrincipal = $value;
            }
        }
    

        return view("site/vagas")->with(['bannerPrincipal' => $bannerPrincipal, 'vagas' => $vagas, 'escolaridades' => $escolaridades, 'areas' => $areas, 'experiencias' => $experiencias, 'cidades' => $cidades]);
    }

    public function getVagas($action = 'public', $limit = 3) {

        $query = '';
        $start          =  (isset($_GET['start']) ? $_GET['start'] : 0);
        $filter         = (isset($_GET['filtro']) ? $_GET['filtro'] : '');
        $filterValue    = (isset($_GET['val']) ? $_GET['val'] : '');


        $prefix = " WHERE vagas.status = 'Aberta' AND ";
        if(!Session::has($filter)) {
            Session::put($filter, []);
        }
        Session::push($filter, $filterValue);

        if(Session::has('search') && Session::get('search') != '') {
            $query = " WHERE vagas.name LIKE  '%".Session::get('search')."%'";
       }


        if(Session::has('area')) {
             foreach(Session::get('area') as $area) {
                 $query .= $prefix.'vagas.id_area = '.$area;
                 if($prefix != ' OR ' && $prefix != '') {
                     $prefix = ' OR ';
                 }
             }
        }
        if(Session::has('escolaridade')) {
            foreach(Session::get('escolaridade') as $escolaridade) {
                $query .= $prefix.'vagas.id_escolaridade = '.$escolaridade;
                if($prefix != ' OR ' && $prefix != '') {
                    $prefix = ' OR ';
                }
            }
        }
        if(Session::has('experiencia')) {
            foreach(Session::get('experiencia') as $experiencia) {
                $query .= $prefix.'vagas.id_experiencia = '.$experiencia;
                if($prefix != ' OR ' && $prefix != '') {
                    $prefix = ' OR ';
                }
            }
        }
        if(Session::has('cidade')) {
            foreach(Session::get('cidade') as $cidade) {
                $query .= $prefix."vagas.cidade = '".$cidade."'";
                if($prefix != ' OR ' && $prefix != '') {
                    $prefix = ' OR ';
                }
            }
        }
        $vagas = $this->vagas->getVagasList($start, $query, $limit);

        if(count($vagas)) {
            foreach($vagas as $vaga) {

                $publicacao = explode("/", $vaga->data_publicacao);

                $publicacao = $publicacao[2].'-'.$publicacao[1].'-'.$publicacao[0];

                $data_final = date("Y-m-d");
                $diferenca = strtotime($data_final) - strtotime($publicacao);
                $dias = floor($diferenca / (60 * 60 * 24));
                $dias = intval($dias);

                $vaga->data_publicacao = $dias;

            }
            
        }

        if($action == 'private') {
            return $vagas;
        }

        return response(['status' => 200, 'vagas' => $vagas]);

    }

    public function search() {
        $filter = $_GET['filtro'];

        Session::put('search', $filter);

        $vagas = $this->getVagas('private');
        return response(['status' => 200, 'vagas' => $vagas]);
    }


    public function removeFilter() {
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

        $vagas = $this->getVagas('private');
        return response(['status' => 200, 'vagas' => $vagas]);
    }

    public function detalhes($id) {

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
        
        $vaga_similiar = $this->getVagas('private', 1);

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
