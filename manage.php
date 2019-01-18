<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cosmetic Checker</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	
	<style>
		.active{
			font-family: 'Ekkamai Standard';
			
		}
		.profile-usertitle{
			font-family: 'Ekkamai Standard';
			
		}
		.nav{
			font-family: 'Ekkamai Standard';
		}
		.table{
			font-family: 'Ekkamai Standard';
			
		}
		.page-header{
			font-family: 'Ekkamai Standard';
		}
		.btn{
			font-family: 'Ekkamai Standard';
		}
	</style>
</head>
<body>
	  <?php
		include('adminheader.php');
		//Check session
		
		
	?>

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">จัดการข้อมูล</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">จัดการข้อมูล</h3>
			</div>
		</div><!--/.row-->
		
		
		
		<!-- Basic Examples -->
          <div class="col-14 col-md-2 col-lg-12">
               <div class="card">
                  <div class="card-header">
                    <button href="#addnew" data-toggle="modal" type="button" class="btn btn-sm btn-primary" > <span class="fa fa-plus"></span> เพิ่มข้อมูล</button>
                  </div><br>
                  <div class="card-body col-12">
                    <div class="table-responsive" style="width:95% ;">
                      <table class="table  table-bordered table-striped table-hover js-basic-example dataTable ">
                                    
                                        <tr>
                                           <th>ตราโลโก้</th>
											<th>ชื่อผลิตภัณฑ์</th>
											<th>ผูู้ผลิต</th>
											<th>สารอันตราย</th>
											<th>ประเภท</th>
											<th>Action</th>
                                        </tr>
                                   
									<tbody text="center">
									<?php
										include('conn.php');
										
										$query=mysqli_query($conn,"select * from llegalcosmetic");
										while($row=mysqli_fetch_array($query)){
											?>
											<tr><td><img src="<?php echo $row['cosimage']; ?>" class="img-thumbnail" style="width:100%" ></td>
									
												<td><?php echo $row['cosname']; ?></td>
												<td><?php echo $row['cosmanufactured']; ?></td>
												<td><?php echo $row['cosdetail']; ?></td>
												<td><?php echo $row['costype']; ?></td>
												<td>
													<a href="#edit<?php echo $row['cosid']; ?>" data-toggle="modal" class="btn btn-sm btn-warning"><span class="fa fa-edit"></span> Edit</a>|| 
													<a href="#del<?php echo $row['cosid']; ?>" data-toggle="modal" class="btn btn-sm btn-danger"><span class="fa fa-trash "></span> Delete</a>
													<?php include('button.php'); ?>
													
												</td>
											</tr>
											<?php
										}
									
									?>
									</tbody>
                    
                                </table>
                            </div>
                        </div>
                 
				 
				 
				 
				 
				 
                </div>
              </div>
	
			<?php include('add_modal.php'); ?>
			

		
		
			
		
	</div><!--/.row-->
	</div>	<!--/.main-->
	
	
   
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
		
</body>
</html>