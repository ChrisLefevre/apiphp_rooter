<?php 

$gets = $_GET;
$data = readData('getreturn',$gets);	
	
$response = [
	'code' => '100',
	'data' => $data		
];

	
?>