<?php
include "koneksi.php";

$id = $_GET['id_pendapatan'];

$delete = mysqli_query($koneksi, "DELETE FROM laporanpendapatan WHERE id_pendapatan ='$id'");

if($delete) {
    echo "<script>alert('Data berhasil dihapus');</script>";
    header("refresh:0;url=dashboard.php");
} else {
    echo "<script>alert('Data tidak berhasil dihapus');</script>";
    header("refresh:0;url=dashboard.php");
}
?>
