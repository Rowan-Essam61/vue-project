<?php

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-control-Allow-Method: PUT');
header('Access-control-Allow-Headers: Access-control-Allow-Headers,Content-type,Access-Control-Allow-Method,Authorization, X-Requested-With ');


//initialize api
include_once('../core/initialize.php');

$Product=new product($db);
$data= json_decode(file_get_contents("php://input"));
$Product->id = $data->ID;
$Product->category_id = $data->Category_id;
$Product->color = $data->Colors;
$Product->size = $data->Sizes;
$Product->description = $data->Description;
$Product->name = $data->Name;
$Product->brand_id = $data->Brand_ID;
$Product->quantity = $data->quantity;
$Product->price = $data->Price;
$Product->update();

//if ($User->create()==true) { 
	//echo json_encode(
//	array('message' => 'createddd')
//	);
//}
//else {
//	echo json_encode(
	//array('message'=>'mtnylt4')
	//);
//}




?>