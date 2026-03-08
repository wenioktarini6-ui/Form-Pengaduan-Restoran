<?php

require "../db.php";
require "../class/Pengaduan.php";

$db=new Database();
$conn=$db->connect();

$pengaduan=new Pengaduan($conn);

$id=$_GET['id'];

$pengaduan->hapus($id);

header("Location: dashboard.php");

?>