<?php
    $a = 20;
    $b = 5;
    $operator = array("+","-","*","/","%");
    $hasil = 0;

    echo "bilangan 1 = ".$a."<br>";
    echo "bilangan 2 = ".$b."<br>";
    echo "<br>";

    echo "Berikut merupakan hasil dari setiap operasi<br>";
    echo "<br>";

    for($i = 0; $i < count($operator); $i++){
        if($operator[$i] == "+"){
            $hasil = $a + $b;
            echo "PENJUMLAHAN<br>";
            echo "Operator : $operator[$i]<br>";
            echo "Hasil : ".$hasil."<br>";
        }
        elseif($operator[$i] == "-"){
            echo "<br>";
            $hasil = $a - $b;
            echo "PENGURANGAN<br>";
            echo "Operator : $operator[$i]<br>";
            echo "Hasil : ".$hasil."<br>";
        }
        elseif($operator[$i] == "*"){
            echo "<br>";
            $hasil = $a * $b;
            echo "PERKALIAN<br>";
            echo "Operator : $operator[$i]<br>";
            echo "Hasil : ".$hasil."<br>";
        }
        elseif($operator[$i] == "/"){
            echo "<br>";
            $hasil = $a / $b;
            echo "PEMBAGIAN<br>";
            echo "Operator : $operator[$i]<br>";
            echo "Hasil : ".$hasil."<br>";
        }
        else{
            echo "<br>";
            $hasil = $a % $b;
            echo "MODULUS<br>";
            echo "Operator : $operator[$i]<br>";
            echo "Hasil : ".$hasil."<br>";
        }
    }
?>