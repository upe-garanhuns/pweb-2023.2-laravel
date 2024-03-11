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
            return redirect()->route('tarefa.index');
        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show(string $id)
    {
        
        $tarefa = $this->tarefaService->buscarTarefaPorId($id)->toArray();
        
        return view('show', compact('tarefa'));
    }

    public function edit(string $id){
        $tarefa = $this->tarefaService->buscarTarefaPorId($id);

        return view('edit', compact('tarefa'));
    }

    public function update(Request $request, $id)
    {
        try {
            $updatedTarefa = $this->tarefaService->atualizarTarefaPorId($id, $request);

            return $updatedTarefa;
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Erro ao atualizar tarefas'
            ], 500);
        }
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
