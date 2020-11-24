<!--local variable . global variable-->
<?php

function test(){

    echo $local='local var';//local var
}
test();
echo "<br>";

$location="Global";

$next="Variable";
function testing(){
    global $location,$next;
    echo $location;
    echo "<br>";
    echo $next;

}
testing();





















?>