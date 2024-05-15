<?php
$page_name = basename($_SERVER['PHP_SELF']);
// Get the current domain URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
$current_url = $protocol . "://" . $domain;

// Check if the script is running on localhost
if ($domain === 'localhost' || $domain === '127.0.0.1') {
    $full_url = $current_url . '/digital-locations/';
} else {
    $full_url = $current_url . '/';
}
?>
<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <h5>HELPING TO CONNECT A WORLD OF MORE THAN 8 BILLION PEOPLE</h5>
            <p>From the bottom of Death Valley to the top of Mount Everest, our disruptive technology can enable high speed Netflix streaming, Amazon shopping, online gaming, public safety and much, much more, anywhere in the world.</p>
            <!-- <a href="#" class="theme-btn dark-btn">Learn More</a> -->
        </div>
        <div class="footer__graphic">
            <img src="<?php echo  $full_url; ?>/assets/img/footer-map.png" alt="footer map">
        </div>
        <?php
        $page_name = basename($_SERVER['PHP_SELF']);
        if ($page_name == "index.php") {
        ?>
            <div class="smallTextF">
                <p>For information about our Small Cells subsidiary company <br> please visit <a href="https://cellsites.digitallocations.com/" target="_blank">here</a></p>
            </div>
        <?php } ?>
        <!-- Footer Newsletter -->
        <?php
        $page_name = basename($_SERVER['PHP_SELF']);
        if ($page_name != "index.php") {
        ?>
            <div class="newsletter">
                <div class="newsletter-wrap">
                    <p>Keep up with our progress by subscribing to our email newsletter!</p>
                    <!-- <form action="./php/subscriber.php" method="POST" id="subscriber-form" autocomplete="off">
                        <input type="email" name="email" id="email" class="form-control" required placeholder="Your email address...">
                        <button type="submit">Subscribe</button>
                    </form> -->
                    <div id="icontactSignupFormWrapper253">
                        <script type="text/javascript" async src="https://app.icontact.com/icp/core/mycontacts/signup/designer/form/automatic?id=253&cid=144987&lid=3093&divid=icontactSignupFormWrapper253"></script>
                    </div>

                </div>
               
            </div>
        <?php } ?>



        <!-- Footer Mobile Navigation -->
        <div class="footer__nav d-xl-none">
            <a href="/">Home</a>
            <a href="/market">Market</a>
            <a href="/technology">Technology</a>
            <a href="/applications">Applications</a>
            <a href="/newsroom">Newsroom</a>
            <a href="/videos">Videos</a>
            <a href="/investors">Investors</a>
            <a href="/about-us">About</a>
            <a href="/contact-us">Contact</a>
            <a href="https://cellsites.digitallocations.com/" target="_blank">Small Cells</a>
        </div>
        <div class="f-logo d-xl-none">
            <a href="/">
                <img src="<?php echo  $full_url; ?>/assets/img/logo-dark.svg" alt="footer logo">
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="footer__bottom">
            <div class="footer__navigation d-none d-xl-flex">
                <div class="f-logo ">
                    <a href="/">
                        <img src="<?php echo  $full_url; ?>/assets/img/logo-dark.svg" alt="footer logo">
                    </a>
                </div>
                <div class="footer__nav">
                    <a href="/">Home</a>
                    <a href="/market">Market</a>
                    <a href="/technology">Technology</a>
                    <a href="/applications">Applications</a>
                    <a href="/newsroom">Newsroom</a>
                    <a href="/videos">Videos</a>
                    <a href="/investors">Investors</a>
                    <a href="/about-us">About</a>
                    <a href="/contact-us">Contact</a>
                    <a href="https://cellsites.digitallocations.com/" target="_blank">Small Cells</a>
                </div>
            </div>
            <div class="footer__ptnc">
                <a href="/privacy-policy" class="d-none d-xl-block">Privacy Policy</a>
            </div>
        </div>
        <?php
                $page_name = basename($_SERVER['PHP_SELF']);
                if ($page_name == "news.php" || $page_name == "3reasons.php") {
                ?>
                    <div class="fls-text">
                        <p>Matters discussed in this page contain forward-looking statements within the meaning of the Private Securities Litigation Reform Act of 1995. When used in this page, the words "anticipate," "believe," "estimate," "may," "intend," "expect" and similar expressions identify such forward-looking statements. Actual results, performance or achievements could differ materially from those contemplated, expressed or implied by the forward-looking statements contained herein. These forward-looking statements are based largely on the expectations of the Company and are subject to a number of risks and uncertainties. These include, but are not limited to, risks and uncertainties associated with: the impact of economic, competitive and other factors affecting the Company and its operations, markets, the impact on the national and local economies resulting from terrorist actions, the impact of public health epidemics on the global economy and other factors detailed in reports filed by the Company with the United States Securities and Exchange Commission.
<br><br>


                            Any forward-looking statement made by us in this page is based only on information currently available to us and speaks only as of the date on which it is made. We undertake no obligation to publicly update any forward-looking statement, whether written or oral, that may be made from time to time, whether as a result of new information, future developments or otherwise
                        </p>
                    </div>
                <?php } ?>
        <div class="footer__copyright">
            <p>Copyright © 2024 Digital Locations</p>
        </div>
    </div>
</footer>


<!-- Team popup -->
<div class="modal fade" id="team">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamLabel"></h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">

            </div>
        </div>
    </div>
</div>


<div class="modal invest-modal fade" id="investModal" tabindex="-1" aria-labelledby="investModalLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="jotformForm" action="https://submit.jotform.com/submit/241266757607060/" method="POST">
                    <h3>Keep up with our breaking news by subscribing to our email newsletter!</h3>
                    <div class="mb-3">
                        <input type="hidden" name="formID" value="241266757607060">
                        <input type="email" name="q3_email" placeholder="Email" class="form-control" required>
                    </div>
                    <button type="submit">
                        <span class="invest-sbmit-btn">Enter</span>
                        <div class="spinner-border text-light" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </form>
                <div class="alert alert-success invest-alert" role="alert">
                    It's submitted successfully.
                </div>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo  $full_url; ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/slick.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://apis.google.com/js/api.js"></script>
<script src="<?php echo  $full_url; ?>/assets/js/main.js"></script>

</body>

</html>