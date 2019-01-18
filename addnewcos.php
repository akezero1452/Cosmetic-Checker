<?php
	include('conn.php');
	
	$cosname=$_POST['cosname'];
	$cosmanufactured=$_POST['cosmanufactured'];
	$cosdetail=$_POST['cosdetail'];
	$costype=$_POST['costype'];

	    
	$fileinfo=PATHINFO($_FILES["image"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"upload/".$newFilename);
	$location="upload/".$newFilename;
 
	mysqli_query($conn,"insert into llegalcosmetic (cosname, cosmanufactured, cosdetail, costype, cosimage) values ('$cosname', '$cosmanufactured', '$cosdetail', '$costype', '$location')");
	header('location:manage.php');
?>
