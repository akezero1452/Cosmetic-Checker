<?php
	include('conn.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from llegalcosmetic where cosid='$id'");
	header('location:manage.php');

?>