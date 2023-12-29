<?php
session_start();
if (!isset($_SESSION['nik'])) {
    header("Location: login.php");
}
?>

<?php
require_once('_koneksi.php');
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

        <div class="card-content">
            <div class="card-body">
                <div class="form-group">
                    <h4 class="card-title">Ingin Mengadukan?</h4>
                    <p> Silahkan klik dibawah ini.</p>
                    <!-- Button trigger for login form modal -->
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                        data-bs-target="#inlineForm" fdprocessedid="l18jrp">
                        Buat Pengaduan
                    </button>

                    <!--login form Modal -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1" aria-labelledby="myModalLabel33"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Laporan Pengaduan </h4>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="masyarakat_model.php" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label>Foto Pengaduan</label>
                                        <div class="form-group">
                                            <input 
                                                type="file" 
                                                name="foto" 
                                                class="form-control"
                                                accept="image/png, image/gif, image/jpeg"
                                                placeholder="Pilih foto admin">
                                        </div>

                                        <label>Isi Laporan pengaduan</label>
                                        <textarea 
                                            name="isi_laporan" 
                                            class="form-control"
                                            style="height: 1o0px;">
                                        </textarea>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button name="simpan_pengaduan" type="submit" class="btn btn-primary ml-1">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Kirim</span>
                                            </button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
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