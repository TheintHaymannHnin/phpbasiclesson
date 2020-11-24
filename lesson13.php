<!--for loop-->
<?php
for($x=0;$x<=10;$x++){

    echo "Hello World";
}
echo "<hr>";

$y=0;
$z=5;
for(;;){
    if($x<$z){
    break;
    }
    echo $y. "<br>";
    $y++;
}