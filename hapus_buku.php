<?php
include 'Koneksi.php';

    $kodebuku = $_GET['kode'];
    if (!empty($kodebuku)) {
        $query = "DELETE FROM buku WHERE kode_buku = '$kodebuku'";
        $hasil = mysqli_query($Koneksi, $query);
    }
    
    if ($hasil) {
        echo "<script type='text/javascript'> alert('Data Berhasil Dihapus!'); document.location.href='data_buku.php'</script>";
    } else {
        echo "<script type='text/javascript'> alert('Data Gagal Dihapus!'); document.location.href='data_buku.php'</script>";
    }
?>