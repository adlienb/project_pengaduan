<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mazer-main/dist/assets/css/bootstrap.css">
    <link rel="stylesheet" href="mazer-main/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="mazer-main/dist/assets/css/app.css">
    <link rel="stylesheet" href="mazer-main/dist/assets/css/pages/auth.css">
</head>


<body>
    
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="mazer-main/dist/assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title" href="index.php">Log In.</h1>
                    <p class="auth-subtitle mb-5">Log in dulu biar bisa masuk.</p>

                    <form action="auth_model.php" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            <select name="level" class="form-control form-control-xl">
                                <option value="rakyat">Masyarakat</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Ingatkan Saya
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit" name="login">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Kamu belum punya akun? Buat dulu disini -> <a href="register.php"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Lupa Password?</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>