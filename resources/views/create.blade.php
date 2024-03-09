<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar tarefas</title>
</head>
<body>

    <a href="{{ route('tarefa.create')}}"></a>

    <h2>Criar tarefas</h2>

    <form action="{{ route('tarefa.store')}}" method="POST">
        @csrf

        <label for="">Nome: </label>
        <input type="text" name = "titulo" id = "titulo" placeholder="Nome da tarefa" required><br><br>

        <label for="">Descrição: </label>
        <input type="text" name = "descricao" id = "descricao" placeholder="Descrição da tarefa"><br><br>

        <label for="">Data: </label>
        <input type="date" name = "data" id = "data" placeholder="Data da tarefa"><br><br>

        <label for="">Concluído: </label>
        <input type="checkbox" name="concluida" id="concluida" placeholder="Checkbox do status da tarefa">

        <button type="submit">Cadastrar tarefa</button>
    </form>

</body>
</html>
