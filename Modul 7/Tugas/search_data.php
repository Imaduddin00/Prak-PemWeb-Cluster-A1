<?php
    $cari = $_POST['cari'];
    $conn = mysqli_connect('localhost', 'root', ' ')
    or die('koneksi gagal');
    mysqli_select_db($conn, 'kampus');
    $sql = "SELECT * FROM mahasiswa WHERE nama='$cari'";
    $result = mysqli_query($conn, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "<table class='table'>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th>NRP</th> <th>Nama</th> <th>Alamat</th> <th>Jurusan</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody> <tr>";
                echo "<th>".$row['nrp']."</th>";
                echo "<th>".$row['nama']."</th>";
                echo "<th>".$row['alamat']."</th>";
                echo "<th>".$row['jurusan']."</th>";
                echo "</tr> </tbody> </table>";
        }
    }else{
        echo "data tidak ada";
    }
    mysqli_close($koneksi);
?>