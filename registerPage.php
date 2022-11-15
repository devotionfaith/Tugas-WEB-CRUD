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
    <title>REGISTER PAGE</title>
</head>

<body>
    <header>
        <nav>
            <h4> Rizky Gustiantoro | 123210097 </h4>
        </nav>
    </header>


    <center class="container">
        <div class="main-container">
            <h2>Register Page</h2>
            <h6>Silahkan buat akun terlebih dahulu</h6>
            <br>
            <div class="wrapper">

                <form method="post" action="register_proses.php">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Password"></input>
                    </div>
                    <div class="submit">
                        <div class="tombol1 d-grid gap-2 d-md-block">
                            <div class="mt-5">
                                <input type="submit" class="btn btn-sm btn-outline-light w-100" value="DAFTAR"></input>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
    </center>
</body>

</html>