
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.php"><span>COSMETIC</span>CHECKER</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	
	
	
	
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php if(isset ($_SESSION['username'])){ ?>
             <a class="nav-link" href="#">&nbsp; <?php echo $_SESSION['username']; ?></a>
     <?php } ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li class="active"><a href="index2.php"><em class="fa fa-dashboard">&nbsp;</em> หน้าหลัก</a></li>
			<li><a href="logo2.php"><em class="fa fa-image">&nbsp;</em>ตรวจสอบโลโก้ผลิตภัณฑ์</a></li>
			<li><a href="no2.php"><em class="fa fa-search">&nbsp;</em>ตรวจสอบเลขผลิตภัณฑ์</a></li>
			<li><a href="manage.php"><em class="fa fa-folder-open-o">&nbsp;</em>จัดการข้อมูล</a></li>
			<li><a href="index.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->