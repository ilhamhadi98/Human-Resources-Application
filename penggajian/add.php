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
            <label class="control-label col-sm-2" for="nik">Nik:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" placeholder="Masukan NIK" name="nik">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tanggal_transaksi">Tanggal Transaksi:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal_transaksi" placeholder="Tanggal" name="tanggal_transaksi">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="total">Total:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="total" placeholder="Total Gaji Bersih" name="total">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="status">Status:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" placeholder="Status Transaksi" name="status">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="Submit" value="Add">Submit</button>
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
	<br/><br/>
            </div>
        </div>
        
        <!--
		<table width="45%" border="0">
			<tr> 
				<td>Nik</td>
				<td><input type="text" name="nik"></td>
			</tr>
			<tr> 
				<td>Tanggal Transaksi "tahun/bulan/hari"</td>
				<td><input type="date" name="tanggal_transaksi"></td>
			</tr>
			<tr> 
				<td>Total</td>
				<td><input type="text" name="total"></td>
			</tr>
            <tr> 
				<td>Status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
        -->
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nik = $_POST['nik'];
		$tanggal_transaksi = $_POST['tanggal_transaksi'];
		$total = $_POST['total'];
        $status = $_POST['status'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO penggajian(nik,tanggal_transaksi,total,status) VALUES('$nik','$tanggal_transaksi','$total','$status')");
		
		// Show message when user added
		echo "Transaksi berhasil di tambahkan. <a href='index.php'>Lihat Transaksi</a>";
	}
	?>
</div>
</body>
</html>