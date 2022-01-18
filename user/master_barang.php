 <div class="row">
 <div class="col-lg-12">
 <a href="index.php?page=i_master_barang" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add New</a></span></a>
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
                                        <th>Kode Registrasi</th>
                                        <th>Nama Barang</th>
                                        <th>Type</th>
                                         <th>No Sertifikat</th>
 
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                	<?php
                                	include"koneksi.php";
                                	$query=mysqli_query($koneksi,"SELECT * FROM master_barang");
                                	while ($row=mysqli_fetch_array($query)) {
									
                                	?>

                                	<tr>
                                		<td><?php echo $row['kode_barang'];?></td>
                                        <td><?php echo $row['kode_registrasi'];?></td>
                                		<td><?php echo $row['nama_barang'];?></td>
                                        <td><?php echo $row['type'];?></td>
                                        <td><?php echo $row['no_sertifikat'];?></td>
                                		<td>
                                			<a href="index.php?page=e_master_barang&id=<?php echo $row['id_master']; ?>" class="btn btn-primary"> <span                                              class="glyphicon glyphicon-edit"> </span></a> ||
                                		    <a href="d_master_barang.php?id=<?php echo $row['id_master'];?>" data-toggle="model" class="btn 	                                               btn-danger"> <span class="glyphicon glyphicon-trash"> </span></a> ||
                                			<a href="#" class="btn btn-success"> <span class="glyphicon glyphicon-user"> </span></a>

                                		</td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>