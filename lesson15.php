<!-- foreach -->
<?php
$test=array(1,2,3,4,5);
foreach($test as $value){
    echo $value ."<br>";
}

$account=array(
    'name'=>'aungaung',
    'age'=>25,
    'mail'=>'aungaung@gmail.com'

);
foreach($account as $key=>$value){
    echo $key."=" .$value ."<br>";
}
?>

