<?php

$conn = new mysqli("localhost","root", "1234","dbphp7");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;

}

$result = $conn->query("select*from tb_usuarios order by deslogin");

$data= array();

while ($row=$result->fetch_assoc()){

    var_dump($row);


}
echo json_encode($data);

?>