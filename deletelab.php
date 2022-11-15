<?php
include "connect.php";
$id_lab = $_GET['id_lab'];
$query = mysqli_query($connect, "DELETE FROM lab WHERE id_lab=$id_lab");

if ($query) {
    header("location:labPage.php");
} else {
    header("location:index.php");
}