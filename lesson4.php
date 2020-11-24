<?php
$test=array(1,2,3);
print_r($test);
echo "<hr>";

$test1=array("name"=>"mgmg","age"=>20);
print_r($test1);


$test2=array(array(1,2,4),array("name"=>"mgmg","age"=>20));
print_r($test2);
echo "<br>";
echo "<hr>";
echo $test2[0][2];


?>