<?php

// Check if HTTPS is set and whether it's "on"
$is_https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';

// Construct the URL for the YouTube search
$protocol = $is_https ? 'https' : 'http';
$current_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$current_url_check = $protocol . "://" . $_SERVER['HTTP_HOST'];
$domain = $_SERVER['HTTP_HOST'];
$showAllVideo = 1;

if ($domain === 'localhost' || $domain === '127.0.0.1') {
    if($current_url !== 'http://localhost/digital-locations/short-videos'){
        $showAllVideo = 0;
    }
} else {
    if($current_url !== $current_url_check . '/short-videos'){
        $showAllVideo = 0;
    }
}

$parts = explode('/', rtrim(parse_url($current_url, PHP_URL_PATH), '/'));
$lastPart = end($parts);
$vedioTitleFromURL = str_replace('-', ' ', $lastPart);

$videos = include "./data/videos-data.php";

$filteredCEOPodcastVedios = array_filter($videos, function ($item) use ($lastPart) {
    return $item['category'] === 'short-video' && strtolower($item['slug']) === $lastPart;
});



$GLOBALS['title'] = ucwords($vedioTitleFromURL) . " | Digital Locations";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php');
if ($showAllVideo == 1) {
?>


    <section class="videoTSingle">
        <div class="container">
            <div class="videoTSingle-wrap">
                <h3>Short Videos</h3>
            </div>
        </div>
    </section>


    <section class="catlatest pt-0 short-vidoes" id="short-videos">
        <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <?php
            $filteredShortVideos = array_filter($videos, function ($item) {
                return $item['category'] === 'short'  && $item['scope'] === 'public';
            });
            foreach ($filteredShortVideos as $video) {
                $videoID = $video['videoID'];
                if ($videoID === 'zwCbO_29ec8') {
                    $thumbnailUrl = "https://img.youtube.com/vi/{$videoID}/sddefault.jpg";
                } else {
                    $thumbnailUrl = "https://img.youtube.com/vi/{$videoID}/maxresdefault.jpg";
                }
                echo "  <div class=\"col\">
                <div class=\"podcast__item\">
                    <div class=\"podcast__itemThumbnail\">
                        <img src=\"{$thumbnailUrl}\" alt=\"chat\">
                        <a href=\"/single-video?id={$video['videoID']}\" class=\"podcast__play\">
                            <svg width=\"52\" height=\"52\" viewBox=\"0 0 52 52\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                <g clip-path=\"url(#clip0_54_3118)\">
                                    <path d=\"M26 0C11.6627 0 0 11.6638 0 26C0 40.3362 11.6627 52 26 52C40.3373 52 52 40.3362 52 26C52 11.6638 40.3373 0 26 0ZM36.3361 26.9109L21.1695 36.6609C20.9918 36.7762 20.7865 36.8334 20.5834 36.8334C20.4056 36.8334 20.2258 36.7889 20.065 36.7011C19.7158 36.5107 19.5 36.1467 19.5 35.75V16.25C19.5 15.8533 19.7158 15.4893 20.065 15.2989C20.4078 15.1106 20.8373 15.1221 21.1695 15.3391L36.3361 25.0891C36.6451 25.2879 36.8334 25.6318 36.8334 26C36.8334 26.3682 36.6451 26.712 36.3361 26.9109Z\" fill=\"white\" />
                                </g>
                                <defs>
                                    <clipPath id=\"clip0_54_3118\">
                                        <rect width=\"52\" height=\"52\" fill=\"white\" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <p class=\"mt-3\">{$video['title']}</p>
                </div>
            </div>";
            }
            ?>
        </div>
        </div>
    </section>



<?php
} else {
    if (count($filteredCEOPodcastVedios) > 0) {
        // There are matching videos in $filteredCEOPodcastVedios
        foreach ($filteredCEOPodcastVedios as $video) {
            // Display the matching videos
            $videoTitle = $video['title'];
            $videoID = $video['videoID'];
            $videoDate = $video['date'];

            echo '
            <section class="podcast-detail">
            <div class="container">
                <div class="podcast-detail-wrap">
                    <h1>' . $videoTitle . ' </h1>
                    <p></p>
                     <div class="podcast-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/' . $videoID . '?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div> 
                </div>
            </div>
        </section>
            ';
        }
    } else {
        // No matching videos found
        echo 'No matching videos found.';
    }
}

include('footer.php'); ?>