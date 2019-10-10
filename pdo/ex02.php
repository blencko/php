<?php

$conn = new PDO ("mysql:host=localhost; dbname=dbphp7", "root", "1234");

$stmt=$conn->prepare("update tb_usuarios set deslogin=:LOGIN, dessenha=:PASSWORD where id_usuario=:ID");

$login ="Jose";
$password="qwerty";
$id=10;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "alterado";

?>
