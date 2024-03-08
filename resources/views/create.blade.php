<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar tarefas</title>
</head>
<body>
        

    <h2>Criar tarefas</h2>

    <form action="">
        @csrf

        
        <label for="">Id: </label>
        <input type="number" name = "nome" id = "nome" placeholder="Id da conta"><br><br>

        <label for="">Nome: </label>
        <input type="text" name = "nome" id = "nome" placeholder="Nome da tarefa" required><br><br>

        <label for="">Descrição: </label>
        <input type="text" name = "descrição" id = "descrição" placeholder="Descrição da tarefa"><br><br>
        
        <label for="">Data: </label>
        <input type="date" name = "data" id = "data" placeholder="Data da tarefa"><br><br>
        
        <label for="">Concluído: </label>
        <input type="checkbox" name = "concluido" id = "concluido" placeholder="Checkbox de concluido"><br><br>

        <button type="submit">Cadastrar tarefa</button>
    </form>

</body>
</html>