<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">

    <!-- ===== iconfontawesome ===== -->
    <link rel="stylesheet" href="https://fontawesome.com/icons/user-plus?f=classic&s=solid">
    <script src="https://kit.fontawesome.com/e372641f2d.js" crossorigin="anonymous"></script>

    <title>Login & Registration Form</title>
</head>

<body>

    <!-- Login Form -->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="login.php" method="post">
                    <div class="input-field">
                        <input type="text" id="username" name="username" placeholder="username" required>
                        <i class="fa-regular fa-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input value="Login Now" type="submit">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="proses_registrasi.php" method="post">
                    <div class="input-field">
                        <input type="text" id="username" name="username" placeholder="Enter your name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" name="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" id="email" name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Remember me</label>
                        </div>

                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <a href="index.php"><input type="submit" name="register" value="Register Now"></a>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="index.php" class="text login-link">Signup now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>