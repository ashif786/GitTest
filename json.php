<?php
//indexed array
$array=array("one","two");
echo  json_encode($array);
 

echo '<br>';
echo '<br>';


//asscociative array

$ass=array('name'=>'ashif','age'=>30);
echo json_encode($ass);

echo '<br>';
echo '<br>';

//decode


$dec='{"name":"ashif","age":30}';
var_dump(json_decode($dec));

echo '<br>';
echo '<br>';

// as associative array

$deco='{"name":"ashif","age":30 }';
var_dump(json_decode($deco,true));