<?php
$GLOBALS['title'] = "Video - Digital Locations";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
$videos = include "./data/videos-data.php";
include('header.php');

if (isset($_GET['id'])) {
    $videoId = $_GET['id'];
    $video = array_filter($videos, function ($video) use ($videoId) {
        return $video['videoID'] == $videoId;
    });
    $video = reset($video);
}
?>

<section class="podcast-detail">
    <div class="container">
        <?php if ($video) : ?>
            <div class="podcast-detail-wrap">
                <h1><?php echo $video['title']; ?></h1>
                <div class="podcast-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $video['videoID']; ?>?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
include('footer.php'); ?>