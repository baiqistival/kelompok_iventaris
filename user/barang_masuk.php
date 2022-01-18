  <div class="row">
 <div class="col-lg-12">
 <a href="index.php?page=i_masuk" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add New</a></span></a>
 </div>
 <!--/.col-lg-12-->
 </div><br>
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                         <th>Kode barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stok</th>
                                        <th>harga satuan</th>
                                        <th>Asal Dana</th>
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                	<?php
                                	include"koneksi.php";
                                	$query=mysqli_query($koneksi,"SELECT * FROM barang_masuk");
                                	while ($row=mysqli_fetch_array($query)) {
									
                                	?>

<?php
                                	$harga_satuan=$row['harga_satuan'];
                                	$jumlah_desimal=("0");
                                	$pemisah_desimal=(",");
                                	$pemisah_ribuan=(",");
                                	?>
									
                                            
                                	<tr>
                                   <td><?php echo $row['kode_barang'];?></td>
                                		<td><?php echo $row['nama_barang'];?></td>
                                        <td><?php echo $row['stok'];?></td>
                                   <td><?php echo "Rp".number_format($harga_satuan,$jumlah_desimal,$pemisah_desimal,$pemisah_ribuan)."";?></td>
                                         <td><?php echo $row['asal_dana'];?></td>
                                		<td>
                                			<a href="index.php?page=e_masuk&id=<?php echo $row['id_masuk']; ?>" class="btn btn-primary"> <span                                              class="glyphicon glyphicon-edit"> </span></a> ||
                                			<a href="d_masuk.php?id=<?php echo $row['id_masuk'];?>" data-toggle="model" class="btn btn-danger">                                              <span class="glyphicon glyphicon-trash"> </span></a> ||
                                			<a href="#" class="btn btn-success"> <span class="glyphicon glyphicon-user"> </span></a>

                                		</td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </tbody>