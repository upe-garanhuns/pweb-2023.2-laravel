<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <header>
        <div id="cabecalho">
            <h1>Gerenciador de Tarefas</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('tarefa.index') }}">Tarefas</a></li>
                    <li><a href="{{ route('tarefa.create') }}">Nova Tarefa</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="div-main">
            @yield('content')
        </div>
    </main>
    <footer>
        <div id="rodape">
            Gerenciador de Tarefas &copy; 2024
        </div>
        <a href="https://github.com/upe-garanhuns/pweb-2023.2-laravel">Github</a>
    </footer>
</body>

</html>
