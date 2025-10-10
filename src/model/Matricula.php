<?php

class Matricula{



    public function __construct(Aluno $aluno, Curso $curso){
        $this->aluno = $aluno;
        $this->curso = $curso;
    }

    
}