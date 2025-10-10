<?php
include_once "Pessoa.php";
class Aluno extends Pessoa{
    private $rm;


public function __construct($numMatri, $nome){
    parent::__construct(nome: $nome);
    $this->rm = $numMatri;
}


    public function getRm(): string{
        return $this->rm;
    }

}