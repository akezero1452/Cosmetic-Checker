<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$cosname=$_POST['cosname'];
	$cosmanufactured=$_POST['cosmanufactured'];
	$cosdetail=$_POST['cosdetail'];
	$costype=$_POST['costype'];
	
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$newFilename);
	$location="upload/".$newFilename;
	
	
	
	mysqli_query($conn,"update llegalcosmetic set cosname='$cosname', cosmanufactured='$cosmanufactured', cosdetail='$cosdetail', costype='$costype', cosimage='$location' where cosid='$id'");
	header('location:manage.php');

	

?>