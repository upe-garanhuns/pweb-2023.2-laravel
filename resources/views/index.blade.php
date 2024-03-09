<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h2>Tarefas</h2>
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
</body>
</html>
