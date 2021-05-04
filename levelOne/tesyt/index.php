<?php

$array = array(
	'1' => 'Значение 1', 
	'2' => 'Значение 2', 
	'3' => 'Значение 3', 
	'4' => 'Значение 4', 
	'5' => 'Значение 5'
);
 
$json = json_encode($array, JSON_UNESCAPED_UNICODE);
echo $json;

print_r($_SERVER);

?>