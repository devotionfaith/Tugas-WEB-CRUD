<?php
include 'connect.php';

$username        = $_POST['username'];
$password        = $_POST['password'];

$sql    = "INSERT INTO user VALUES(NULL, '$username', '$password')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:loginPage.php?message=berhasil");
} else {
    header("location:RegisterPage.php");
}