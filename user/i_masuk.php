<div class="alert alert-info alert-dismissable">
	<i class="fa fa-edit"> Form Input Data Barang Masuk</i>

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
<label  for="d">Stok</label>
<input type="text" name="d" id="d" class="form-control" placeholder="Stok" required="">
</div>

<div class="form-group">
<label  for="e">type</label>
<input type="text" name="e" id="e" class="form-control" placeholder="type" required="">
</div>

<div class="form-group">
<label  for="f">harga satuan</label>
<input type="text" name="f" id="f" class="form-control" placeholder="harga satuan" required="">
</div>

<div class="form-group">
<label  for="g">tgl beli</label>
<input type="date" name="g" id="g" class="form-control" placeholder="tgl beli" required="">
</div>

<div class="form-group">
<label  for="h">Tgl masuk</label>
<input type="date" name="h" id="h" class="form-control" placeholder="tgl masuk" required="">
</div>

<div class="form-group">
<label  for="i">asal dana</label>
<input type="text" name="i" id="i" class="form-control" placeholder="asal dana" required="">
</div>

<div class="form-group">
<label  for="j">penerima</label>
<input type="text" name="j" id="j" class="form-control" placeholder="penerima" required="">
</div>

<button type="button" class="btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cencel</button>
<button type="submit" name="simpan" id="simpan" value="simpan" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Save</a></button>
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
	$j=$_POST['j'];
	$query=mysqli_query($koneksi,"insert into barang_masuk values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')");
	
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