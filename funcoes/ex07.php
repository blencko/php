<?php

function soma(int ...$valores){
        return array_sum($valores);

};


echo soma(2,5);
echo '<br>';

echo soma(50,30);
echo '<br>';

echo soma(1.5,3.7);
echo '<br>';

?>