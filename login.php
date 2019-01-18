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
		.panel{
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
		include('userheader.php');
		//Check session
		
		
	?>
	
	<br><br>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-2 col-md-4 col-md-offset-5">
			<div class="panel panel-primary">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form name="formlogin" method="post" action="">
						  <div class="form-group">
							<label for="off_pass">Username</label><input class="form-control" id="username" type="text" name="username" placeholder="username" required="required" type="username" autofocus>
						  <div class="form-group">
							<label for="off_pass">Password</label>
							<input class="form-control" id="password" type="password" name="password" placeholder="password" required="required" type="password" value="">
						  </div>
						
						<div class="text-center">
						<button class="btn btn-primary" type="submit" value="login" name="login">Login</button> 
						</div>
					</form>
						</div>
			</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>


<?php  
include("conn.php");  
  
if(isset($_POST['login']))  
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];
  
    $check_user="select * from user WHERE username='$username' AND password='$password'";  
  
    $run=mysqli_query($conn,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        $row = mysqli_fetch_array($run);
						
                      $_SESSION['userid'] = $row['userid'];
                      $_SESSION['user'] = $row['username'];
                      $_SESSION['type'] = $row['type'];

                      if($_SESSION['type']=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                      echo "<script>window.open('index2.php','_self')</script>";
			            $_SESSION['username'] = $username;


                      }

                      if ($_SESSION["type"]=="user"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                       echo "<script>window.open('#','_self')</script>";
			            $_SESSION['username'] = $username;

                      }

        
    }  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
    }  
}


?>
