@extends('layouts.main')

@section('content')
    <div class="forms">

        <h2>Criar tarefas</h2>

        <form action="{{ route('tarefa.store') }}" method="POST">
            @csrf

            <label for="">Nome: </label>
            <input class="caixa_texto" type="text" name = "titulo" id = "titulo" placeholder="Nome da tarefa"
                required><br><br>

            <label for="">Descrição: </label>
            <input class="caixa_texto" type="text" name = "descricao" id = "descricao"
                placeholder="Descrição da tarefa"><br><br>

            <label for="">Data: </label>
            <input class="caixa_texto" type="date" name = "data" id = "data" placeholder="Data da tarefa"><br><br>


            <label for="">Concluído: </label>
            <input type="checkbox" name="concluida" id="concluida" placeholder="Checkbox do status da tarefa">
            <br><br>

            <button class="btn_criar" type="submit">Cadastrar tarefa</button>
        </form>
    </div>
@endsection
