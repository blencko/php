zzzzzzzzzzzzzzzzzzzzzqszwzzzzzzzzzzzzzzzssssssssssssssssssssssssssssssssssssssx xa\<?php

$conn = new PDO ("mysql:host=localhost; dbname=dbphp7", "root", "1234");
$conn->beginTransaction();

$stmt=$conn->prepare("delete from tb_usuarios where id_usuario=?");


$id=10;

$stmt->execute(array($id));

echo "alterado";

?>
