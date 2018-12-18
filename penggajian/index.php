<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM penggajian ORDER BY id DESC");
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
    <a href="add.php" type="button" class="btn btn-primary">Tambah Transaksi Baru</a>
    <a href="index.php" type="button" class="btn btn-default">Refresh</a>
    <br/><br/>
    <table class="table">
    <tr>
        <th>ID Transaksi</th>
        <th>Nik</th>
        <th>Tanggal Transaksi</th>
        <th>Total</th>
        <th>Status</th>
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nik']."</td>";
        echo "<td>".$user_data['tanggal_transaksi']."</td>";    
        echo "<td>".$user_data['total']."</td>";
        echo "<td>".$user_data['status']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>    
</body>
</html>