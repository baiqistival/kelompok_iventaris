<div class="alert alert-info alert-dismissable">
	<i class="fa fa-edit"> Form Input Data Barang Masuk</i>

</div>
<div class="row">
<div class="col-lg-10">
<form role="form" method="post" name="form" action="">

<div class="form-group">
<label for="a">username</label>
<input type="text" name="a" id="a" class="form-control" placeholder="username" required="">
</div>

<div class="form-group">
<label for="b">password</label>
<input type="text" name="b" id="b" class="form-control" placeholder="password" required="">
</div>

<div class="form-group">
<label for="c">konf pas</label>
<input type="text" name="c" id="c" class="form-control" placeholder="konf pas" required="">
</div>

<div class="form-group">
<label for="d">nama</label>
<input type="text" name="d" id="d" class="form-control" placeholder="nama" required="">
</div>

<div class="form-group">
<label for="e">level</label>
<input type="text" name="e" id="e" class="form-control" placeholder="level" required="">
</div>

<div class="form-group">
<label for="f">Kajur</label>
<input type="text" name="f" id="f" class="form-control" placeholder="kajur" required="">
</div>

<div class="form-group">
<label for="g">nip</label>
<input type="text" name="g" id="g" class="form-control" placeholder="nip" required="">
</div>

<div class="form-group">
<label for="h">Kode ruang</label>
<input type="text" name="h" id="h" class="form-control" placeholder="kode ruang" required="">
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
	$query=mysqli_query($koneksi,"insert into user values('','$a','$b','$c','$d','$e','$f','$g','$h')");
	
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