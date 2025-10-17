<?php
//includes
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../model/Curso.php");

//receber os valores da requisição get (url)
$alunoNome = $_GET['alnome'];
$numMatri = $_GET['matri'];
$alunoCurso = $_GET['curso'];

if ($alunoNome == null){
    echo "Cadastro de aluno: Null";
}else{
    echo "Cadastro do aluno: \n
    Nome do Aluno: {$alunoNome} \n
    Matricula: {$numMatri} \n";
}

if ($alunoCurso == null){
    echo "Curso: Null";
}else{
    echo "Curso: {$alunoCurso}";
}

//intanciar

$LoucoAbreu = new Aluno($alunoNome, $numMatri);
$DS = new Curso($alunoCurso);