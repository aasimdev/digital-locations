<?php
$GLOBALS['title'] = "Videos - Digital Locations";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/videos-data.php";
include('header.php'); ?>

<section class="mbanner nographic" style="background-image: url(./assets/img/market-bg.png);">
    <div class="container">
        <h1>Videos</h1>
    </div>
</section>

<section class="podcastIntro">
    <div class="container">
        <img src="./assets/img/podcast.jpg" class="d-none d-md-block" alt="podcast">
        <div class="podcastIntro__img d-md-none">
            <img src="./assets/img/podcast-mobile.jpg" alt="podcast">
        </div>

        <p>Watch our CEO, Rich Beliner, chat with leaders and experts in the wireless industry about trends, insights as well as progress with Digital Locations</p>
    </div>
</section>

<section class="podcast">
    <div class="container">


        <div class="row">
            <div class="col-12">
                <div class="podcast__heading">
                    <h2>CEO Podcast</h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                </div>
            </div>
            <?php
            $filteredCEOPodcast = array_filter($videos, function ($item) {
                return $item['category'] === 'ceo-podcast' && $item['scope'] === 'public';
            });
            foreach ($filteredCEOPodcast as $video) {
                echo "<div class=\"col-lg-4 col-md-6\">
                    <div class=\"podcast__item\">
                        <div class=\"podcast__itemThumbnail\">
                            <img src=\"https://img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"chat\">
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

<section class="podcast">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="podcast__heading">
                    <h2>News Commentary</h2>
                </div>
            </div>
            <?php
            $filteredNewsCommentary = array_filter($videos, function ($item) {
                return $item['category'] === 'news-commentary'  && $item['scope'] === 'public';
            });
            foreach ($filteredNewsCommentary as $video) {
                echo "<div class=\"col-lg-4 col-md-6\">
                    <div class=\"podcast__item\">
                        <div class=\"podcast__itemThumbnail\">
                            <img src=\"https://img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"chat\">
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

<section class="podcast short-vidoes">
    <div class="container">
        <div class="podcast__heading">
            <h2>Short Videos</h2>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <?php
            $filteredNewsCommentary = array_filter($videos, function ($item) {
                return $item['category'] === 'short'  && $item['scope'] === 'public';
            });
            foreach ($filteredNewsCommentary as $video) {
                echo "  <div class=\"col\">
                <div class=\"podcast__item\">
                    <div class=\"podcast__itemThumbnail\">
                        <img src=\"https://img.youtube.com/vi/{$video['videoID']}/maxresdefault.jpg\" alt=\"chat\">
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
include('footer.php'); ?>