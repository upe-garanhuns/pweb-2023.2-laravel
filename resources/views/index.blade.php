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
            @foreach ($tarefas as $tarefa)
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
            @endforeach
        </table>
    </div>
@endsection
