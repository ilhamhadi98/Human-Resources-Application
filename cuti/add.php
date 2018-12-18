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
                    <input type="text" class="form-control" id="nik" placeholder="Masukan Nik" name="nik">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="nama">Nama:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tglawal">Tanggal Awal:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglawal" placeholder="Tanggal Awal Cuti" name="tglawal">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="tglakhir">Tangggal Akhir:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tglakhir" placeholder="Tanggal Akhir Cuti" name="tglakhir">
                </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="alasan">Alasan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alasan" placeholder="alasan" name="alasan">
                </div>
        </div>
        <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" name="Submit" value="Add">Submit</button>
                <a href="index.php" type="button" class="btn btn-default">Kembali</a>
            </div>
        </div>

	</form>
	
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nik = $_POST['nik'];
		$nama = $_POST['nama'];
        $tglawal = $_POST['tglawal'];
        $tglakhir = $_POST['tglakhir'];
        $alasan = $_POST['alasan'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO cuti(nik,nama,tglawal,tglakhir,alasan) VALUES('$nik','$nama','$tglawal','$tglakhir','$alasan')");
		
		// Show message when user added
		echo "<center>Data berhasil di tambahkan. <a href='index.php'>Lihat Daftar</a><center>";
	}
	?>
</div>
</body>
</html>