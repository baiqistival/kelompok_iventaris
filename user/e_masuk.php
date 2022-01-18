<form id="form1" name="form1" method="post" action="">

<?php
include"koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"select*from barang_masuk where id_masuk='$id'");
$record=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
?>

<div class="form-group">
<label>Id Masuk:</label>
<input type="text" name="a" id="a" class="form-control" value="<?php echo $row['id_masuk']?>"placeholder="id_masuk"/>
</div>

<div class="form-group">
<label>Kode Barang:</label>
<input type="text" name="b" id="b" class="form-control" value="<?php echo $row['kode_barang']?>"placeholder="kode_barang"/>
</div>

<div class="form-group">
<label>Kode Ruang:</label>
<input type="text" name="c" id="c" class="form-control" value="<?php echo $row['kode_ruang']?>"placeholder="kode_ruang"/>
</div>

<div class="form-group">
<label>Nama Barang:</label>
<input type="text" name="d" id="d" class="form-control" value="<?php echo $row['nama_barang']?>"placeholder="nama_barang"/>
</div>

<div class="form-group">
<label>Stok:</label>
<input type="text" name="e" id="e" class="form-control" value="<?php echo $row['stok']?>"placeholder="stok"/>
</div>

<div class="form-group">
<label>Type:</label>
<input type="text" name="f" id="f" class="form-control" value="<?php echo $row['type']?>"placeholder="type"/>
</div>

<div class="form-group">
<label>Harga Satuan:</label>
<input type="text" name="g" id="g" class="form-control" value="<?php echo $row['harga_satuan']?>"placeholder="harga_satuan"/>
</div>

<div class="form-group">
<label>Tgl Beli:</label>
<input type="date" name="h" id="h" class="form-control" value="<?php echo $row['tgl_beli']?>"placeholder="tgl_beli"/>
</div>

<div class="form-group">
<label>Tgl Masuk:</label>
<input type="date" name="i" id="i" class="form-control" value="<?php echo $row['tgl_masuk']?>"placeholder="tgl_masuk"/>
</div>

<div class="form-group">
<label>Asal Dana:</label>
<input type="text" name="j" id="j" class="form-control" value="<?php echo $row['asal_dana']?>"placeholder="asal_dana"/>
</div>

<div class="form-group">
<label>Penerima:</label>
<input type="text" name="k" id="k" class="form-control" value="<?php echo $row['penerima']?>"placeholder="penerima"/>
</div>

<input type="submit" name="simpan" id="simpan" value="simpan" class="btn btn-primary">
</form>
<?php
include "koneksi.php";
if(isset($_POST['simpan']))
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


$query=mysqli_query($koneksi,"update barang_masuk set kode_barang='$b',kode_ruang='$c',nama_barang='$d',stok='$e',type='$f',harga_satuan='$g',tgl_beli='$h',tgl_masuk='$i',asal_dana='$j',penerima='$k' where id_masuk='$a'");
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