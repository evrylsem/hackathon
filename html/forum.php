<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/logo-orig.png" type="image">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="../css/forum.css" type="text/css">
        <script defer src="../bootstrap/bootstrap.bundle.min.js"></script>
        <title>Forums</title>
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
            <button type="button" class="post-btn">Post</button>
            <div class="forum-posts">
                <?php
                    $forumPosts = [
                        [
                        'user' => 'User123',
                        'experience' => "As someone with autism spectrum disorder, I face challenges with social interaction and communication. However, with support and understanding from my family and friends, I've been able to navigate through life and pursue my passions."
                        ],
                        [
                        'user' => 'Anonymous User',
                        'experience' => "I have a physical disability that affects my mobility, but it hasn't stopped me from living a fulfilling life. Through determination and access to assistive technology, I've been able to overcome many obstacles and achieve my goals."
                        ],
                        [
                        'user' => 'BraveHeart23',
                        'experience' => "Living with cerebral palsy has taught me resilience and perseverance. Despite the physical challenges, I've learned to adapt and thrive, pursuing my dreams with unwavering determination."
                        ],
                        [
                            'user' => 'Sunshine22',
                            'experience' => "Dealing with blindness has its obstacles, but it hasn't dimmed my optimism. With the support of my community and the aid of technology, I've embraced life's adventures and discovered new ways to experience the world."
                        ],
                        [
                            'user' => 'GracefulGamer',
                            'experience' => "Having dyslexia posed academic challenges, but it ignited my creativity and problem-solving skills. Through innovative learning strategies and a supportive environment, I've excelled in areas beyond the classroom."
                        ]
                    ];

                    foreach ($forumPosts as $post) {
                        echo '<div class="card">';
                        echo '<h3>' . $post['user'] . '</h3>';
                        echo '<p>' . $post['experience'] . '</p>';
                        echo '<button class="reply-btn">Reply</button>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
    </body>
</html>