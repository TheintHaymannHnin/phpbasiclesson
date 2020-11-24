<!--while loop -->
<?php
$input=1;
while($input<5){

    echo "Hello <br>";
    $input++;
}

echo "<hr>";

$input=1;
while($input<=5){

    echo "Hello <br>";
   
   
    $input++;
}
echo "<hr>";

$input=1;
$output=10;
while($input<=$output){
    echo $input."<br>";
    $input++;
    if($input==5){
    break;
    }
}