<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if ($GLOBALS['title']) {
        $title = $GLOBALS['title'];
    } else {
        $GLOBALS['title'] = "";
    }
    if ($GLOBALS['desc']) {
        $desc = $GLOBALS['desc'];
    } else {
        $desc = "";
    }
    if ($GLOBALS['keywords']) {
        $keywords = $GLOBALS['keywords'];
    } else {
        $keywords = "";
    } ?>
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/slick.min.css">
    <link rel="stylesheet" href="./assets/css/slick-theme.min.css">
    <link rel="stylesheet" href="./assets/css/style.min.css">


</head>

<body class="<?php
                $page_name = basename($_SERVER['PHP_SELF']);
                if ($page_name == "index.php" || $page_name == "" || $page_name == "/") {
                ?>homeC<?php } ?>">

    <?php
    function active($currect_page)
    {
        $url_array =  explode('/', $_SERVER['REQUEST_URI']);
        $url = end($url_array);
        if ($currect_page == $url) {
            echo 'active'; //class name in css 
        }
    }
    ?>
    <div class="invest-bar">
        <div class="container-fluid">
            <div class="invest-bar-content">
                <div class="invest-bar-text">
                    <div class="invest-bar-text-wrap">
                        <p>Stock Symbol: NEWH</p>
                        <a href="investors.php">
                            Learn more
                        </a>
                    </div>
                </div>
                <div class="tSocial d-none d-lg-flex">
                    <a href="https://www.facebook.com/profile.php?id=100090598638588" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/digitallocations/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@digitallocations" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Hedaer -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/img/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <svg width="25" height="18" viewBox="0 0 25 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H23.9921" stroke="white" stroke-width="2" stroke-linecap="round" />
                    <path d="M1 8.5H23.9921" stroke="white" stroke-width="2" stroke-linecap="round" />
                    <path d="M7.70602 16.5H23.9921" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('market.php'); ?>" href="market.php">Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('technology.php'); ?>" href="technology.php">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('applications.php'); ?>" href="applications.php">Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('newsroom.php'); ?>" href="newsroom.php">Newsroom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('videos.php'); ?>" href="videos.php">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('investors.php'); ?>" href="investors.php">Investors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php active('about-us.php'); ?>" href="about-us.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php active('contact-us.php'); ?>" href="contact-us.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>