<?php
include('koneksi.php');
//get id
$id = $_GET['id'];
$query = "DELETE FROM pemesanan WHERE id = '$id'";
if($connection->query($query)) {
 header("location: tampil.php");
} else {
 echo "DATA GAGAL DIHAPUS!";
}
?>