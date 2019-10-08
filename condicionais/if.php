<?php

$suaidade = 66;

$idadeCrianca =12;
$idadeAdulto = 18;
$idadeIdoso =65;

if ($suaidade<$idadeCrianca) {
    echo "criança";

}elseif($suaidade<$idadeAdulto){

    echo "adolecente";
}elseif($suaidade<$idadeIdoso) {

    echo "Adulto";    
}else{

    echo "Idoso";
}




?>