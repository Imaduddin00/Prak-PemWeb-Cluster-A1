<?php
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $jurusan = array($_POST['jurusan']);
    $temp = "";
    $id_jur = $_POST['id_jur'];
    $alamat = $_POST['alamat'];
    for($i = 0; $i < count($jurusan); $i++){
        $temp = $jurusan[$i];
    }
    $koneksi = mysqli_connect("localhost", "root", " ") 
    or die("koneksi gagal");
    mysqli_select_db($koneksi, "kampus");
    $sql = "INSERT INTO mahasiswa (nrp, nama, alamat, id_jur) VALUES ($nrp, $nama, $alamat, $id_jur)";
    $sql .= "INSERT INTO jurusan (id_jur,nama) VALUES ($id_jur, $temp)";

    $result = mysqli_multi_query($koneksi, $sql);

    if($result){
        echo "record sudah masuk";
    }
    else{
        echo "gagal memasukkan record";
    }

    mysqli_close($koneksi);
?>