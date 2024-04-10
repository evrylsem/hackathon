<?php
    $data = [
        [
            "title" => "Electronics",
            "description" => "Welcome to our electronics emporium, where innovation meets affordability! At our shop, you'll find a curated selection of the latest gadgets, devices, and accessories to elevate your digital lifestyle. From cutting-edge smartphones and sleek laptops to state-of-the-art audio equipment and smart home solutions, we've got everything you need to stay connected and entertained.",
            "image_url" => "../images/electronics.jpg",
            "image_alt" => "Image 1",
            "accept" => "Amputee"
        ],
        [
            "title" => "Beauty Salon",
            "description" => "Welcome to our boutique clothing store, where style meets comfort and sophistication! Step into a world of fashion-forward trends and timeless classics that cater to your individuality and sense of style. From casual chic to elegant formalwear, our collection features handpicked pieces that exude quality craftsmanship and attention to detail.",
            "image_url" => "../images/beautysalon.jpg",
            "image_alt" => "Image 2",
            "accept" => "Speech Disorders"
        ],
        [
            "title" => "Home Decor",
            "description" => "Welcome to our home decor haven, where every corner tells a story and every room reflects your unique personality! Step into a world of design inspiration and discover an eclectic array of furnishings, accents, and decor pieces that will transform your space into a sanctuary of style and comfort. From contemporary minimalist aesthetics to rustic charm and everything in between, our curated collection offers something for every taste and home decor preference.",
            "image_url" => "../images/clothings.jpeg",
            "image_alt" => "Image 3",
            "accept" => "Amputee"
        ],
        [
            "title" => "Sports Center",
            "description" => "Welcome to our sports center, where the pursuit of fitness and the thrill of competition come together to inspire greatness! Step into our state-of-the-art facility and embark on a journey to elevate your athleticism, improve your health, and unleash your inner champion.",
            "image_url" => "../images\sportscenter.jpg",
            "image_alt" => "Image 4",
            "accept" => "ADHD"
        ]
    ];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/companies.css" type="text/css">
        <script defer src="../bootstrap/bootstrap.bundle.min.js"></script>
        <title>Be Hired Today</title>
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
            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <button type="button" id="searchButton">Search</button>
            </div>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="companies-tab" data-toggle="tab" href="#companies" role="tab" aria-controls="companies" aria-selected="true">List of Companies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="saved-tab" data-toggle="tab" href="#saved" role="tab" aria-controls="saved" aria-selected="false">Saved</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="companies" role="tabpanel" aria-labelledby="companies-tab">
                    <div class="company-list">
                        <?php foreach ($data as $company): ?>
                            <div class="company-card">
                                <div class="card">
                                    <img src="<?php echo $company['image_url']; ?>" alt="<?php echo $company['image_alt']; ?>" class="company-image">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $company['title']; ?></h5>
                                        <p class="card-text"><?php echo $company['description']; ?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo "Accepts: " . $company['accept']; ?></small></p>
                                        <a href="" class="btn btn-primary apply-btn" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a> <!-- Add the Apply Now button -->
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="saved" role="tabpanel" aria-labelledby="saved-tab">
                    <p>No results found.</p>
                </div>
            </div>
            <div class="modal" id="applyModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title">Apply</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <!-- Your form or content for applying can go here -->
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">*only accepts .pdf, .docx, .png</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>
                    
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Upload</button>
                        <!-- Add additional buttons if needed -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>