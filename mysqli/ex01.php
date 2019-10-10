<?php

$conn = new mysqli("localhost","root", "1234","dbphp7");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;

}


$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) values(?,?)");

$stmt->bind_param("ss",$login, $pass);

$login="user";
$pass="123456";

$stmt->execute();

$login="root";
$pass="56789";

$stmt->execute();

?>