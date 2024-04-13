<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['name']; ?></h1>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <p>Waktu Login: <?php echo $_SESSION['login_time']; ?></p>
</body>
</html>
