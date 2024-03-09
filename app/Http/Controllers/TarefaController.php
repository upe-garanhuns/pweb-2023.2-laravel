<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        dd($request->id);
        dd($request->nome);
        dd($request->descricao);
        dd($request->data);
        dd($request->concluido);
    }

    public function show() {
        return view('show');
    }
}
