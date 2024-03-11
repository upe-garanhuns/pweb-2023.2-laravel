@extends('layouts.main')

@section('content')
    <div class="forms">

        <h2>Atualizar tarefas</h2>

        <form action="{{ route('tarefa.update', ['id' => $tarefa->id])}}" method="POST">
            @csrf
            @method('PUT')

            <label for="">Nome: </label>
            <input class="caixa_texto" type="text" name = "titulo" id = "titulo" placeholder="Nome da tarefa"
                value="{{$tarefa->titulo}}" required><br><br>

            <label for="">Descrição: </label>
            <input class="caixa_texto" type="text" name = "descricao" id = "descricao"
                placeholder="Descrição da tarefa"  value="{{$tarefa->descricao}}"><br><br>

            <label for="">Data: </label>
            <input class="caixa_texto" type="date" name = "data" id = "data" placeholder="Data da tarefa"  value="{{$tarefa->data}}"><br><br>


            <label for="">Concluído: </label>
            <input type="checkbox" name="concluida" id="concluida" placeholder="Checkbox do status da tarefa"  value="{{$tarefa->concluida}}">
            <br><br>

            <button class="btn_criar" type="submit">Atualizar tarefa</button>
        </form>
    </div>

@endsection