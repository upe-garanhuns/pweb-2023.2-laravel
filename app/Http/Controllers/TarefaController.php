<?php

namespace App\Http\Controllers;

use App\Services\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{

    public function index(TarefaService $tarefaService)
    {
        $tarefas = $tarefaService->buscarTarefas();
        return view('index', compact('tarefas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        dd($request->id);
        dd($request->nome);
        dd($request->descricao);
        dd($request->data);
        dd($request->concluido);

        return view('store');
    }

    public function show()
    {
        return view('show');
    }

    public function fetchData(TarefaService $tarefaService)
    {
        try {
            $tarefas = $tarefaService->buscarTarefas();

            return $tarefas;
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erro ao buscar tarefas'
            ], 500);
        }
    }
}
