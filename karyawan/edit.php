<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
    
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$ttl=$_POST['ttl'];
    $telp=$_POST['telp'];
    $email=$_POST['email'];
    $status=$_POST['status'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE karyawan SET nama='$nama',alamat='$alamat',ttl='$ttl',telp='$telp',email='$email',status='$status' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM karyawan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nama = $user_data['nama'];
	$alamat = $user_data['alamat'];
    $ttl = $user_data['ttl'];
    $telp = $user_data['telp'];
    $email = $user_data['email'];
    $status = $user_data['status'];
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
            <label class="control-label col-sm-2" for="tanggal_transaksi">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="total">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="total">Tanggal Lahir:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="ttl" name="ttl" value="<?php echo $ttl;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="total">No Telp:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telp" name="telp" value="<?php echo $telp;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="total">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="status">Status:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" name="status" value="<?php echo $status;?>">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                <input class="btn btn-primary" type="submit" name="update" value="Update">
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
            </div>
        </div>
        
        <!--
        <table border="0" class="form-group">
            <tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>Tanggal Transaksi</td>
				<td><input type="date" name="ttl" value=<?php echo $ttl;?>></td>
			</tr>
			<tr> 
				<td>Telp</td>
				<td><input type="text" name="telp" value=<?php echo $telp;?>></td>
			</tr>
            <tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $email;?>></td>
			</tr>
            <tr> 
				<td>Status</td>
				<td><input type="text" name="status" value=<?php echo $status;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input class="btn btn-primary" type="submit" name="update" value="Update"></td>
			</tr>
            <tr>
                <td>
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
                </td>
            </tr>
		</table>
        -->
	</form>
    </div>  
</body>
</html>