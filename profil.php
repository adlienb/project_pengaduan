<?php
session_start();
if (!isset($_SESSION['nik'])) {
    header("Location: login.php");
}
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
                <h4 class="card-title">My Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <form action="auth_model.php" method="POST">
                                <div class="form-group">
                                    <label for="input-1">NIK</label>
                                    <input type="text" class="form-control" id="input-1" placeholder="Enter Your NIK"
                                        name="nik" value="<?= $_SESSION['nik'] ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="input-2">Name</label>
                                    <input type="text" class="form-control" id="input-2" placeholder="Enter Your Name"
                                        name="nama" value="<?= $_SESSION['nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="input-3">Username</label>
                                    <input type="text" class="form-control" id="input-3"
                                        placeholder="Enter Your Username" name="username"
                                        value="<?= $_SESSION['username'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="input-5">No. Telp</label>
                                    <input type="text" class="form-control" id="input-5"
                                        placeholder="Enter Your Mobile Number" name="telp"
                                        value="<?= $_SESSION['telp'] ?>">
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-light px-5" fdprocessedid="sgeedd"
                                        name="update"><i class="icon-lock"></i>Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
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