<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Professional;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class ProfessionalController extends Controller
{
    public function index()
    {
        $professionals = Professional::get();

        return view('admin.professional.index')->with([
            'professionals' => $professionals
        ]);
    }

    public function create(Request $request)
    {
        return view('admin.professional.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        $validator = Validator::make($request->all() , [
            'name' => 'required|string',
            'office' => 'required|string',
            'description' => 'required|string',
            'file' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'mesage' => 'Algo esta errado'
            ]);
        }

        try {
            $file = $request->file('file');

            $nameFile = str_replace(' ', '_', strtolower($request->name)) . '.' . $file->getClientOriginalExtension();

            Professional::create([
                'name' => $request->name,
                'office' => $request->office,
                'description' => $request->description,
                'file' => 'professionals/' . $nameFile
            ]);

            $file->storeAs('professionals/', $nameFile);
            DB::commit();
            return response()->json([
                'message' => 'Profissional foi criado com sucesso'
            ], ResponseAlias::HTTP_CREATED);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Ocorreu um erro ao tentar cadastrar um profissional' , [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'line' => $e->getLine()
            ]);

            return response()->json([
                'message' => 'Ocorreu um erro inesperado.'
            ] , $e->getCode());
        }

    }

    public function destroy(int $id)
    {
        DB::beginTransaction();

        try {
            $professional = Professional::find($id);

            $professional->delete();

            Storage::delete($professional->file);

            DB::commit();
            return response()->json([
                'message' => 'Profissional exluido com sucesso.'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'message' => 'Ocorreu um erro inesperado'
            ], $e->getCode());
        }
    }
}
