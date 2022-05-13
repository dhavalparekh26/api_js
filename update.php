<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Alllow-Methods: PUT');
header('Access-Control-Alllow-Header: Access-Control-Alllow-Header,Content-Type,Access-Control-Alllow-Methods,Authorization,X-Requested-With');
include "config.php";

$result = json_decode(file_get_contents("php://input"), true);


$id = $result['id'];
$name = $result['name'];
$email = $result['email'];
$password = $result['password'];


$sql = "UPDATE user SET name = '{$name}', email = {$email}, password = '{$password}' WHERE id = {$id}";

if($res = mysqli_query($conn,$sql)){
    
   
   
    echo json_encode(array('message' => 'updater Data','status'=> true));

}else{

    echo json_encode(array('message' => 'No Record Found','status'=> false));

}








 



