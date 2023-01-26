<?php
    include "koneksi.php";
    
    //bikin tabel
    // $sql = " CREATE TABLE user(
    //     id  int PRIMARY KEY,
    //     nama varchar(50),
    //     role varchar(50),
    //     age int,
    // )";
    // if ($koneksi->query($sql) == TRUE) {
    //     echo "tabel dibuat";
    // } else {
    //     echo "tabel gagal dibuat";
    // }
    
    //INPUT: MASUKIN DATA MANUAL DARI KODE ke tabel mahasiswa
    // $sql = "INSERT INTO mahasiswa (ND, Agensi, Nama) VALUES ('1', 'Marvel', 'hulk')";
    // if(mysqli_query($koneksi, $sql)){
    //     echo "Records inserted successfully.";
    // } else{
    //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    // }

    //INPUT: MASUKIN DATA MANUAL DARI KODE ke tabel mahasiswa
    $sql = "INSERT INTO user (username, password) VALUES ('18117010', 'hulk')";
    if(mysqli_query($koneksi, $sql)){
        echo "Records inserted successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
?>