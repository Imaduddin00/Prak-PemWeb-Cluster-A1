<?php
    function faktorial($x){
        $hasil = 1;
        for($i = $x; $i >= 1; $i--){
            $hasil *= $i;
        }
        return $hasil;
    }

    echo faktorial(5);
?>