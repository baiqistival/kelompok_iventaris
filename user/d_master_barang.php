<?php
//koneksi database
include 'koneksi.php';
$id=$_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from master_barang where id_master='$id'");
//mengalihkan halaman kembali ke index.php
 header("location:index.php?page=master_barang");
?>