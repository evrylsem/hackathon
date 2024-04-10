<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/home.css" type="text/css">
        <script defer src="../bootstrap/bootstrap.bundle.min.js"></script>
        <title>Welcome to UniqHire!</title>
    </head>
    <body>
        <div class="nav-container">
            <nav class="navbar navbar-expand-lg navbar-light sticky-top">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="../images/logo-orig.png" alt="Logo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link home" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link forum" href="forum.php">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link companies" href="companies.php">Be an employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link train" href="train.php">Train now</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="below-nav">
            <div class="text-container">
                <h3 class="header-home mb-4">Find opportunity in Uniqhire!</h3>
                <p class="mb-5">Welcome to Uniqhire, where every ability finds opportunity! Creating bridges to people with special needs, fostering inclusivity and celebrating diverse talents. Join us in building a world where everyone thrives!</p>
                <div class="btns">
                    <a href="companies.php" class="navbar-brand">Find Company</a>
                    <a href="train.php" class="navbar-brand train-btn">Train now</a>
                </div>
                    
            </div>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/home-img.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/login1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/login-page.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="extra-container">
            <div class="contact-us devss">
                <div class="head-extra">
                    <h3>Contact Us</h3>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control input-field" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control input-field" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <form action="">
                    <button type="submit" class="send-btn">Send</button>
                </form>
            </div>
            <div class="about-us devss">
                <div class="head-extra">
                    <h3>About</h3>
                    <p >Uniqhire is a socially-driven enterprise founded on the belief that diversity and inclusion are fundamental to creating thriving communities. Our journey began with a simple yet profound idea: to build bridges that connect individuals with special needs to opportunities for growth, independence, and meaningful employment.</p>
                </div>
            </div>
        </div>
    </body>
</html>