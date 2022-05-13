<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Alllow-Methods: GET');

include "config.php";
$data = json_decode(file_get_contents("php://input"), true);


$sql= "SELECT * FROM user";

$res = mysqli_query($conn,$sql);

if(mysqli_num_rows($res) > 0){

    $output = mysqli_fetch_all($res,MYSQLI_ASSOC);
    echo json_encode($output);

}else{

    echo json_encode(array('message' => 'No Record Found','status'=> false));

}

?>