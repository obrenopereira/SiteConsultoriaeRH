<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galeria;

class SobreController extends Controller
{
    public function __construct()
    {
        $this->galeria = new galeria();
    }


    public function index() {
        $galeria = $this->galeria->getGaleriaByPage("A Empresa");
        $bannerPrincipal = '';
        $bannerSecundario = '';
        foreach($galeria as $value) {
            if($value->name == 'Banner principal') {
                $bannerPrincipal = $value;
            }
            if($value->name == 'Banner Secundário') {
                $bannerSecundario = $value;
            }
        }
        return view("site/sobre")->with(['bannerPrincipal' => $bannerPrincipal, 'bannerSecundario' => $bannerSecundario]);
    }
}
