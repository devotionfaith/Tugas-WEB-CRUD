<?php
include 'connect.php';

$lab = $_POST['lab'];

$sql    = "INSERT INTO lab VALUES(NULL, '$lab')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:labPage.php");
} else {
    header("location:labPage.php");
}