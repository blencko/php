<?php

class Pessoa{

    public $nome = "Ramus Lerdof";
    protected $idade = "48";
    private $senha = "123456";

    public function verDados(){

        echo $this->nome."<br/>";
        echo $this-> idade."<br/>";
        echo $this-> senha."<br/>";

    }



}

$obj = new Pessoa();

$obj->verDados();


?>