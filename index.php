<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hrm - Dashboard</title>
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
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Telkom</span>Akses</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">0</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="picture/boy.png">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="picture/boy.png">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">0</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="picture/pict.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Ilhamhadi</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
            
			<li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            
            <li class="parent "><a data-toggle="collapse" href="#sub-item-1"><em class="fa fa-user">&nbsp;</em> Karyawan <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
				</a>
                <ul class="children collapse" id="sub-item-1">
					<li><a class="" href="karyawan.php">
						<span class="fa fa-link">&nbsp;</span> Daftar Karyawan
					</a></li>
					<li><a class="" href="rekruitmen.php">
						<span class="fa fa-briefcase">&nbsp;</span> Rekruitmen
					</a></li>
					<li><a class="" href="cuti.php">
						<span class="fa fa-send">&nbsp;</span> Cuti
					</a></li>
				</ul>
                
                <!--<a href="karyawan.php"><em class="fa fa-user">&nbsp;</em> Karyawan</a>--></li>
            
            <li><a href="penggajian.php"><em class="fa fa-euro">&nbsp;</em> Penggajian</a></li>
            
            <li><a href="perjalanan.php"><em class="fa fa-plane">&nbsp;</em> Perjalanan</a></li>
            
            <li><a href="pengaturan.php"><em class="fa fa-cog">&nbsp;</em> Pengaturan</a></li>
            
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-credit-card-alt color-blue"></em>
							<div class="large"><?php 
                                $user = "localhost";
                                $name = "root";
                                $pass = "";
                                $dbname = "hrm";

                                $con = mysqli_connect($user,$name,$pass,$dbname);

                                if (!$con){
                                    die ("Database Tidak Ada : " . mysqli_connect_error());
                                }
                                $kueri = mysqli_query($con, "SELECT * FROM penggajian");

                                $data = array ();
                                while (($row = mysqli_fetch_array($kueri)) != null){
                                    $data[] = $row;
                                }
                                    $cont = count ($data);
                                    echo "" . $cont;
                            ?></div>
							<div class="text-muted">payroll transactions</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-fighter-jet color-orange"></em>
							<div class="large"><?php 
                                $user = "localhost";
                                $name = "root";
                                $pass = "";
                                $dbname = "hrm";

                                $con = mysqli_connect($user,$name,$pass,$dbname);

                                if (!$con){
                                    die ("Database Tidak Ada : " . mysqli_connect_error());
                                }
                                $kueri = mysqli_query($con, "SELECT * FROM perjalanan");

                                $data = array ();
                                while (($row = mysqli_fetch_array($kueri)) != null){
                                    $data[] = $row;
                                }
                                    $cont = count ($data);
                                    echo "" . $cont;
                            ?></div>
							<div class="text-muted">Travel</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php 
                                $user = "localhost";
                                $name = "root";
                                $pass = "";
                                $dbname = "hrm";

                                $con = mysqli_connect($user,$name,$pass,$dbname);

                                if (!$con){
                                    die ("Database Tidak Ada : " . mysqli_connect_error());
                                }
                                $kueri = mysqli_query($con, "SELECT * FROM rekruitment");

                                $data = array ();
                                while (($row = mysqli_fetch_array($kueri)) != null){
                                    $data[] = $row;
                                }
                                    $cont = count ($data);
                                    echo "" . $cont;
                            ?></div>
							<div class="text-muted">recruitment</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-address-card color-red"></em>
							<div class="large"><?php 
                                $user = "localhost";
                                $name = "root";
                                $pass = "";
                                $dbname = "hrm";

                                $con = mysqli_connect($user,$name,$pass,$dbname);

                                if (!$con){
                                    die ("Database Tidak Ada : " . mysqli_connect_error());
                                }
                                $kueri = mysqli_query($con, "SELECT * FROM karyawan");

                                $data = array ();
                                while (($row = mysqli_fetch_array($kueri)) != null){
                                    $data[] = $row;
                                }
                                    $cont = count ($data);
                                    echo "" . $cont;
                            ?></div>
							<div class="text-muted">employee</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<!--
        <div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Calendar
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			<div class="col-sm-12">
				<p class="back-link">Hrm by <a href="#">Telkom Akses</a></p>
			</div>
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
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>