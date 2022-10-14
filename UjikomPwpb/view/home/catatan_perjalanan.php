<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home | Peduli Diri</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        ul.nav li.nav-item a.text_deg:hover {
            color: #000 !important;
        }
    </style>
</head>
<body>
<header class="container-fluid mt-5 ml-5 pt-3 pl-5">
    <div class="row">
        <div class="col-2">
            <img src="../asset/image/dummy-200x200.png" alt="..." class="img-thumbnail">
            <h4 style="text-align: center;">Nama Pengguna</h4>
        </div>
        <div class="col-10">
            <h1>Peduli Diri</h1>
            <p>Catatan Perjalanan</p>
            <ul class="nav">
                <li class="nav-item ml-0 pl-0">
                    <a style="display: inline;" class="nav-link text_deg" href="home.php">Home</a>
                </li>
                <li class="nav-item ml-0 pl-0">
                    <span>|</span> <a style="display: inline;" class="nav-link text_deg" href="catatan_perjalanan.php">Catatan Perjalanan </a>
                </li>
                <li class="nav-item ml-0 pl-0">
                    <span>|</span> <a style="display: inline;" class="nav-link text_deg" href="isi_data.php">Isi Data</a>
                </li>
                <li class="nav-item ml-0 pl-0">
                    <span>|</span> <a style="display: inline;" class="nav-link text_deg" href="pengaturan.php">Edit Profile</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<article class="container-fluid pb-5 mb-5">
    <main class="mt-5 pt-3">
        <div class="border border-dark" style="margin-top: 25px; margin-left: 15%; margin-right: 15%;">
            <div style="margin: 10px;">
                <p style="display: inline-block;">
                    <b>Urutkan berdasarkan &nbsp;</b>
                </p>
                <div class="dropdown" style="display: inline;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tanggal
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Tanggal</a>
                        <a class="dropdown-item" href="#">Waktu</a>
                        <a class="dropdown-item" href="#">Lokasi</a>
                        <a class="dropdown-item" href="#">Suhu</a>
                    </div>
                </div>
                <button class="btn btn-info">
                    Urutkan
                </button>
            </div>
        </div>


        <div class="border border-dark" style="margin-top: 25px; margin-left: 15%; margin-right: 15%;">
            <table class="table" style="margin-top: 25px; margin-left: 5%; margin-right: 5%; margin-bottom: 25px; width: 90%;">
              <thead class="thead-dark">
                <tr style="text-align: center;">
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Suhu</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
              </tbody>
            </table>
        <br>
        <a href="isi_data.php" class="btn btn-warning" style="margin-left: 650px; margin-bottom: 25px; color: white;">Isi Catatan Perjalanan Anda</a>
        </div>
    </main>
</article>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>