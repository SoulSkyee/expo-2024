<?php   
include "koneksi.php";

$id = $_GET['id_karya'];

$delete = mysqli_query($koneksi, "DELETE FROM karyaterjual WHERE id_karya ='$id'");

if($delete) {
    echo "<script>alert('Data berhasil dihapus');</script>";
    header("refresh:0;url=dashboard.php");
} else {
    echo "<script>alert('Data tidak berhasil dihapus');</script>";
    header("refresh:0;url=dashboard.php");
}
?>