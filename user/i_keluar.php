<div class="alert alert-info alert-dismissable">
	<i class="fa fa-edit"> Form Input Data Barang Keluar</i>

</div>
<div class="row">
<div class="col-lg-10">
<form role="form" method="post" name="form" action="">

<div class="form-group">
<label for="a">Kode Barang</label>
<input type="text" name="a" id="a" class="form-control" placeholder="kode barang" required="">
</div>

<div class="form-group">
<label for="b">Kode Ruang</label>
<input type="text" name="b" id="b" class="form-control" placeholder="kode Ruang" required="">
</div>

<div class="form-group">
<label for="c">Nama Barang</label>
<input type="text" name="c" id="c" class="form-control" placeholder="Nama barang" required="">
</div>

<div class="form-group">
<label for="d">type</label>
<input type="text" name="d" id="d" class="form-control" placeholder="type" required="">
</div>

<div class="form-group">
<label for="e">Tgl keluar</label>
<input type="date" name="e" id="e" class="form-control" placeholder="tgl keluar" required="">
</div>

<div class="form-group">
<label for="f">Stok</label>
<input type="text" name="f" id="f" class="form-control" placeholder="Stok" required="">
</div>

<div class="form-group">
<label for="g">lokasi</label>
<input type="text" name="g" id="g" class="form-control" placeholder="lokasi" required="">
</div>

<div class="form-group">
<label for="h">nama pengeluar barang</label>
<input type="text" name="h" id="h" class="form-control" placeholder="nama pengeluar barang" required="">
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
	$query=mysqli_query($koneksi,"insert into barang_keluar values('','$a','$b','$c','$d','$e','$f','$g','$h')");
	
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