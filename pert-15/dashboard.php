<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h2>Dashboard</h2>
<br/>
<!– cek pesan notifikasi–>
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
    echo"Login gagal!user name dan password salah!";
    }else if($_GET['pesan']=="logout"){
    echo"Anda telah berhasil logout";
    }else if($_GET['pesan']=="belum_login"){
    echo"Anda harus login untuk mengakses halaman admin";
    }
}
?>
<br/>
<h3>Halaman ini tampil karena anda berhasil login</h3>
    <a href="logout.php">logout</a>
</body>
</html>