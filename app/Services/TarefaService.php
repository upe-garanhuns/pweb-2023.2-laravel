<?php

namespace App\Services;

use App\Models\Tarefa;
use Illuminate\Support\Facades\Http;

class TarefaService
{
    private const BASE_URL = 'http://localhost:8080/api/tarefas';

    public function buscarTarefas()
    {
        $response = Http::get(self::BASE_URL . '/listar');
        return $response->json();
    }

    public function cadastrarTarefas($tarefa)
    {
        //
        // $validatedData = validator($tarefa, [
        //     'id' => 'required|numeric',
        //     'checkStatus' => 'nullable|boolean',
        //     'titulo' => 'required|string|max:255',
        //     'descricao' => 'nullable|string',
        //     'data' => 'nullable|date'
        //     // Add more validation rules as needed
        // ])->validate();
        //\
        $checkStatus = $tarefa['concluida'] === 'on' ? true : false;

        $tarefa['concluida'] = $checkStatus;

        $response = Http::post(self::BASE_URL . '/criar', $tarefa);


        if ($response->successful()) {
            return new Tarefa($response->json());
        } else {
            throw new \Exception('Não foi possível cadastrar a tarefa: ' . $response->status());
        }
    }

    public function buscarTarefaPorId($id)
    {
        $response = Http::get(self::BASE_URL . '/listar/' . $id);


        if ($response->successful()) {
            $tarefa = new Tarefa($response->json());
            return $tarefa;
        } else {
            throw new \Exception('Não foi possível buscar a tarefa: ' . $response->status());
        }
    }

    public function atualizarTarefaPorId($id, $tarefa)
    {
        $checkStatus = $tarefa['concluida'] === 'on' ? true : false;
        $tarefa['concluida'] = $checkStatus;

        $response = Http::put(self::BASE_URL . '/atualizar/' . $id, $tarefa);

        if ($response->successful()) {
            return redirect()->route('tarefa.show', ['id' => $id]);
        } else {
            throw new \Exception('Não foi possível atualizar a tarefa: ' . $response->status());
        }
    }
}
