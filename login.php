<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hrm - Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="proseslogin.php" method="POST">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Enter Username" name="username" type="text" autofocus="" >
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="" >
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
                            <div>
                            <input class="btn btn-primary" type="submit" name="submit" value="&#187; Login &#171;">
                            </div>
                        </fieldset>
					</form>
                    <br/>
                    <br/>
                    <div class="col-sm-12">
				        <p class="back-link">Hrm by <a href="#">Telkom Akses</a></p>
                    </div>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    
</body>
</html>
