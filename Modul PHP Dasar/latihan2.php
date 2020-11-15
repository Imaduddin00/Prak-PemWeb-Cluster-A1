<?php
    $n = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

    echo "Sebelum diurutkan : ";
    for($i = 0; $i < count($n); $i++){
        echo $n[$i]." ";
    }
    sort($n);

    echo "<br>Setelah diurutkan : ";
    for($i = 0; $i < count($n); $i++){
        echo $n[$i]." ";
    }
?>