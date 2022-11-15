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
    <title>MAIN PAGE</title>
</head>

<body>
    <header>
        <nav>
            <h4> Rizky Gustiantoro | 123210097 </h4>
            <ul>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="main-container">
            <div class="wrapper">
                <h6>Selamat Datang di</h6>
                <h3>Praktikum Informatika</h3>
                <div class=" tombol">
                    <div class="tombol1 d-grid gap-2 d-md-block">
                        <a href="labPage.php"><button type="button" class="btn btn-outline-light">Lab</button></a>
                        <a href="timePage.php"><button type="button" class="btn btn-outline-light">Waktu</button></a>
                    </div>
                    <div class="tombol2 d-grid gap-2">
                        <a href="jadwalPage.php"><button type="button" class="btn btn-outline-light">Jadwal</button></a>
                    </div>
                </div>
                </dib>
            </div>
    </main>
</body>

</html>