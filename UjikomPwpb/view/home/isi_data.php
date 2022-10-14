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
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" name="tanggal">
                            </div>
                            <div class="form-group">
                                <label for="jam">Jam</label>
                                <input type="time" class="form-control" id="jam" name="jam">
                            </div>
                            <div class="form-group">
                                <label for="lokasi">Lokasi yang dikunjungi</label>
                                <input type="text" class="form-control" id="lokasi" name="lokasi">
                            </div>
                            <div class="form-group">
                                <label for="suhu">Suhu Tubuh</label>
                                <input type="number" class="form-control" id="suhu" name="suhu">
                            </div>
                            <input style="margin-left: 760px;" type="submit" class="btn btn-success" name="submit" value="kirim">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
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