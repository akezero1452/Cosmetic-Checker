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
		include('adminheader.php');
		//Check session
		
		
	?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">ตรวจสอบโลโก้เครื่องสำอาง</li>
			</ol>
		</div><!--/.row-->
	
		<center>
		<br><br><?PHP
echo "Show ";
//exec("\"C:\\MATLAB\\MATLAB\\R2015a\\bin\\matlab.exe\" -nodisplay -nosplash -nodesktop -r \"run('C:\\MATLAB\\cream8.m')\"");
 
 //exec("\"C:\\MATLAB\\MATLAB\\R2015a\\bin\\matlab.exe\" -nodisplay -nosplash -nodesktop -r \"run('C:\\MATLAB\\cream2.m')\"");
$cmd=("\"C:\\MATLAB\\MATLAB\\R2015a\\bin\\matlab.exe\" -nodisplay -nosplash -nodesktop -r \"run('C:\\MATLAB\\MATLAB\\R2015a\\bin\\test\\cream3.m')\"");
 $last_line = exec($cmd, $output, $retval);
if ($retval == 0){
	// Read from CSV file which MATLAB has created
	
	$lines = file('cream3.txt');
	echo '<p>Results:<br>';
	
	foreach($lines as $line)
	{
		echo $line.'<br>';
	}
	echo '</p>';
} else {
	// When command failed
	echo '<p>Failed</p>';
}
 $fp = fopen('C:\MATLAB\MATLAB\R2015a\bin\test\cream3.txt', 'r');
 $outputfromml = fread($fp, 1000);
echo $outputfromml;
fclose($fp);
 
 
// 5 Seconds delay
sleep(5);
//Print Saved results from file
$c = file_get_contents('C:\\MATLAB\\result.txt');
echo $c;

?>


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
