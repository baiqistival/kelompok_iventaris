 <div class="row">
 <div class="col-lg-12">
 <a href="index.php?page=i_keluar" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add New</a></span></a>
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
                                        <th>Kode Barang</th>
                                         <th>Kode Ruang</th>
                                        <th>Nama Barang</th>
                                        <th>Type</th>
                                        <th>Tgl Keluar</th>
                                        <th>Stok</th>
                                         <th>Lokasi</th>
                                          <th>Nama Pengeluar Barang</th>
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                	<?php
                                	include"koneksi.php";
                                	$query=mysqli_query($koneksi,"SELECT * FROM barang_keluar");
                                	while ($row=mysqli_fetch_array($query)) {
									
                                	?>

                                	<tr>
                                		<td><?php echo $row['kode_barang'];?></td>
                                        <td><?php echo $row['kode_ruang'];?></td>
                                		<td><?php echo $row['nama_barang'];?></td>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['tgl_keluar'];?></td>
                                		<td><?php echo $row['stok'];?></td>
                                        <td><?php echo $row['lokasi'];?></td>
                                        <td><?php echo $row['nama_pengeluar_barang'];?></td>
                                		<td>
                                			<a href="index.php?page=e_keluar&id=<?php echo $row['id_keluar']; ?>" class="btn btn-primary"> <span                                              class="glyphicon glyphicon-edit"> </span></a> ||
                                           <a href="d_keluar.php?id=<?php echo $row['id_keluar'];?>" data-toggle="model" class="btn btn-danger"> <span class="glyphicon glyphicon-trash"> </span></a> ||
                                			<a href="#" class="btn btn-success"> <span class="glyphicon glyphicon-user"> </span></a>

                                		</td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>