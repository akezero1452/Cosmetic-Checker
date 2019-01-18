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
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
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
		.panel-widget .large {
			font-size: 17px; 
		}
		
	</style>
</head>
<body>
	  <?php
		include('userheader.php');
		//Check session
		
		
	?>
		<img src="image/header.png" style="width:100% ;"/>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">หน้าหลัก</li>
			</ol>
		</div><!--/.row-->
		
		
		
	
		<div class="row">
			<div class="col-lg-12">
				<h3 class="page-header">หน้าหลัก</h3>
				<br>
				
				<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-6 ">
					<div class="panel panel-teal panel-widget border-right"><a href="logo.php">
						<div class="row "><em class="fa fa-xl fa-image color-blue " style="font-size:80px;color:"></em>
							<div class="large">ตรวจสอบโลโก้เครื่องสำอาง</div>
							
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-6 ">
					<div class="panel panel-blue panel-widget border-right"><a href="no.php">
						<div class="row"><em class="fa fa-xl fa-search color-orange" style="font-size:80px;color:"></em>
							<div class="large">ตรวจสอบเลขผลิตภัณฑ์</div>
							
						</div>
					</div>
				</div>
				
			</div><!--/.row-->
		</div>
		
				
			</div>
				
		<!--/.row-->
		
		
		
		
			
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