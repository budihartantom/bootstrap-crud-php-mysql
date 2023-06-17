<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$name           = $_POST['name'];
$email = $_POST['email'];
$mobile       = $_POST['mobile'];

//query insert data ke dalam database
$query = "INSERT INTO users (name, email, mobile) VALUES ('$name', '$email', '$mobile')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>