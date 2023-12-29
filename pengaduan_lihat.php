<?php
require_once('_koneksi.php');
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$nik = $_SESSION['nik'];
$query = "SELECT*FROM pengaduan where nik = '$nik' ";
$hasil = mysqli_query($conn, $query);
$no = 1;
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
        <header class="mb-3">
        </header>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Pengaduan</h4>
            </div>

            <div class="card-body">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Pengaduan</th>
                            <th>Isi Laporan</th>
                            <th>Foto</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no1;
                        foreach ($hasil as $data) { ?>
                            <tr>
                                <th scope="row">
                                    <?= $no; ?>
                                </th>
                                <td>
                                    <?= $data['tgl_pengaduan'] ?>
                                </td>
                                <td>
                                    <?= $data['isi_laporan'] ?>
                                </td>
                                <td><img src="foto/<?= $data['foto'] ?>" height="100"></td>
                                <td>
                                    <?php
                                    if ($data['status'] == 0) {
                                        echo "Belum divalidasi";
                                    } else if ($data['status'] == 'proses') {
                                        echo "Masil dalam proses";
                                    } else {
                                        echo "Selesai";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="return confirm('YAKIN MAU DIHAPUS???')" ;
                                        href="masyarakat_model.php?hapus=<?= $data['foto'] ?>">Hapus</a>
                                </td>
                            </tr>
                            <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- Footer Start -->
    <?php require_once('_footer.php'); ?>
    <!-- Footer End -->
    </div>

    <!-- Js Start -->
    <?php require_once('_js.php'); ?>
</body>

</html>