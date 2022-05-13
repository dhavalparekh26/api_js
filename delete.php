<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Alllow-Methods: DELETE');
header('Access-Control-Alllow-Header: Acess-Control-Alllow-Header,Content-Type,Acess-Control-Alllow-Methods,Authorization,X-Requested-With');

include "config.php";

$data = json_decode(file_get_contents("php://input"), true);

 $id = $data['id'];



$sql= "DELETE FROM  user WHERE id ={$id}"; 

 $res = mysqli_query($conn,$sql);



if($res){

    echo json_encode(array('message' => 'Delete data','status'=> true));

}else{

    echo json_encode(array('message' => 'Data not Delete','status'=> false));

}



?>