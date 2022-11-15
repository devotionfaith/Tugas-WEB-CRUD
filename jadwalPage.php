<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location: loginPage.php?message=belum_login");
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
    <title>JADWAL PAGE</title>
</head>

<body>
    <header>
        <nav>
            <h4> Rizky Gustiantoro | 123210097 </h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="labPage.php">Lab</a></li>
                <li><a href="timePage.php">Waktu</a></li>
                <li><a class="nav-link active" href="jadwalPage.php">Jadwal</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container row">
            <div class="col-5">
                <table class="table table-striped mr-3">
                    <tr>
                        <td>No</td>
                        <td>MK Praktikum</td>
                        <td>Jurusan</td>
                        <td>Lab</td>
                        <td>Waktu</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    include('connect.php');

                    $sql    = "SELECT * FROM jadwal INNER JOIN lab on jadwal.id_lab = lab.id_lab INNER JOIN waktu ON jadwal.id_waktu = waktu.id_waktu";
                    $query    = mysqli_query($connect, $sql);
                    $query2 = mysqli_query($connect, "SELECT * FROM jadwal");
                    $query3 = mysqli_query($connect, "SELECT * FROM lab");
                    $query4 = mysqli_query($connect, "SELECT * FROM waktu");
                    $data2 = mysqli_fetch_array($query2);
                    $data3 = mysqli_fetch_array($query3);
                    $data4 = mysqli_fetch_array($query4);

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $data['id_jadwal']; ?></td>
                        <td><?= $data['mk']; ?></td>
                        <td><?= $data['jurusan']; ?></td>
                        <td><?= $data['lab']; ?></td>
                        <td><?= $data['waktu_mulai'];
                                echo "-";
                                echo  $data['waktu_selesai'] ?></td>
                        <td>
                            <a href="editjadwalPage.php?id_jadwal=<?= $data['id_jadwal']; ?>">Edit</a>
                            <a href="deletejadwal.php?id_jadwal=<?= $data['id_jadwal']; ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-1"></div>
            <div class="col-6">
                <h2>Input Jadwal Praktikum</h2>
                <h6>Buat Jadwal Praktikum sesuai yang diinginkan</h6>
                <br>



                <!-- INI INPUTNYA -->
                <form method="post" action="tambahjadwal.php">
                    <input type="text" class="form" id="mk" name="mk" placeholder="Masukkan MK Praktikum">
                    <div class="radio form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="IF">
                        <label class="form-check-label" for="inlineRadio1">IF</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="jurusan" id="jurusan" value="SI">
                        <label class="form-check-label" for="inlineRadio2">SI</label>
                    </div>
                    <select class="form-select form-select-sm mb-3" aria-label="Pilih Lab" name="lab">
                        <option selected>Pilih Lab </option>

                        <?php
                        while ($data3 = mysqli_fetch_array($query3)) {

                        ?>
                        <option value="<?= $data3['id_lab']; ?>"><?= $data3['lab']; ?> </option>
                        <?php } ?>
                    </select>
                    <select class="form-select form-select-sm mb-3" aria-label="Pilih Waktu" name="waktu">
                        <option selected>Pilih Waktu</option>
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
                            <input type="submit" class="btn btn-outline-light " value="SUBMIT"></input>
                            <input type="reset" class="btn btn-outline-light" value="RESET"></input>
                        </div>
                    </div>
                </form>
            </div>

    </main>
</body>

</html>