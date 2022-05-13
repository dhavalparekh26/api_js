<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Acess-Control-Alllow-Methods: POST');
header('Acess-Control-Alllow-Header: Acess-Control-Alllow-Header,Content-Type,Acess-Control-Alllow-Methods,Authorization,X-Requested-With');
include "config.php";

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$email = $data['email'];
$password = $data['password'];

$sql= "INSERT INTO user(name, email, password) VALUES('{$name}','{$email}','{$password}')"; 



if($res = mysqli_query($conn,$sql)){
    echo json_encode(array('message' => 'Insert Data','status'=> true));

}else{

    echo json_encode(array('message' => 'No Record Found','status'=> false));

}
?>