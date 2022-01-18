<?php
ob_start();
session_start();
if($_SESSION['level']=="pegawai"){
	?>
	<h1>ini adalah halaman pegawai</h1><br>
	<h1>Selamat datang <?php echo $_SESSION['username']?></h1>
	<?php
}
else
{
	echo "anda tidak ada kases sebagai pegawai";
}
?>