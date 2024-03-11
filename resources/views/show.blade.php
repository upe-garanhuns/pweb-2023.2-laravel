@extends('layouts.main')

@section('content')

<h2>Tarefas</h2>
    <br>
    <div>
        <table style="width:100%">
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data</th>   
                <th>Status</th>
            </tr>
                <tr>
                    <td>{{ $tarefa['id'] }}</td>
                    <td>{{ $tarefa['titulo'] }}</td>
                    <td>{{ $tarefa['descricao'] }}</td>
                    <td>{{ $tarefa['data'] }}</td>
                    <td>
                        @if ($tarefa['concluida'] == 1)
                            Concluída
                        @else
                            Em Andamento
                        @endif
                    </td>
                </tr>
        </table>
        <br><br>
        <a class="btn_criar" href="{{ route('tarefa.edit', ['id' => $tarefa['id']]) }}">Editar</a>
    </div>  

@endsection
