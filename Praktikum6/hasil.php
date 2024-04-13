<!DOCTYPE html>
<html>
<head>
    <title>Hasil Login</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['nim']) && isset($_SESSION['jk']) && isset($_SESSION['login_time'])) {
        echo "<h1>Selamat datang, ".$_SESSION['name']."</h1>";
        echo "<p>Nama: ".$_SESSION['name']."</p>";
        echo "<p>Email: ".$_SESSION['email']."</p>";
        echo "<p>NIM: ".$_SESSION['nim']."</p>";
        echo "<p>Jenis Kelamin: ".$_SESSION['jk']."</p>";
        echo "<p>Waktu Login: ".$_SESSION['login_time']."</p>";
    } else {
        echo "Data tidak ditemukan.";
    }
    ?>
</body>
</html>
