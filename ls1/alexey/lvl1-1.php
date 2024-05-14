<?php

function lvl1_1($num){
    echo "<br><br> Чилос для теста: ".$num."<br>";
    if($num > 0){
        echo "Число положительно";
    }else if($num < 0){
        echo "Число отрицательное";        
    }else if($num == 0){
        echo "Число равно нулю";        
    }else{
        echo "Не являетсчя числом";  
    }
    return;
}

//Test
echo "----------- test -----------";
$num = 1;
lvl1_1($num);
$num = 0;
lvl1_1($num);
$num = 0.23;
lvl1_1($num);
$num = -23;
lvl1_1($num);
$num = -0;
lvl1_1($num);
$num = -0.1;
lvl1_1($num);
$num = "dsadasd";
lvl1_1($num);

?>