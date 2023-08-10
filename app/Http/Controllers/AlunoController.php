<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
  public function todosALuno() {
    return view('vteste');
  }

  public function inserirAluno() {
    return 'Chamou a função inserirAluno';
  }

  public function obtemUmAluno($id) {
    return view('vteste2')->with('varNaView', $id);
  }
}
