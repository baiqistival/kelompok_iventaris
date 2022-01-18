<form id="form1" name="form1" method="post" action="">

<?php
include"koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"select*from barang_keluar where id_keluar='$id'");
$record=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
?>

<div class="form-group">
<label>Id Keluar:</label>
<input type="text" name="a" id="a" class="form-control" value="<?php echo $row['id_keluar']?>"placeholder="id_keluar"/>
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
<label>Type:</label>
<input type="text" name="e" id="e" class="form-control" value="<?php echo $row['type']?>"placeholder="type"/>
</div>

<div class="form-group">
<label>Tgl Keluar:</label>
<input type="date" name="f" id="f" class="form-control" value="<?php echo $row['tgl_keluar']?>"placeholder="tgl_keluar"/>
</div>

<div class="form-group">
<label>Stok:</label>
<input type="text" name="g" id="g" class="form-control" value="<?php echo $row['stok']?>"placeholder="stok"/>
</div>

<div class="form-group">
<label>Lokasi:</label>
<input type="text" name="h" id="h" class="form-control" value="<?php echo $row['lokasi']?>"placeholder="lokasi"/>
</div>

<div class="form-group">
<label>Nama Pengeluar Barang:</label>
<input type="text" name="i" id="i" class="form-control" value="<?php echo $row['nama_pengeluar_barang']?>"placeholder="nama_pengeluar_barang"/>
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

$query=mysqli_query($koneksi,"update barang_keluar set kode_barang='$b',kode_ruang='$c',nama_barang='$d',type='$e',tgl_keluar='$f',stok='$g',lokasi='$h',nama_pengeluar_barang='$i' where id_keluar='$a'");
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