<?php
    function harga_bet($nama, $color='red'){
        $hasil = strlen($nama);
        if($hasil <= 10 && $hasil >= 1){
            $hasil *= 300;
            echo "<font color='$color'>Nama : $nama</font><br>";
            echo "<font color='$color'>Harga bet : Rp $hasil</font>";
        }
        elseif($hasil > 10 && $hasil <= 20){
            $hasil *= 500;
            echo "<font color='$color'>Nama : $nama</font><br>";
            echo "<font color='$color'>Harga bet : Rp $hasil</font>";
        }
        else{
            $hasil *= 700;
            echo "<font color='$color'>Nama : $nama</font><br>";
            echo "<font color='$color'>Harga bet : Rp $hasil</font>";
        }
    }
    $ceknama = "Imad";
    harga_bet($ceknama,"blue");
?>