<h2>Tarefas</h2>

@foreach ($tarefas as $tarefa)
    <div>
        <hr>
        <p>{{ $tarefa['id'] }}</p>
        <p>{{ $tarefa['titulo'] }}</p>
        <p>{{ $tarefa['descricao'] }}</p>
        <p>{{ $tarefa['data'] }}</p>
        <p>{{ $tarefa['concluida'] }}</p>
    </div>
@endforeach
