<?php
//koneksi database
include 'koneksi.php';
$id=$_GET['id'];

//menghapus data dari database
mysqli_query($koneksi,"delete from pinjam where id_pinjam='$id'");
//mengalihkan halaman kembali ke index.php
 header("location:index.php?page=pinjam");
?>