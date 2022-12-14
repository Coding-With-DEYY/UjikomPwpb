<?php
if (isset($_GET["pesan"])) {
    $pesan = $_GET["pesan"];
}

// cek apakah form telah disubmit
if (isset($_POST["submit"])) {
    // Form telah disubmit, proses data

    // Ambil nilai form
    $nik = htmlentities(strip_tags(trim($_POST["nik"])));
    $nama_lengkap = htmlentities(strip_tags(trim($_POST["nama_lengkap"])));

    // Siapkan variable untuk menampung pesan error
    $pesan_error = "";

    // Cek apakah "nik" sudah diisi atau tidak
    if (empty($nik)) {
        $pesan_error .= "NIK belum diisi <br>";
    }

    // Cek apakah "nama_lengkap" sudah diisi atau tidak
    if (empty($nama_lengkap)) {
        $pesan_error .= "Nama Anda belum diisi <br>";
    }

    // buat koneksi ke mysql dari file connection.php
    include ("connection.php");
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login | Peduli Diri</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        main.main_deg {
            padding: 45px;
        }

        .h3_deg {
            text-align: center;
            font-family: sans-serif;
        }

        a.text_link {
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <main class="main_deg ml-5 mr-5">
        <div class="card">
            <div class="card-body">
                <h3 class="h3_deg">Log In</h3>
                <form action="../controller/UserController.php" method="post">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" class="form-control" id="nik" name="nik">
                        <small id="nik" class="form-text text-muted">Nomor NIK tidak boleh kurang atau lebih dari 16 digit.</small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda">
                    </div>
                    <a href="register.php" class="btn btn-secondary">Register</a>
                    <input type="submit" name="submit" class="btn btn-success" value="Login">
                </form>
            </div>
        </div>
    </main>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>