<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Mesaque";
        $idade = 18;
        $profissao = "Desenvolvedor Web";

        $array = [100,200,300,400,500];
        $nomes = ['Mesaque','Lucas','Victor', 'Marco'];

        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => $profissao,
            'array' => $array,
            'nomes' => $nomes
        ]);
    }

    public function create() {
        return view('events.create');
    }
}
