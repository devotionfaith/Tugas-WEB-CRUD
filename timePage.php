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
    <title>TIME PAGE</title>
</head>

<body>
    <header>
        <nav>
            <h4> Rizky Gustiantoro | 123210097 </h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="labPage.php">Lab</a></li>
                <li><a class="nav-link active" href="timePage.php">Waktu</a></li>
                <li><a href="jadwalPage.php">Jadwal</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="container row">
            <div class="col-5">
                <table class="table table-bordered">
                    <tr>
                        <td>No</td>
                        <td>Waktu</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    include('connect.php');

                    $sql    = "SELECT * FROM waktu";
                    $query    = mysqli_query($connect, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $data['id_waktu']; ?></td>
                        <td><?= $data['waktu_mulai'];
                                echo "-";
                                echo $data['waktu_selesai'];
                                ?></td>
                        <td>
                            <a href="deletewaktu.php?id_waktu=<?= $data['id_waktu']; ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-1"></div>
            <div class="col-4">
                <div class="wrapper">
                    <h2>Input Waktu</h2>
                    <h6>Masukkan Waktu Pelaksanaan Praktikum</h6>
                </div>
                <br>
                <!-- INI INPUTNYA -->
                <form method="post" action="tambahwaktu.php">
                    <div class="wrapper-time">
                        <div class="time">
                            <label for="mulai">Mulai</label>
                            <input type="time" class="form-control form-control-md mb-3" id="mulai" name="mulai">
                        </div>
                        <div class="time">
                            <label for="selesai">Selesai</label>
                            <input type="time" class="form-control form-control-md mb-3" id="selesai" name="selesai">
                        </div>
                    </div>
                    <div class="submit">
                        <div class="tombol1 d-grid gap-2 d-md-block">
                            <div class="mt-3">
                                <input type="submit" class="btn btn-sm btn-outline-light w-100"></input>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

    </main>
</body>

</html>