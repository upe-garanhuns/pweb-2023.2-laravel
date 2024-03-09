<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use App\Services\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{

    protected $tarefaService;

    public function __construct(TarefaService $tarefaService)
    {
        $this->tarefaService = $tarefaService;
    }

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
        try {
            $novaTarefa = $this->tarefaService->cadastrarTarefas($request);
            return response()->json($novaTarefa, 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
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
