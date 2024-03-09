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
}