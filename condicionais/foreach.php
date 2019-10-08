<!--<?php/*

$meses = array(
    'janeiro','fevereiro','março',
    'abril','maio','junho',
    'julho','agosto','setembro',
    'outubro','novembro','dezembro'
);

foreach($meses as $index=>$mes){
    echo "Indice: ".$index."<br><br>";
    echo "o mês é ". $mes."<br><br>";

}


*/


?>-->



<form>

<input type="text" name= "nome">
<input type="date" name= "nascimento">
<input type="submit" value= "ok">


</form>
<?php

foreach($_GET as $key=> $value){

echo "Nome do campo: ".$key."<br>";

echo "Valor do campo ".$value;

echo "<hr>";

}

?>