<?php
session_start();
if (!isset($_SESSION['username'])){
    header("Location: login.php");
    }
    $id_pengaduan = $_GET['berikan_tanggapan'];
    $query = "SELECT*FROM pengaduan INNER JOIN masyarakat on pengaduan.nik=masyarakat.nik
    where pengaduan.id_pengaduan = '$id_pengaduan' ";
    $hasil = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <!-- Css Start -->
    <?php require_once('_css.php'); ?>

</head>

<body>
    <!-- Sidebar Start -->
    <?php require_once('_sidebar.php'); ?>
    <!-- Sidebar End -->

    <div id="main">



        


        

        <!-- Footer Start -->
        <?php require_once('_footer.php'); ?>
        <!-- Footer End -->
    </div>

    <!-- Js Start -->
    <?php require_once('_js.php'); ?>
</body>

</html>