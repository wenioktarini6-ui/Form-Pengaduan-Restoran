<?php

require "db.php";
require "class/Pengaduan.php";

$db = new Database();
$conn = $db->connect();

$pengaduan = new Pengaduan($conn);

$nama=$_POST['nama'];
$kontak=$_POST['kontak'];
$kategori=$_POST['kategori'];
$deskripsi=$_POST['deskripsi'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Hasil Pengaduan</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background: #f4f6f9;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* kotak pesan */

.box{
    background: white;
    padding: 40px;
    width: 350px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

/* pesan sukses */

.success{
    color: green;
    font-size: 18px;
    margin-bottom: 20px;
}

/* pesan gagal */

.error{
    color: red;
    font-size: 18px;
    margin-bottom: 20px;
}

/* tombol */

a{
    text-decoration: none;
    background: #ff6b35;
    color: white;
    padding: 10px 20px;
    border-radius: 6px;
}

a:hover{
    background: #e85a2b;
}

</style>

</head>

<body>

<div class="box">

<?php

if($pengaduan->simpan($nama,$kontak,$kategori,$deskripsi)){

echo "<div class='success'>Pengaduan berhasil dikirim</div>";

}else{

echo "<div class='error'>Pengaduan gagal</div>";

}

?>

<a href="index.php">Kembali ke Form</a>

</div>

</body>
</html>