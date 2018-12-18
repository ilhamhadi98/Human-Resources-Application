<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container"> 
	<form class="form-horizontal" action="add.php" method="post" name="form1">
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="nik">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" placeholder="Masukan Nik" name="username">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tanggal_transaksi">Password:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" placeholder="Masukan Password" name="password">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" name="Submit" value="Add">Submit</button>
            </div>
        </div>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO user(username,password) VALUES('$username','$password')");
		
		// Show message when user added
		echo "User berhasil di tambahkan.";
	}
	?>
</div>
</body>
</html>