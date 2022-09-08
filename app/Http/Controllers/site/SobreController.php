<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Professional;
use Illuminate\Http\Request;
use App\Galeria;

class SobreController extends Controller
{
    public function __construct()
    {
        $this->galeria = new galeria();
    }


    public function index() {
        try {
            $functionalityReleased = config('app.functionality_released');

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

            $professionals = Professional::orderBy('name')->get();

            return view("site/sobre")
                ->with([
                    'bannerPrincipal' => $bannerPrincipal,
                    'bannerSecundario' => $bannerSecundario,
                    'professionals' => $professionals,
                    'functionalityReleased' => $functionalityReleased
                ]);
        } catch (\Exception $e) {
            return back();
        }

    }
}
