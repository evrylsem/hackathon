<?php
$data = [
    [
        "name" => "Autism Society Philippines",
        "description" => "The Autism Society Philippines  (ASP)  is  a  national,  non-profit  organization working towards an environment that empowers persons on the autism spectrum disorder to  become the  best  of  their potentials -- self-reliant,  independent, productive  and  socially-accepted members of an Autism-OK Philippines.",
        "image_url" => "../images\asp.png"
    ],
    [
        "name" => "Goodwill Industries of the Philippines Incorporated ",
        "description" => " Goodwill Philippines is a non-son-stock, non-profit civic organization committed to the rehabilitation of persons with disabilities (PWDs) and the disadvantaged through skill empowerment. It instills the spirit of independence, creativity, trust and friendship among its beneficiaries.",
        "image_url" => "../images\gw.jpg"
    ],
    [
        "name" => "National Council on Disability Affairs",
        "description" => "The National Council on Disability Affairs (NCDA) is the national government agency mandated to formulate policies and coordinate the activities of all agencies, whether public or private, concerning disability issues and concerns. As such, the NCDA is the lead agency tasked to steer the course of program development for persons with disabilities and the delivery of services to the sector.",
        "image_url" => "../images/ncda.png"
    ],
    [
        "name" => "Philippine Business and Disability Network",
        "description" => "The Philippine Business and Disability Network (PBDN) is a country-level platform, for and by businesses, that works towards more inclusive and barrier-free workplaces for Persons with Disability.",
        "image_url" => "../images\PDBN.jpg"
    ],
    // Add more companies as needed
];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/train.css" type="text/css">
        <script defer src="../bootstrap/bootstrap.bundle.min.js"></script>
        <title>Train for Skills</title>
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
        <div class="container mt-4">
            <h2 class="mb-4">List of Agencies Offering Trainings</h2>
            <div class="row">
            <?php foreach ($data as $company): ?>
            <div class="col-md-12 mb-3">
            <div class="company-card">
    <img src="<?php echo $company['image_url']; ?>" alt="<?php echo $company['name']; ?>" class="company-image">
    <div class="card-body">
        <h3><?php echo $company['name']; ?></h3>
        <p><?php echo $company['description']; ?></p>
        <a href="#" class="btn btn-primary apply-btn">Apply Now</a>
    </div>
</div>

            </div>
            <?php endforeach; ?>
            </div>
            <!-- Add more companies as needed -->
        </div>
        </div>
    </body>
</html>