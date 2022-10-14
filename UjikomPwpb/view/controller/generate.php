<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$link = mysqli_connect($dbhost, $dbuser, $dbpass);

if (!$link) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}

$query = "CREATE DATABASE IF NOT EXISTS ujikomrpl2022_5";
$result = mysqli_query($link, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
} else {
    echo "Database <b>'ujikomrpl2022_5'</b> berhasil dibuat.... <br>";
}

$result = mysqli_select_db($link, "ujikomrpl2022_5");

if (!$result) {
    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
} else {
    echo "Database <b>'ujikomrpl2022_5'</b> berhasil dipilih.... <br>";
}

$query = "DROP TABLE IF EXISTS pengguna";
$hasil_query = mysqli_query($link, $query);

if (!$hasil_query) {
    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
} else {
    echo "Tabel <b>'pengguna'</b> berhasil dihapus.... <br>";
}

$query = "CREATE TABLE pengguna (nik varchar(16), nama_lengkap varchar(255), photo varchar(255), PRIMARY KEY (nik))";
$hasil_query = mysqli_query($link, $query);

if (!$hasil_query) {
    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
}