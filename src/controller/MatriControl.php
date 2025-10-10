<?php
//includes
include_once(__DIR__ . "/../model/Aluno.php");
include_once(__DIR__ . "/../model/Curso.php.php");

//receber os valores da requisição get (url)
$alunoNome = $_GET['alnome'];
$alunoCurso = $_GET['curso'];

if ($alunoNome == null){
    echo "Nome do aluno: Null";
}else{
    echo "Nome do aluno: {$alunoNome}";
}

if ($alunoCurso == null){
    echo "Curso: Null";
}else{
    echo "Curso: {$alunoCurso}";
}

//intanciar

$LoucoAbreu = new Aluno($alunoNome);
$DS = new Curso($alunoCurso);