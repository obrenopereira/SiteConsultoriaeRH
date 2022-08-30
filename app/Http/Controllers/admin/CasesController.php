<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cases;
use App\Skills;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class CasesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $cases;


    public function __construct()
    {
        $this->middleware('auth');
        $this->cases = new Cases();
        $this->skills = new Skills();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cases = $this->cases->getCases();
        return view('admin/cases/index')->With(['cases' => $cases]);
    }

    public function form()
    {
        $id   = (isset($_GET['id']) ? $_GET['id'] : false);
        $case = ($id ? $case = $this->cases->getCaseById($id) : []);
        $skills = false;
        if($id && !count($case)){
            Session::flash('message-alert', 'danger'); 
            Session::flash('message-feedback', 'Nenhum case foi encontrado'); 
            return redirect('/admin/cases');
        }
        if($id) {
            $case = $case[0];
            $skills = $this->skills->getSkillsByCaseId($case->id);
        }


        return view('admin/cases/form')->With(['case' => $case ,'skills' => $skills ]);
    }

    public function save(Request $request)
    {

        $data = $_POST;
        unset($data['_token']);
        $action;
        $id;

        if(isset($data['id'])) {
            if($data['id'] == '' || $data['id'] == null || $data['id'] == 0) {
                return response(['status' => 500, 'msg' => "Case não encontrado"]);
            }

            $case = $this->cases->getCaseById($data['id']);

            if(!count($case)) {
                return response(['status' => 500, 'msg' => "Case não encontrado"]);
            }
            $this->cases->updateCase($data);

            $action = 'update';
            $id = $data['id'];
        }else{
            $action = 'add';
            $id = $this->cases->addCase($data);
        }
        
        $case = $this->cases->getCaseById($id)[0];

        if(isset($request->file()['imagem'])) {
            $imagem = $request->file()['imagem'];
            Storage::disk('public')->delete('cases/'.$case->imagem);
            $imagemName = 'case-'.$case->id.'.'.$imagem->guessExtension();

            $imagem     = Image::make($imagem->getRealPath());
            $imagem->stream();
            Storage::disk('public')->put('cases/'.$imagemName, $imagem, 'public');
            $this->cases->saveImagem(1, $case->id, $imagemName);
        }

        if(isset($request->file()['fase_2_imagem'])) {
            $imagemFase2 = $request->file()['fase_2_imagem'];
            Storage::disk('public')->delete('cases/'.$case->fase_2_imagem);
            $imagemFase2Name = 'case-fase-2-'.$case->id.'.'.$imagemFase2->guessExtension();

            $imagemFase2     = Image::make($imagemFase2->getRealPath());
            $imagemFase2->stream();
            Storage::disk('public')->put('cases/'.$imagemFase2Name, $imagemFase2, 'public');
            $this->cases->saveImagem(2, $case->id, $imagemFase2Name);
        }


        if(isset($request->file()['banner_tela_inteira'])) {
            $imagemBannerInteira = $request->file()['banner_tela_inteira'];
            Storage::disk('public')->delete('cases/'.$case->banner_tela_inteira);
            $imagemBannerInteiraName = 'case-banner-'.$case->id.'.'.$imagemBannerInteira->guessExtension();

            $imagemBannerInteira     = Image::make($imagemBannerInteira->getRealPath());
            $imagemBannerInteira->stream();
            Storage::disk('public')->put('cases/'.$imagemBannerInteiraName, $imagemBannerInteira, 'public');
            $this->cases->saveImagem(3, $case->id, $imagemBannerInteiraName);
        }

        if($action == 'add') {
            return response(['status' => 200, 'msg' => "Case cadastrado com sucesso", 'action' => $action, 'id' => $id]);
        }
        return response(['status' => 200, 'msg' => "Case alterado com sucesso", 'action' => $action, 'id' => $id]);
    }


    public function saveSkills(Request $request)
    {

        $data = $_POST;
        unset($data['_token']);
        $skillNova = false;

        $skillsBanco = $this->skills->getSkillsByCaseId($data['id']);

        if(isset($data['skill_nova']) && $data['skill_nova'] != '') {
            $skillNova = $this->skills->addSkill($data['skill_nova'], $data['id']);
        }
      

        if(count($skillsBanco)) {
            foreach($skillsBanco as $skill) {
                if(isset($data['skills'])) {
                    if(isset($data['skills']) && !in_array($skill->id, $data['skills'])) {
                        $this->skills->removeSkill($skill->id);
                    }
                }else {
                   
                    $this->skills->removeSkill($skill->id);

                }
               
            }
        }
        return response(['status' => 200, 'nova' => $skillNova]);
    }



    public function remove()
    {
        $id = $_POST['id'];

        $case = $this->cases->getCaseById($id);

        if(!count($case)) {
            return response(['status' => 500, 'msg' => "Nenhum case foi encontrado."]);
        }
        $case   = $case[0];
        $remove     = $this->cases->remove($id);
        if(!$remove) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro inesperado. Por favor, contacte um administrador"]);
        }

        Storage::disk('public')->delete('cases/'.$case->imagem);

        return response(['status' => 200, 'msg' => "Case removido com sucesso"]);
    }

}
