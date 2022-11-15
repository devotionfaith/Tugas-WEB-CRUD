<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location: login.php?message=belum_login");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>EDIT JADWAL PAGE</title>
</head>

<body>
    <header>
        <nav>
            <h4> Rizky Gustiantoro | 123210097 </h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="labPage.php">Lab</a></li>
                <li><a href="timePage.php">Waktu</a></li>
                <li><a href="jadwalPage.php">Jadwal</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>
    <?php
    include "connect.php";
    $id_jadwal = $_GET['id_jadwal'];
    $query1 = mysqli_query($connect, "SELECT * FROM jadwal WHERE id_jadwal=$id_jadwal");
    $query2 = mysqli_query($connect, "SELECT * FROM jadwal INNER JOIN lab on jadwal.id_lab = lab.id_lab INNER JOIN waktu ON jadwal.id_waktu = waktu.id_waktu WHERE id_jadwal =$id_jadwal");
    $query3 = mysqli_query($connect, "SELECT * FROM lab");
    $query4 = mysqli_query($connect, "SELECT * FROM waktu");
    $data1 = mysqli_fetch_array($query1);
    $data2 = mysqli_fetch_array($query2);
    $data3 = mysqli_fetch_array($query3);
    $data4 = mysqli_fetch_array($query4);

    ?>

    <center class="container">
        <div class="main-container">
            <h2> Ubah Jadwal Praktikum</h2>
            <h6>Buat jadwal praktikum sesuai keinginan</h6>
            <br>
            <form method="post" action="editproses.php">
                <input type="hidden" class="form" name="id_jadwal" value="<?= $data1['id_jadwal'] ?>" />
                <input type="text" class="form" id="mk" name="mk" value="<?= $data1['mk']; ?>" readonly>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="IF">
                    <label class="form-check-label" for="inlineRadio1">IF</label>
                </div>
                <div class="form-check form-check-inline mb-3">
                    <input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="SI">
                    <label class="form-check-label" for="inlineRadio2">SI</label>
                </div>
                <select class="form-select form-select-sm mb-3" aria-label="Pilih Lab" name="lab">
                    <option selected><?= $data2['lab']; ?> </option>

                    <?php
                    while ($data3 = mysqli_fetch_array($query3)) {

                    ?>
                    <option value="<?= $data3['id_lab']; ?>"><?= $data3['lab']; ?> </option>
                    <?php } ?>
                </select>
                <select class="form-select form-select-sm mb-3" aria-label="Pilih Waktu" name="waktu">
                    <option selected><?= $data2['waktu_mulai'];
                                        echo "-";
                                        echo $data2['waktu_selesai']; ?></option>
                    <?php
                    while ($data4 = mysqli_fetch_array($query4)) {

                    ?>
                    <option value="<?= $data4['id_waktu']; ?>"><?= $data4['waktu_mulai'];
                                                                    echo "-";
                                                                    echo $data4['waktu_selesai']; ?></option>
                    <?php } ?>
                </select>
                <div class="submit">
                    <div class="tombol1 d-grid gap-2 d-md-block">
                        <div class="mb-3">
                            <input type="submit" class="btn btn-sm btn-outline-light w-100" value="SUBMIT"></input>
                        </div>
                        <input type="reset" class="btn btn-sm btn-outline-light w-100" value="RESET"></input>

                    </div>
                </div>

            </form>
    </center>
</body>

</html>