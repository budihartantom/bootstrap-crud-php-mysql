<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$id     = $_POST['id'];
$name         = $_POST['name'];
$email = $_POST['email'];
$mobile       = $_POST['mobile'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE users SET name = '$name', email = '$email', mobile = '$mobile' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>