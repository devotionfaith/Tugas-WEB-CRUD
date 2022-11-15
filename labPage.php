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
    <title>LAB PAGE</title>
</head>

<body>
    <header>
        <nav>
            <h4> Rizky Gustiantoro | 123210097 </h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="nav-link active" href="labPage.php">Lab</a></li>
                <li><a href="timePage.php">Waktu</a></li>
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
                        <td>Lab</td>
                        <td>Action</td>
                    </tr>
                    <?php
                    include('connect.php');

                    $sql    = "SELECT * FROM lab";
                    $query    = mysqli_query($connect, $sql);

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?= $data['id_lab']; ?></td>
                        <td><?= $data['lab'];
                                ?></td>
                        <td>
                            <a href="deletelab.php?id_lab=<?= $data['id_lab']; ?>">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-1"></div>
            <div class="col-4">
                <h2>Input Data LAB</h2>
                <h6>Masukkan ruangan lab yang tersedia</h6>
                <br>
                <!-- INI INPUTNYA -->
                <form method="post" action="tambahlab.php">
                    <input type="text" class="form-control form-control-md mb-3" id="lab" name="lab"
                        placeholder="Masukkan Nama Lab">
                    <div class="submit">
                        <div class="tombol1 d-grid gap-2 d-md-block">
                            <div class="mt-5">
                                <input type="submit" class="btn btn-sm btn-outline-light w-100"></input>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

    </main>
</body>

</html>