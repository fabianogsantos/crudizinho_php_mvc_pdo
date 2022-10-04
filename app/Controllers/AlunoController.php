<?php 

class AlunoController extends Controller{

    public function index() {

        $dados = [
            'titulo'=>'Alunos',
        ];

        $this->view('alunos/home', $dados);
    }

}