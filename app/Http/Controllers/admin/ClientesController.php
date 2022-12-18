<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Clientes;
use App\Skills;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $clientes;


    public function __construct()
    {
        $this->middleware('auth');
        $this->clientes = new Clientes();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = $this->clientes->getClientes();
        return view('admin/clientes/index')->With(['clientes' => $clientes]);
    }

    public function form()
    {
        $id   = (isset($_GET['id']) ? $_GET['id'] : false);
        $cliente = ($id ? $cliente = $this->clientes->getClienteById($id) : []);
        if($id && !count($cliente)){
            Session::flash('message-alert', 'danger');
            Session::flash('message-feedback', 'Nenhum cliente foi encontrado');
            return redirect('/admin/cases');
        }
        if($id) {
            $cliente = $cliente[0];
        }

        return view('admin/clientes/form')->With(['cliente' => $cliente ]);
    }

    public function update(Request $request)
    {
        DB::beginTransaction();

        $validator = Validator::make($request->all() , [
            'titulo' => 'required|string',
            'imagem' => 'nullable|image',
            'id' => 'required|numeric'
        ] , [
            'titulo.required' => 'O campo título é obrigatório.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 422);
        }

        try {
            $client = Client::find($request->id);

            if ($request->imagem) {
                Storage::delete('clientes/' . $client->imagem);
                $image = $request->imagem;
                $filename = 'client-' . $client->id . '.' . $image->getClientOriginalExtension();
                $image->storeAs('clientes/', $filename);
                $client->update([
                    'imagem' => $filename
                ]);
            }

            $client->update([
                'name' => $request->titulo,
            ]);

            DB::commit();

            return response()->json([
                'message' => "Cliente atualizado com sucesso",
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Ocorreu um erro inesperado",
            ] , $e->getMessage());
        }


    }

    public function save(Request $request)
    {
        DB::beginTransaction();

        $validator = Validator::make($request->all() , [
            'titulo' => 'required|string',
            'imagem' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], 422);
        }

        try {
            $client = Client::create([
                'name' => $request->titulo,
            ]);

            $image = $request->imagem;
            $filename = 'client-' . $client->id . '.' . $image->getClientOriginalExtension();
            $image->storeAs('clientes/', $filename);

            $client->update([
                'imagem' => $filename
            ]);

            DB::commit();

            return response([
                'message' => "Cliente cadastrado com sucesso",
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocorreu um erro inesperado.'
            ] , 500);

            DB::rollBack();
        }


        $data = $request->all();

        unset($data['_token']);
        $action;
        $id;

//        if(isset($data['id'])) {
//            if($data['id'] == '' || $data['id'] == null || $data['id'] == 0) {
//                return response(['status' => 500, 'msg' => "Cliente não encontrado"]);
//            }
//
//            $cliente = $this->clientes->getClienteById($data['id']);
//
//            if(!count($cliente)) {
//                return response(['status' => 500, 'msg' => "Cliente não encontrado"]);
//            }
//            $this->clientes->updateCliente($data);
//
//            $action = 'update';
//            $id = $data['id'];
//        }else{
//            $action = 'add';
//            $id = $this->clientes->addCliente($data);
//        }

        $cliente = $this->clientes->getClienteById($id)[0];

        if(isset($request->file()['imagem'])) {
            $imagem = $request->file()['imagem'];
            Storage::disk('public')->delete('clientes/'.$cliente->imagem);
            $imagemName = 'cliente-'.$cliente->id.'.'.$imagem->guessExtension();

            $imagem     = Image::make($imagem->getRealPath());
            $imagem->stream();
            Storage::disk('public')->put('clientes/'.$imagemName, $imagem, 'public');
            $this->clientes->saveImagem($cliente->id, $imagemName);
        }

        if($action == 'add') {
            return response(['status' => 200, 'msg' => "Cliente cadastrado com sucesso", 'action' => $action, 'id' => $id]);
        }
        return response(['status' => 200, 'msg' => "Cliente alterado com sucesso", 'action' => $action, 'id' => $id]);
    }


    public function remove()
    {
        $id = $_POST['id'];

        $cliente = $this->clientes->getClienteById($id);

        if(!count($cliente)) {
            return response(['status' => 500, 'msg' => "Nenhum cliente foi encontrado."]);
        }
        $cliente   = $cliente[0];
        $remove     = $this->clientes->remove($id);
        if(!$remove) {
            return response(['status' => 500, 'msg' => "Ocorreu um erro inesperado. Por favor, contacte um administrador"]);
        }

        Storage::disk('public')->delete('clientes/'.$cliente->imagem);

        return response(['status' => 200, 'msg' => "Cliente removido com sucesso"]);
    }

}
