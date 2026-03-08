<?php
session_start();

require "../db.php";
require "../class/Admin.php";

$db = new Database();
$conn = $db->connect();

$admin = new Admin($conn);

$username=$_POST['username'];
$password=$_POST['password'];

if($admin->login($username,$password)){

$_SESSION['login']=true;

header("Location: dashboard.php");

}else{

echo "Login gagal";

}

?>