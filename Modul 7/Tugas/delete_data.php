<?php
    $nrp = $_POST['hapus'];
    $conn = mysqli_connect('localhost', 'root', ' ') 
    or die('koneksi gagal');
    mysqli_select_db($conn, 'kampus');
    $sql = "DELETE FROM mahasiswa WHERE nrp='$nrp'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "data telah dihapus";
    }
    else{
        echo "data tidak ada";
    }
    mysqli_close($koneksi);
?>