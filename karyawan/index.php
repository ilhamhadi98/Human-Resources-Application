<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM karyawan ORDER BY id DESC");
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
    <a href="add.php" type="button" class="btn btn-primary">Tambah Data Karyawan</a>
    <a href="index.php" type="button" class="btn btn-default">Refresh</a>
    <br/><br/>
    <table class="table">
    <tr>
        <th>Nik</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tanggal Lahir</th>
        <th>No Telp</th>
        <th>Email</th>
        <th>Status</th>
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";    
        echo "<td>".$user_data['ttl']."</td>";
        echo "<td>".$user_data['telp']."</td>"; 
        echo "<td>".$user_data['email']."</td>"; 
        echo "<td>".$user_data['status']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";        
    }
    ?>
    </table>
</div>    
</body>
</html>