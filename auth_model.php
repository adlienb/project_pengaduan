<?php
require_once('_koneksi.php');
if (isset($_POST['register'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $query = "INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp')";
    mysqli_query($conn, $query);
    header("Location: login.php");
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];
    if ($level == "rakyat") {
        //login sebagai Rakyat -> Akses tabel masyarakat
        $query = "SELECT * FROM masyarakat where username='$username'"; //mencari
        $hasil = mysqli_query($conn, $query);
        $masyarakat = mysqli_fetch_array($hasil);
        //mengecek apakah password yang diinputkan sama dengan password pd database
        if ($password == $masyarakat['password']) {
            //membuat variabel session berdasarkan data masyarakat
            session_start();
            $_SESSION['username'] = $masyarakat['username'];
            $_SESSION['nama'] = $masyarakat['nama'];
            $_SESSION['nik'] = $masyarakat['nik'];
            $_SESSION['telp'] = $masyarakat['telp'];
            $_SESSION['level'] = "Rakyat";
            header("Location: index.php");
        } else {
            header("Location: login.php");
        }
    } else {
        //login sebagai Rakyat -> Akses tabel petugas
        $query = "SELECT * FROM petugas where username='$username'"; //mencari masyarakat
        $hasil = mysqli_query($conn, $query);
        $petugas = mysqli_fetch_array($hasil);
        //mengecek apakah password yang diinputkan sama dengan password pd database
        if ($password == $petugas['password']) {
            //membuat variabel session berdasarkan data petugas
            session_start();
            $_SESSION['username'] = $petugas['username'];
            $_SESSION['nama'] = $petugas['nama_petugas'];
            $_SESSION['telp'] = $petugas['telp'];
            $_SESSION['level'] = $petugas['level'];
            header("Location: index.php");
        } else {
            echo "Admin salah";
        }
    }
}
if (isset($_POST['update'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $telp = $_POST['telp'];
    $query = "UPDATE masyarakat SET
    nama = '$nama',
    username = '$username',
    telp = '$telp'
    WHERE nik = '$nik'
    ";
    $hasil = mysqli_query($conn, $query);
    session_start();
    $_SESSION['nama'] = $nama;
    $_SESSION['username'] = $username;
    $_SESSION['telp'] = $telp;
    header("Location: profil.php");
}
?>