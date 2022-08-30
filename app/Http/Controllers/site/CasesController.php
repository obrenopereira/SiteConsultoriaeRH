<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cases;
use App\Galeria;
use App\Skills;

class CasesController extends Controller
{
    public function __construct()
    {
        $this->cases = new Cases();
        $this->galeria = new galeria();
        $this->skills = new Skills();

    }

    public function index() {
        $cases = $this->cases->getCases();

        if(!count($cases)) {
            return redirect()->back();
        }

        $galeria = $this->galeria->getGaleriaByPage("Cases");
        $bannerPrincipal = '';
        foreach($galeria as $value) {
            if($value->name == 'Banner principal') {
                $bannerPrincipal = $value;
            }
        }

        return view('site/cases')->with(['cases' => $cases, 'bannerPrincipal' => $bannerPrincipal]);
    }
    public function case($id)
    {
        $case = $this->cases->getCaseById($id);

        if(!count($case)) {
            return redirect()->back();
        }
        $case = $case[0];

        $skills = $this->skills->getSkillsByCaseId($case->id);
        if(!count($skills)) {
            $skills = false;
        }

        return view("site/case")->with(['case' => $case, 'skills' => $skills]);
    }
}
