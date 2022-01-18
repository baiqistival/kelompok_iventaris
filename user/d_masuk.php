<?php
//koneksi database
include 'koneksi.php';
$id=$_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from barang_masuk where id_masuk='$id'");
//mengalihkan halaman kembali ke index.php 
header("location:index.php?page=barang_masuk");
?>
