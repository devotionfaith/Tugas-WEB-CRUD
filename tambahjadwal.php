<?php
include 'connect.php';

$mk = $_POST['mk'];
$jurusan = $_POST['jurusan'];
$lab = $_POST['lab'];
$waktu = $_POST['waktu'];

$sql    = "INSERT INTO jadwal VALUES(NULL, '$mk', '$jurusan','$lab', '$waktu')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:jadwalPage.php");
} else {
    header("location:jadwalPage.php");
}