<?php

require "../db.php";
require "../class/Pengaduan.php";

$db=new Database();
$conn=$db->connect();

$pengaduan=new Pengaduan($conn);

$id=$_GET['id'];
$status=$_GET['status'];

$pengaduan->ubahStatus($id,$status);

header("Location: dashboard.php");

?>