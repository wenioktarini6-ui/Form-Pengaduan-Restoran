<?php

session_start();

if(!isset($_SESSION['login'])){
header("Location: login.php");
}

require "../db.php";
require "../class/Pengaduan.php";

$db=new Database();
$conn=$db->connect();

$pengaduan=new Pengaduan($conn);

$data=$pengaduan->tampil();

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard Admin</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f4f6f9;
    margin:0;
    padding:0;
}

/* header */

.header{
    background:#ff6b35;
    color:white;
    padding:20px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.header h2{
    margin:0;
}

/* logout */

.logout{
    text-decoration:none;
    background:white;
    color:#ff6b35;
    padding:8px 15px;
    border-radius:5px;
    font-weight:bold;
}

.logout:hover{
    background:#ffe0d3;
}

/* container */

.container{
    width:90%;
    margin:30px auto;
}

/* tabel */

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

th{
    background:#ff6b35;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

tr:hover{
    background:#f1f1f1;
}

/* tombol aksi */

.btn{
    padding:6px 12px;
    text-decoration:none;
    border-radius:4px;
    font-size:13px;
}

.selesai{
    background:#28a745;
    color:white;
}

.selesai:hover{
    background:#218838;
}

.hapus{
    background:#dc3545;
    color:white;
}

.hapus:hover{
    background:#c82333;
}

</style>

</head>

<body>

<div class="header">

<h2>Dashboard Admin</h2>

<a href="logout.php" class="logout">Logout</a>

</div>

<div class="container">

<table>

<tr>

<th>No</th>
<th>Nama</th>
<th>Kontak</th>
<th>Kategori</th>
<th>Deskripsi</th>
<th>Status</th>
<th>Aksi</th>

</tr>

<?php

$no=1;

while($row=$data->fetch_assoc()){

?>

<tr>

<td><?php echo $no++; ?></td>

<td><?php echo $row['nama']; ?></td>

<td><?php echo $row['kontak']; ?></td>

<td><?php echo $row['kategori']; ?></td>

<td><?php echo $row['deskripsi']; ?></td>

<td><?php echo $row['status']; ?></td>

<td>

<a class="btn selesai" href="ubah_status.php?id=<?=$row['id']?>&status=Selesai">
Selesai
</a>

<a class="btn hapus" href="hapus.php?id=<?=$row['id']?>">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>