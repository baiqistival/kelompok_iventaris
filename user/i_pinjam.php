<div class="alert alert-info alert-dismissable">
	<i class="fa fa-edit"> Form Input Data peminjam</i>

</div>
<div class="row">
<div class="col-lg-10">
<form role="form" method="post" name="form" action="">

<div class="form-group">
<label for="a">Nama pinjam</label>
<input type="text" name="a" id="a" class="form-control" placeholder="Nama pinjam" required="">
</div>

<div class="form-group">
<label for="b">Nama Barang</label>
<input type="text" name="b" id="b" class="form-control" placeholder="Nama barang" required="">
</div>

<div class="form-group">
<label for="c">type</label>
<input type="text" name="c" id="c" class="form-control" placeholder="type" required="">
</div>

<div class="form-group">
<label for="d">jumlah pinjam</label>
<input type="text" name="d" id="d" class="form-control" placeholder="jumlah pinjam" required="">
</div>

<div class="form-group">
<label for="e">Tgl pinjam</label>
<input type="date" name="e" id="e" class="form-control" placeholder="tgl pinjam" required="">
</div>

<div class="form-group">
<label for="f">Tgl kembali</label>
<input type="date" name="f" id="f" class="form-control" placeholder="tgl kembali" required="">
</div>

<div class="form-group">
<label for="g">keperluan</label>
<input type="text" name="g" id="g" class="form-control" placeholder="keperluan" required="">
</div>

<div class="form-group">
<label for="h">status</label>
<input type="text" name="h" id="h" class="form-control" placeholder="status" required="">
</div>

<div class="form-group">
<label for="i">kode ruang</label>
<input type="text" name="i" id="i" class="form-control" placeholder="kode ruang" required="">
</div>

<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cencel</button>
<button type="submit" name="simpan" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Save</a></button>
</form>
</div>
</div>
<?php
include "koneksi.php";
if (isset($_POST['simpan']))
{
	$a=$_POST['a'];
	$b=$_POST['b'];
	$c=$_POST['c'];
	$d=$_POST['d'];
	$e=$_POST['e'];
	$f=$_POST['f'];
	$g=$_POST['g'];
	$h=$_POST['h'];
	$i=$_POST['i'];
	$query=mysqli_query($koneksi,"insert into pinjam values('','$a','$b','$c','$d','$e','$f','$g','$h','$i')");
	
	if ($query)
	{
		echo "sukses tersimpan";
	}
	else
	{
		echo "gagal tersimpan";
	}
}
?>
