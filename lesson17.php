<?php
function test($para){
    echo $para;

}
test('hello world');
echo "<hr>";
function result($num1,$num2){
    echo $num1+$num2;
}
result(2,3);
echo "<hr>";

function testing($num){
    return $num;
}
testing(7);

echo "<hr>";

function intern($num){
    if ($num>0){
        return "Positive";
    } else if ($num<0){
        return "Negative";
    }else{
        return "Zero";
    }
}
echo intern(2);
?>