<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
        $alunos = Aluno::all();
        return view('aluno/aluno', ['alunos' => $alunos]);
    }


   public function create() {
       return view("aluno/aluno-create");
   }
   public function save(Request $request) {
       $aluno = new Aluno();
       $aluno->nome = $request->nome;
       $aluno->matricula = $request->matricula;
       $aluno->isReprovado = $request->isReprovado ? true : false;
       $aluno->idade = $request->idade;

       $aluno->save();
       return redirect("/aluno");
   }

   public function delete($id) {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect("/aluno");
   }

   public function edit($id) {
       $aluno = Aluno::find($id);
       return view('aluno/aluno-edit', ['aluno' => $aluno]);
   }
    public function update(Request $request, $id) {
        $aluno = Aluno::find($id);
        $aluno->nome = $request->nome;
        $aluno->matricula = $request->matricula;
        $aluno->isReprovado = $request->isReprovado ? true : false;
        $aluno->idade = $request->idade;

        $aluno->save();
        return redirect("/aluno");
    }
}
