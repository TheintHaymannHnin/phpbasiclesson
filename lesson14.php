<?php for($i=1;$i<=10;$i++){
    if($i%2==0){
        echo $i ."<br>";
    }
}
echo "<hr>";
//nested loop
for($j=1;$j<=3;$j++){
    for($k=1;$k<=5;$k++){
        echo $j;
    }
    echo "<br>";
}
echo "<hr>";

for($j=1;$j<=3;$j++){
    for($k=1;$k<=5;$k++){
        echo "#";
    }
    echo "<br>";
}

for($j=1;$j<=5;$j++){
    $k=1;
    while($k<=$j){
        echo "*";
        $k++;

    }
    echo "<br>";
}
echo "<hr>";

for($j=5;$j>=1;$j--){
    $k=1;
    while($k<=$j){
        echo "*";
        $k++;

    }
    echo "<br>";
}
?>