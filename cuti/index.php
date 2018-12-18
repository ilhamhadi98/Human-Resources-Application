<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM cuti ORDER BY id DESC");
?>
 
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
<head>

</head>
</head>
 
<body>
<div class="container">
    <a href="add.php" type="button" class="btn btn-primary">Tambah Data Cuti</a>
    <a href="index.php" type="button" class="btn btn-default">Refresh</a><br/><br/>
    <table class="table">
    <tr>
        <th>No</th>
        <th>Nik</th>
        <th>Nama</th>
        <th>Tanggal Awal</th>
        <th>Tanggal Akhir</th>
        <th>Alasan</th>
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nik']."</td>";
        echo "<td>".$user_data['nama']."</td>";    
        echo "<td>".$user_data['tglawal']."</td>";
        echo "<td>".$user_data['tglakhir']."</td>"; 
        echo "<td>".$user_data['alasan']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</div>    
</body>
</html>