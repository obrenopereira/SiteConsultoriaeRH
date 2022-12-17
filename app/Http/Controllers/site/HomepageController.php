<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galeria;
use App\Clientes;
use Illuminate\Http\Response;

class HomepageController extends Controller
{
    public function __construct()
    {
        $this->galeria = new galeria();
        $this->clientes = new Clientes();
    }


    public function index() {
        $galeria = $this->galeria->getGaleriaByPage("Homepage");
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
        $clientes = $this->clientes->getClientes()->filter(function ($client) {
            $name = explode('-' , $client->name);

            if (isset($name[1])) {
                return $name[1] !== 'delete';
            }

            return true;
        });
        return view("site/home")->with(['bannerPrincipal' => $bannerPrincipal, 'bannerSecundario' => $bannerSecundario, 'clientes' => $clientes]);
    }

    public function policies(Request $request)
    {

        return view("site/policies");
    }
    public function acceptPolicies(Request $request) {
        $minutes = 180;
        $response = new Response('Set Cookie');
        $response->withCookie(cookie('policies-privacy', 'true', $minutes));
        return $response;
    }
}
