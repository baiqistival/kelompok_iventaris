 <div class="row">
 <div class="col-lg-12">
 <a href="index.php?page=i_user" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Add New</a></span></a>
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
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Konf Pas</th>
                                         <th>Nama</th>
                                          <th>Level</th>
                                        <th width="150">Aksi</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                	<?php
                                	include"koneksi.php";
                                	$query=mysqli_query($koneksi,"SELECT * FROM user");
                                	while ($row=mysqli_fetch_array($query)) {
                                        
									}
                                	?>

                                	<tr>
                                		<td><?php echo $row['username'];?></td>
                                        <td><?php echo $row['password'];?></td>
                                        <td><?php echo $row['konf_pass'];?></td>
                                        <td><?php echo $row['nama'];?></td>
                                		<td><?php echo $row['level'];?></td>
                                		<td>
                                			<a href="index.php?page=e_user&id=<?php echo $row['id_user']; ?>" class="btn btn-primary"> <span                                              class="glyphicon glyphicon-edit"> </span></a> ||
                                			 <a href="d_user.php?id=<?php echo $row['id_user'];?>" data-toggle="model" class="btn btn-danger"> 		                                              <span class="glyphicon glyphicon-trash"> </span></a> ||
                                			<a href="#" class="btn btn-success"> <span class="glyphicon glyphicon-user"> </span></a>

                                		</td>
 </tr>
 <?php  ?>
 </tbody>
 </table>
 </div>
 </div>
 </div>