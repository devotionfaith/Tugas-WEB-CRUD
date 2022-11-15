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
    <title>LOGIN PAGE</title>
</head>
<?php
if (isset($_GET['message'])) {
    if ($_GET['message'] == "gagal") {
        $alert = "Login gagal. Username atau password salah.";
    } elseif ($_GET['message'] == "logout") {
        $alert = "Anda telah berhasil logout.";
    } elseif ($_GET['message'] == "belum_login") {
        $alert = "Anda harus login terlebih dahulu untuk mengakses halaman.";
    } elseif ($_GET['message'] == "berhasil") {
        $alert = " ";
    }
}
?>

<body>
    <header>
        <nav>
            <h4> Rizky Gustiantoro | 123210097 </h4>
        </nav>
    </header>


    <center class="container">
        <div class="main-container">
            <h2> Login Page</h2>
            <h6 class="alert"><?= $alert ?></h6>

            <form method="POST" action="login_proses.php">
                <div class="mb-3 mt-1">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Password"></input>
                </div>
                <input type="submit" class="btn btn-success mb-2" name="" value="Login">
                </input>
            </form>
            <div style="font-size:15px;">Belum punya akun?<a href="registerPage.php"> Daftar di sini</a>
            </div>

        </div>
    </center>
</body>

</html>