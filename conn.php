<?php
	$conn = mysqli_connect("202.28.94.32","2561_583020410-3","2561_583020410-3","2561_583020410-3");
	mysqli_set_charset($conn,'utf8');
	if (!$conn) {
	die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้: " . mysqli_connect_error());
}
 
?>
