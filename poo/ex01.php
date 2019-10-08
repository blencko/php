<?php

class Pessoa {

    //Atributo é a variavel da classe
    public $nome;

    //metodo é uma função dentro da classe
    public function falar(){

        return "O meu nome é ".$this->nome;


    }


}

$daniel= new Pessoa();
$daniel->nome="Daniel Porto";
echo $daniel->falar();




?>