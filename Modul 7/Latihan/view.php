<?php
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "tamu");
    $hasil = mysqli_query($conn, "select * from bukutamu");
    $jumlah = mysqli_num_rows($hasil);
    echo "<center>Daftar Pengunjung</center>";
    echo "Jumlah Pengunjung : $jumlah";
    $a = 1;
    while($baris = mysqli_fetch_array($hasil)){
        echo "<br>";
        echo $a;
        echo "<br> Nama : $baris[0] <br>";
        echo "<br> Email : $baris[1] <br>";
        echo "<br> Komentar : $baris[2] <br>";
        $a++;
    }
?>