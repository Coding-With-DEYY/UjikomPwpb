<?php
// Cara agar pesan error mysqli dapat ditangani try
mysqli_report(MYSQLI_REPORT_STRICT);

// Setting pesan jika koneksi database gagal
define("MYSQL_CONN_ERROR", "Koneksi ke Database Gagal");

$host = "localhost";
$username = "root";
$password = "";
$db_name = "ujikomrpl2022_4";

try {
    $db = mysqli_connect($host, $username, $password, $db_name);
} catch (mysqli_sql_exception $e) {
    echo "<h1>Database Gagal Terkoneksi</h1>";
    echo "<p>$e</p>";
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Proses validasi data
    // Variable untuk menyimpan hasil validasi data
    $error_input = 0;
    $error_msg = "<ul>";
    $msg_berhasil = "";


    // Cek nama harus berupa huruf dan spasi
    if (!preg_match("/^[a-zA-Z]*$/", $_POST['nama'])) {
        $error_input = 1;
        $error_msg .= "<li>Nama hanya huruf dan spasi</li>";
    }

    // Cek apakah NIK sudah terdaftar
    $data_nik = mysqli_query($db, "SELECT nik FROM pengguna WHERE nik = '" . $_POST['nik'] . "'");

    if (mysqli_num_rows($data_nik) != 0) {
        $error_input = 1;
        $error_msg = "<li>NIK Sudah Terdaftar</li>";
    }

    // Perintah input data user ke database
    if ($error_input == 0) {
        try{
            $nama = $_POST['nama'];
            $nik = $_POST['nik'];
            $foto = $_POST['foto'];

            $query = mysqli_query($db, "INSERT INTO pengguna VALUES ('$nik', '$nama', '$foto')");

            if ($query) {
                header("Location: home.php");
            }
        } catch (mysqli_sql_exception $e) {
            $error_input = 1;
            $error_msg .= "<li>Register Gagal >> $e</li>";
        }
    }

    // Ketika input data tidak valid atau input data ke database gagal
    if ($error_input == 1) {
        $error_msg .= "</ul>";
        header("Location: register.php ? error_msg = $error_msg");
    }
}
?>