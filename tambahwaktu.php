<?php
include 'connect.php';

$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];

$sql    = "INSERT INTO waktu VALUES(NULL, '$mulai', '$selesai' )";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:timePage.php");
} else {
    header("location:timePage.php");
}