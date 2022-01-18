<?php
ob_start();
session_start();
if($_SESSION['level']=="penjual"){
	?>
	<h1>ini adalah halaman penjual</h1><br>
	<h1>Selamat datang <?php echo $_SESSION['username']?></h1>
	<?php
}
else
{
	echo "anda tidak ada kases sebagai penjual";
}
?>