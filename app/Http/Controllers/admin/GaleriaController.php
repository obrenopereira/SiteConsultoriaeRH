<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Galeria;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class GaleriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $Galeria;


    public function __construct()
    {
        $this->middleware('auth');
        $this->galeria = new Galeria();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $galeria = $this->galeria->getGaleria();
        return view('admin/galeria/index')->With(['galeria' => $galeria]);
    }

    public function form()
    {
        $id   = (isset($_GET['id']) ? $_GET['id'] : false);
        $galeria = ($id ? $galeria = $this->galeria->getGaleriaById($id) : []);
        if($id && !count($galeria)){
            Session::flash('message-alert', 'danger'); 
            Session::flash('message-feedback', 'Nenhuma imagem foi encontrada'); 
            return redirect('/admin/galeria');
        }
        if($id) {
            $galeria = $galeria[0];
        }
        return view('admin/galeria/form')->With(['galeria' => $galeria]);
    }

    public function save(Request $request)
    {

        $data = $_POST;
        unset($data['_token']);
        $action;
        $id;

        if(isset($data['id'])) {
            if($data['id'] == '' || $data['id'] == null || $data['id'] == 0) {
                return response(['status' => 500, 'msg' => "Imagem não encontrada"]);
            }

            $galeria = $this->galeria->getGaleriaById($data['id']);

            if(!count($galeria)) {
                return response(['status' => 500, 'msg' => "Imagem não encontrada"]);
            }
            $this->galeria->updateGaleria($data);

            $action = 'update';
            $id = $data['id'];
        }else{
            $action = 'add';
            $id = $this->galeria->addGaleria($data);
        }
        
        $galeria = $this->galeria->getGaleriaById($id)[0];

        if(isset($request->file()['imagem'])) {
            ini_set('upload_max_filesize', '500M');
            ini_set('post_max_size', '500M');
            $imagem = $request->file()['imagem'];
            Storage::disk('public')->delete('galeria/'.$galeria->imagem);
            $imagemName = 'galeria-'.$galeria->id.'.'.$imagem->guessExtension();
            $imagem     = Image::make($imagem->getRealPath());
            $imagem->stream();
            Storage::disk('public')->put('galeria/'.$imagemName, $imagem, 'public');
            $this->galeria->saveImagem($galeria->id, $imagemName);
        }
     
        if($action == 'add') {
            return response(['status' => 200, 'msg' => "Imagem cadastrada com sucesso", 'action' => $action, 'id' => $id]);
        }
        return response(['status' => 200, 'msg' => "Imagem alterada com sucesso", 'action' => $action, 'id' => $id]);
    }

    public function remove()
    {
        $id = $_POST['id'];

        $galeria = $this->galeria->getGaleriaById($id);

        if(!count($galeria)) {
            return response(['status' => 500, 'msg' => "Nenhuma imagem foi encontrada."]);
        }
        $galeria   = $galeria[0];
        $remove     = $this->galeria->remove($id);
        if(!$remove) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro inesperado. Por favor, contacte um administrador"]);
        }

        Storage::disk('public')->delete('galeria/'.$galeria->imagem);

        return response(['status' => 200, 'msg' => "Imagem removida com sucesso"]);
    }

}
