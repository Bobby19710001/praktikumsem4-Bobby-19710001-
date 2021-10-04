<?php
//mengaktifkan session php
session_start();
// menghapus semua session
session_destroy();
echo "<script type='text/javascript'>alert('Logout Berhasil!'); location.href=\"login.php\";</script>";
// mengalihkan ke halaman login
?>