<?php

require_once ("config.php");

$root = new Usuario();

$root->LoadbyId(1);

echo $root;

?>