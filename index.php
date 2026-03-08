<!DOCTYPE html>
<html>
<head>
<title>Pengaduan Restoran</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background: #f2f4f8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* kotak form */
.container{
    background: white;
    padding: 35px;
    width: 400px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

/* judul */
h2{
    text-align: center;
    margin-bottom: 25px;
}

/* input dan textarea */
input, select, textarea{
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

/* textarea */
textarea{
    height: 80px;
    resize: none;
}

/* button */
button{
    width: 100%;
    padding: 12px;
    background: #ff6b35;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 15px;
    cursor: pointer;
    margin-top: 15px;
}

button:hover{
    background: #e65a2c;
}

/* label */
label{
    font-weight: bold;
}

</style>

</head>

<body>

<div class="container">

<h2>Pengaduan Restoran</h2>

<form action="simpan.php" method="POST">

<label>Nama</label>
<input type="text" name="nama" required>

<br><br>

<label>Nomor Yang Bisa Digubungi </label>
<input type="text" name="kontak" required>

<br><br>

<label>Kategori</label>
<select name="kategori">

<option>Makanan</option>
<option>Pelayanan</option>
<option>Kebersihan</option>

</select>

<br><br>

<label>Deskripsi</label>

<textarea name="deskripsi"></textarea>

<button type="submit">Kirim Pengaduan</button>

</form>

</div>

</body>
</html>