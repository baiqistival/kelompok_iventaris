<form id="form1" name="form1" method="post" action="">

<?php
include"koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"select*from master_barang where id_master='$id'");
$record=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
?>

<div class="form-group">
<label>Id Master:</label>
<input type="text" name="a" id="a" class="form-control" value="<?php echo $row['id_master']?>"placeholder="id_master"/>
</div>

<div class="form-group">
<label>Kode Barang:</label>
<input type="text" name="b" id="b" class="form-control" value="<?php echo $row['kode_barang']?>"placeholder="kode_barang"/>
</div>

<div class="form-group">
<label>Kode Registrasi:</label>
<input type="text" name="c" id="c" class="form-control" value="<?php echo $row['kode_registrasi']?>"placeholder="kode_registrasi"/>
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
<label>No Sertifikat:</label>
<input type="text" name="f" id="f" class="form-control" value="<?php echo $row['no_sertifikat']?>"placeholder="no_sertifikat"/>
</div>

<div class="form-group">
<label>Bahan:</label>
<input type="text" name="g" id="g" class="form-control" value="<?php echo $row['bahan']?>"placeholder="bahan"/>
</div>

<div class="form-group">
<label>Asal Dana:</label>
<input type="text" name="h" id="h" class="form-control" value="<?php echo $row['asal_dana']?>"placeholder="asal_dana"/>
</div>

<div class="form-group">
<label>Tgl Beli:</label>
<input type="date" name="i" id="i" class="form-control" value="<?php echo $row['tgl_beli']?>"placeholder="tgl_beli"/>
</div>

<div class="form-group">
<label> Ukuran Barang:</label>
<input type="text" name="j" id="j" class="form-control" value="<?php echo $row['ukuran_barang']?>"placeholder="ukuran_barang"/>
</div>

<div class="form-group">
<label>Satuan:</label>
<input type="text" name="k" id="k" class="form-control" value="<?php echo $row['satuan']?>"placeholder="satuan"/>
</div>

<div class="form-group">
<label>Keadaan Barang:</label>
<input type="text" name="l" id="l" class="form-control" value="<?php echo $row['keadaan_barang']?>"placeholder="keadaan_barang"/>
</div>

<div class="form-group">
<label>	Stok:</label>
<input type="text" name="m" id="m" class="form-control" value="<?php echo $row['stok']?>"placeholder="stok"/>
</div>

<div class="form-group">
<label>Harga Satuan:</label>
<input type="text" name="n" id="n" class="form-control" value="<?php echo $row['harga_satuan']?>"placeholder="harga_satuan"/>
</div>

<div class="form-group">
<label>Ada:</label>
<input type="text" name="o" id="o" class="form-control" value="<?php echo $row['ada']?>"placeholder="ada"/>
</div>

<div class="form-group">
<label>Baik:</label>
<input type="text" name="p" id="p" class="form-control" value="<?php echo $row['baik']?>"placeholder="baik"/>
</div>

<div class="form-group">
<label>Kurang Baik:</label>
<input type="text" name="q" id="q" class="form-control" value="<?php echo $row['kurang_baik']?>"placeholder="kurang_baik"/>
</div>

<div class="form-group">
<label>Rusak Berat:</label>
<input type="text" name="r" id="r" class="form-control" value="<?php echo $row['rusak_berat']?>"placeholder="rusak_berat"/>
</div>

<div class="form-group">
<label>Tidak Ada:</label>
<input type="text" name="s" id="s" class="form-control" value="<?php echo $row['tidak_ada']?>"placeholder="tidak_ada"/>
</div>

<div class="form-group">
<label>Lokasi:</label>
<input type="text" name="t" id="t" class="form-control" value="<?php echo $row['lokasi']?>"placeholder="lokasi"/>
</div>

<div class="form-group">
<label>Ket:</label>
<input type="text" name="u" id="u" class="form-control" value="<?php echo $row['ket']?>"placeholder="ket"/>
</div>

<div class="form-group">
<label>Kode Ruang:</label>
<input type="text" name="v" id="v" class="form-control" value="<?php echo $row['kode_ruang']?>"placeholder="kode_ruang"/>
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
$v=$_POST['v'];


$query=mysqli_query($koneksi,"update master_barang set kode_barang='$b',kode_registrasi='$c',nama_barang='$d',type='$e',no_sertifikat='$f',bahan='$g',asal_dana='$h',tgl_beli='$i',ukuran_barang='$j',satuan='$k',keadaan_barang='$l',stok='$m',harga_satuan='$n',ada='$o',baik='$p',kurang_baik='$q',	rusak_berat='$r',tidak_ada='$s',lokasi='$t',ket='$u',kode_ruang='$v' where id_master='$a'");
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