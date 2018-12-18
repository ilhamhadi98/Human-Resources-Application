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
    $lulusan=$_POST['lulusan'];
    $telp=$_POST['telp'];
    $email=$_POST['email'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE rekruitment SET id='$id',nama='$nama',alamat='$alamat',ttl='$ttl',lulusan='$lulusan',telp='$telp',email='$email' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM rekruitment WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['id'];
	$nama = $user_data['nama'];
	$alamat = $user_data['alamat'];
    $ttl = $user_data['ttl'];
    $lulusan = $user_data['lulusan'];
    $telp = $user_data['telp'];
    $email = $user_data['email'];
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
            <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="ttl">Tanggal Lahir:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="ttl" name="ttl" value="<?php echo $ttl;?>">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="total">Lulusan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="lulusan" name="lulusan" value="<?php echo $lulusan;?>">
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
				<td>Tanggal Transaksi</td>
				<td><input type="date" name="tanggal_transaksi" value=<?php echo $tanggal_transaksi;?>></td>
			</tr>
			<tr> 
				<td>Total</td>
				<td><input type="text" name="total" value=<?php echo $total;?>></td>
			</tr>
            <tr> 
				<td>Status</td>
				<td><input type="text" name="status" value=<?php echo $status;?>></td>
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