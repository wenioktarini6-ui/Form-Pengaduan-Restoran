<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#ff6b35,#ff9a5a);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* kotak login */
.login-box{
    background: white;
    padding: 35px;
    width: 350px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

/* judul */
h2{
    text-align: center;
    margin-bottom: 25px;
}

/* label */
label{
    font-weight: bold;
    font-size: 14px;
}

/* input */
input{
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 14px;
}

/* tombol */
button{
    width: 100%;
    padding: 12px;
    background: #ff6b35;
    border: none;
    color: white;
    font-size: 15px;
    border-radius: 6px;
    cursor: pointer;
}

button:hover{
    background: #e85a2b;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Login Admin</h2>

<form action="proses_login.php" method="POST">

<label>Username</label>
<input type="text" name="username" required>

<br><br>

<label>Password</label>
<input type="password" name="password" required>

<br><br>

<button type="submit">Login</button>

</form>

</div>

</body>
</html>