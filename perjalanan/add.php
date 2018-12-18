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
            <label class="control-label col-sm-2" for="nik"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" placeholder="Masukan Nik" name="nik">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tanggal_transaksi"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="total"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tujuan" placeholder="Tujuan Perjalanan" name="tujuan">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="status"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nodin" placeholder="No Surat Dinas" name="nodin">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="Submit" value="Add">Submit</button>
            </div>
        </div>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
		$tujuan = $_POST['tujuan'];
        $nodin = $_POST['nodin'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO perjalanan(nik,nama,tujuan,nodin) VALUES('$nik','$nama','$tujuan','$nodin')");
		
		// Show message when user added
		echo "Perjalanan berhasil di tambahkan.";
	}
	?>
</div>
</body>
</html>