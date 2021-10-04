<?php
include 'Koneksi.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['Username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($Koneksi, "select * from user where username = '$username' AND password = '$password'");

    if (mysqli_num_rows($query) !== 0) {
        $get = mysqli_fetch_array($query);
        $level = $get['level'];
        $nama = $get['nm_user'];
        $_SESSION['nama'] = $nama;
        $_SESSION['login_in'] = $username;

        if($level == "Admin"){
            echo "<script type='text/javascript'>alert('Selamat Datang $nama!'); location.href=\"home.php\";</script>";
        }
        else if ($level == "User"){
            echo "<script type='text/javascript'>alert('Selamat Datang $nama!'); location.href=\"home_user.php\";</script>";
        }

    }

    else{
        echo "<script type='text/javascript'>alert('Login Gagal, username atau password anda salah $nama!'); location.href=\"login.php\";</script>";
    }
}

else {
    echo "<script type='text/javascript'>alert('Login Gagal, username atau password anda salah $nama!'); location.href=\"login.php\";</script>";   
}
?>