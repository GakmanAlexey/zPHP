<?php

function lvl1_2($num){
    $res = mb_strlen($num);
    echo "<br><br> Слово для теста: ".$num.". Длина: ".$res." символов.<br>";    
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

?>