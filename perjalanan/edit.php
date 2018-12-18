<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$tujuan=$_POST['tujuan'];
    $nodin=$_POST['nodin'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE perjalanan SET nik='$nik',nama='$nama',tujuan='$tujuan',nodin='$nodin' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM perjalanan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nik = $user_data['nik'];
	$nama = $user_data['nama'];
	$tujuan = $user_data['tujuan'];
    $nodin = $user_data['nodin'];
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
            <label class="control-label col-sm-2" for="nik">Nik:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tujuan">Tujuan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tujuan" name="tujuan" value="<?php echo $tujuan;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nodin">Nodin:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nodin" name="nodin" value="<?php echo $nodin;?>">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <td><input type="hidden" class="btn btn-primary" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
            </div>
        </div>
        
        <!--
        <table border="0">
			<tr> 
				<td>Nik</td>
				<td><input type="text" name="nik" value=<?php echo $nik;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Tujuan</td>
				<td><input type="text" name="tujuan" value=<?php echo $tujuan;?>></td>
			</tr>
            <tr> 
				<td>Nodin</td>
				<td><input type="text" name="nodin" value=<?php echo $nodin;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
        -->
	</form>
    </div>  
</body>
</html>