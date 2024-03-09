<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function create() {
        return view('create');
    }

    public function show() {
        return view('show');
    }
}
