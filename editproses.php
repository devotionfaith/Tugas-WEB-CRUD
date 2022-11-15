<?php
include "connect.php";
$id_jadwal = $_POST['id_jadwal'];
$mk = $_POST['mk'];
$jurusan = $_POST['jurusan'];
$id_lab = $_POST['lab'];
$id_waktu = $_POST['waktu'];

$query = mysqli_query($connect, "UPDATE jadwal SET mk='$mk', jurusan='$jurusan', id_lab='$id_lab', id_waktu='$id_waktu' WHERE jadwal.id_jadwal='$id_jadwal'");

if ($query) {
    header("location:jadwalPage.php");
} else {
    echo "Data Tidak berhasil diupdate <a href='editjadwalPage.php'>Kembali</a>";
    echo $id_jadwal;
}