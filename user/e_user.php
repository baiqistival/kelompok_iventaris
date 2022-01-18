<form id="form1" name="form1" method="post" action="">

<?php
include"koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"select*from user where id_user='$id'");
$record=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
?>

<div class="form-group">
<label>Id User:</label>
<input type="text" name="a" id="a" class="form-control" value="<?php echo $row['id_user']?>"placeholder="id_user"/>
</div>

<div class="form-group">
<label>Username:</label>
<input type="text" name="b" id="b" class="form-control" value="<?php echo $row['username']?>"placeholder="username"/>
</div>

<div class="form-group">
<label>Password:</label>
<input type="text" name="c" id="c" class="form-control" value="<?php echo $row['password']?>"placeholder="password"/>
</div>

<div class="form-group">
<label>Konf Pass:</label>
<input type="text" name="d" id="d" class="form-control" value="<?php echo $row['konf_pass']?>"placeholder="konf_pass"/>
</div>

<div class="form-group">
<label>Nama:</label>
<input type="text" name="e" id="e" class="form-control" value="<?php echo $row['nama']?>"placeholder="nama"/>
</div>

<div class="form-group">
<label>Level:</label>
<input type="text" name="f" id="f" class="form-control" value="<?php echo $row['level']?>"placeholder="level"/>
</div>

<div class="form-group">
<label>Kajur:</label>
<input type="text" name="g" id="g" class="form-control" value="<?php echo $row['kajur']?>"placeholder="kajur"/>
</div>

<div class="form-group">
<label>Nip:</label>
<input type="date" name="h" id="h" class="form-control" value="<?php echo $row['nip']?>"placeholder="nip"/>
</div>

<div class="form-group">
<label>Kode Ruang:</label>
<input type="date" name="i" id="i" class="form-control" value="<?php echo $row['kode_ruang']?>"placeholder="kode_ruang"/>
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


$query=mysqli_query($koneksi,"update user set username='$b',password='$c',konf_pass='$d',nama='$e',level='$f',kajur='$g',nip='$h',kode_ruang='$i'where id_user='$a'");
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