<?php
session_start();

if(isset($_POST['name']) && isset($_POST['email'])) {
    // Memeriksa apakah nama dan email telah diisi
    if(!empty($_POST['name']) && !empty($_POST['email'])) {
        // Simpan data login ke dalam sesi
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['login_time'] = date("Y-m-d H:i:s"); // Waktu login saat ini
        
        // Redirect ke halaman selamat datang
        header("Location:welcome.php");
        exit();
    } else {
        // Jika nama atau email kosong, redirect ke halaman error
        header("Location:eror.php");
        exit();
    }
} else {
    // Jika tidak ada data yang dikirimkan, redirect ke halaman error
    header("Location:eror.php");
    exit();
}
?>
