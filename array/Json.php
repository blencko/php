<?php
$pessoa = array();


array_push($pessoa, array(
    'nome'=> 'Daniel',
    'idade'=> 26

    ));

array_push($pessoa, array(
    'nome'=> 'Ana',
    'idade'=> 22

    ));

/*JSON!!!*/

//echo json_encode($pessoa);


$json='[{"nome":"Daniel","idade":26},{"nome":"Ana","idade":22}]';



$data=json_decode($json, true);


var_dump($data);




?>