<?php

function lvl1_2($num){
    $res = mb_substr($num, -1);;
    echo "<br><br> Последний символ строки: ".$num.". Равен: ".$res.".<br>";    
    return;
}

//Test
echo "----------- test -----------";
$num = "Helloe world";
lvl1_2($num);
$num = "1";
lvl1_2($num);
$num = -1;
lvl1_2($num);
$num = "А";
lvl1_2($num);
$num = "а";
lvl1_2($num);
$num = "Привет";
lvl1_2($num);
$num = "";
lvl1_2($num);
$num = " ";
lvl1_2($num);
$num = "вафыывф ыфввыф вфы вфы в!";
lvl1_2($num);
$num = "вфывфывфы вфывыф в ыукеацк пваып 1";
lvl1_2($num);

?>