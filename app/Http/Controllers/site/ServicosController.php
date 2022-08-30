<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galeria;

class ServicosController extends Controller
{
    public function __construct()
    {
        $this->galeria = new galeria();
    }

    public function index() {
        $galeria = $this->galeria->getGaleriaByPage("Serviços");
        $bannerUnico = '';
        foreach($galeria as $value) {
            if($value->name == 'Banner Único') {
                $bannerUnico = $value;
            }
        }

        $tag = false;

        if(isset($_GET['tag'])) {
            $tag = $_GET['tag'];
        }

        return view("site/servicos")->with(['bannerUnico' => $bannerUnico, 'tag' => $tag]);
    }
}
