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
<label for="b">Kode Registrasi</label>
<input type="text" name="b" id="b" class="form-control" placeholder="kode registrasi" required="">
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
<label for="e">no sertifikat</label>
<input type="text" name="e" id="e" class="form-control" placeholder="no sertifikat" required="">
</div>

<div class="form-group">
<label for="f">Bahan</label>
<input type="text" name="f" id="f" class="form-control" placeholder="bahan" required="">
</div>

<div class="form-group">
<label for="g">asal dana</label>
<input type="text" name="g" id="g" class="form-control" placeholder="asal dana" required="">
</div>

<div class="form-group">
<label for="h">tgl beli</label>
<input type="date" name="h" id="h" class="form-control" placeholder="tgl beli" required="">
</div>

<div class="form-group">
<label for="i">ukuran barang</label>
<input type="text" name="i" id="i" class="form-control" placeholder="ukuran barang" required="">
</div>

<div class="form-group">
<label for="j">satuan</label>
<input type="text" name="j" id="j" class="form-control" placeholder="satuan" required="">
</div>

<div class="form-group">
<label for="k">keadaan barang</label>
<input type="text" name="k" id="k" class="form-control" placeholder="keadaan barang" required="">
</div>

<div class="form-group">
<label for="l">Stok</label>
<input type="text" name="l" id="l" class="form-control" placeholder="Stok" required="">
</div>

<div class="form-group">
<label for="m">harga satuan</label>
<input type="text" name="m" id="m" class="form-control" placeholder="harga satuan" required="">
</div>

<div class="form-group">
<label for="n">ada</label>
<input type="text" name="n" id="n" class="form-control" placeholder="ada" required="">
</div>

<div class="form-group">
<label for="o">baik</label>
<input type="text" name="o" id="o" class="form-control" placeholder="baik" required="">
</div>

<div class="form-group">
<label for="p">kurang baik</label>
<input type="text" name="p" id="p" class="form-control" placeholder="kurang baik" required="">
</div>

<div class="form-group">
<label for="q">rusak berat</label>
<input type="text" name="q" id="q" class="form-control" placeholder="rusak berat" required="">
</div>

<div class="form-group">
<label for="r">tidak ada</label>
<input type="text" name="r" id="r" class="form-control" placeholder="tidak ada" required="">
</div>

<div class="form-group">
<label for="s">lokasi</label>
<input type="text" name="s" id="s" class="form-control" placeholder="lokasi" required="">
</div>

<div class="form-group">
<label for="t">ket</label>
<input type="text" name="t" id="t" class="form-control" placeholder="ket" required="">
</div>

<div class="form-group">
<label for="u">Kode Ruang</label>
<input type="text" name="u" id="u" class="form-control" placeholder="kode Ruang" required="">
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
	$j=$_POST['j'];
	$k=$_POST['k'];
	$l=$_POST['l'];
	$m=$_POST['m'];
	$n=$_POST['n'];
	$o=$_POST['o'];
	$p=$_POST['p'];
	$q=$_POST['q'];
	$r=$_POST['r'];
	$s=$_POST['s'];
	$t=$_POST['t'];
	$u=$_POST['u'];
	$query=mysqli_query($koneksi,"insert into master_barang values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u')");
	
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