<form id="form1" name="form1" method="post" action="">

<?php
include"koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"select*from pinjam where id_pinjam='$id'");
$record=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
?>

<div class="form-group">
<label>Id pinjam:</label>
<input type="text" name="a" id="a" class="form-control" value="<?php echo $row['id_pinjam']?>"placeholder="id_pinjam"/>
</div>

<div class="form-group">
<label>Nama Pinjam:</label>
<input type="text" name="b" id="b" class="form-control" value="<?php echo $row['nama_pinjam']?>"placeholder="nama_pinjam"/>
</div>

<div class="form-group">
<label>Nama Barang:</label>
<input type="text" name="c" id="c" class="form-control" value="<?php echo $row['nama_barang']?>"placeholder="nama_barang"/>
</div>

<div class="form-group">
<label>Type:</label>
<input type="text" name="d" id="d" class="form-control" value="<?php echo $row['type']?>"placeholder="type"/>
</div>

<div class="form-group">
<label>Jumlah Pinjam:</label>
<input type="text" name="e" id="e" class="form-control" value="<?php echo $row['jumlah_pinjam']?>"placeholder="jumlah_pinjam"/>
</div>

<div class="form-group">
<label>Tgl Pinjam:</label>
<input type="date" name="f" id="f" class="form-control" value="<?php echo $row['tgl_pinjam']?>"placeholder="tgl_pinjam"/>
</div>

<div class="form-group">
<label>Tgl Kembali:</label>
<input type="date" name="g" id="g" class="form-control" value="<?php echo $row['tgl_kembali']?>"placeholder="tgl_kembali"/>
</div>

<div class="form-group">
<label>Keperluan:</label>
<input type="text" name="h" id="h" class="form-control" value="<?php echo $row['keperluan']?>"placeholder="keperluan"/>
</div>

<div class="form-group">
<label>Status:</label>
<input type="text" name="i" id="i" class="form-control" value="<?php echo $row['status']?>"placeholder="status"/>
</div>

<div class="form-group">
<label>Kode Ruang:</label>
<input type="text" name="j" id="j" class="form-control" value="<?php echo $row['kode_ruang']?>"placeholder="kode_ruang"/>
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


$query=mysqli_query($koneksi,"update pinjam set nama_pinjam='$b',nama_barang='$c',type='$d',jumlah_pinjam='$e',tgl_pinjam='$f',tgl_kembali='$g',keperluan='$h',status='$i',kode_ruang='$j' where id_pinjam='$a'");
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