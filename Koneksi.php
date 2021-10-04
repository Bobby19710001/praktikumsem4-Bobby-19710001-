<?php

$Koneksi = mysqli_connect("localhost","root","","praktikumwebsem4");

if(mysqli_connect_errno()) {
    echo "Koneksi Gagal : ". mysqli_connect_error();
}

?>