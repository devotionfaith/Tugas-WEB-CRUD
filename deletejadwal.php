<?php
include "connect.php";
$id_jadwal = $_GET['id_jadwal'];
$query = mysqli_query($connect, "DELETE FROM jadwal WHERE id_jadwal=$id_jadwal");

if ($query) {
    header("location:jadwalPage.php");
} else {
    header("location:jadwalPage.php");
}