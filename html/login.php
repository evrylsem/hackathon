<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/login.css" type="text/css">
        <script defer src="../bootstrap/bootstrap.bundle.min.js"></script>
        <title>Uniqhire Login</title>
    </head>
    <body>
        <div class="img-container body-div">
            <img src="../images\login1.png" alt="">
        </div>
        <div class="form-container body-div">
            <form action="" class="entry-form">
                <div class="logo-container">
                    <img src="../images\logo-orig.png" alt="" class="logo">
                </div>
                <div class="form-floating mb-4">
                    <input type="text" name="username" id="username" placeholder="Username" class="input-field">
                </div>
                <div class="form-floating mb-5">
                    <input type="password" name="password" id="password" placeholder="Password" class="input-field">
                </div>
                <div class="btn-container">
                    <a href="home.php" class="btns">Login</a>
                </div>
                <div class="acc-check">
                    Don't have and account?
                    <br>
                    <a href="registration.php" class="">Sign-up</a>
                </div>
            </form>
        </div>
    </body>
</html>