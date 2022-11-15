<?php
include "connect.php";
$id_waktu = $_GET['id_waktu'];
$query = mysqli_query($connect, "DELETE FROM waktu WHERE id_waktu=$id_waktu");

if ($query) {
    header("location:timePage.php");
} else {
    header("location:timePage.php");
}