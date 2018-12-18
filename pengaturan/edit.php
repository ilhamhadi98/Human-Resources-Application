<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE user SET username='$username',password='$password' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$username = $user_data['username'];
	$password = $user_data['password'];
}
?>
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
        
	<form class="form-horizontal" name="update_user" method="post" action="edit.php">
		
        <div class="form-group">
            <label class="control-label col-sm-2" for="username">Username:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo $username;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $password;?>">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <td><input type="hidden" class="btn btn-primary" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
            </div>
        </div>

	</form>
    </div>  
</body>
</html>