<footer class="footer">
    <div class="container">
        <div class="footer__content">
            <h5>HELPING TO CONNECT A WORLD OF MORE THAN 8 BILLION PEOPLE</h5>
            <p>From the bottom of Death Valley to the top of Mount Everest, our disruptive technology can enable high speed Netflix streaming, Amazon shopping, online gaming, public safety and much, much more, anywhere in the world.</p>
            <!-- <a href="#" class="theme-btn dark-btn">Learn More</a> -->
        </div>
        <div class="footer__graphic">
            <img src="./assets/img/footer-map.png" alt="footer map">
        </div>
        <?php
        $page_name = basename($_SERVER['PHP_SELF']);
        if ($page_name == "index.php") {
        ?>
            <div class="smallTextF">
                <p>For information about our Small Cells subsidiary company please visit <a href="https://cellsites.digitallocations.com/" target="_blank">here</a></p>
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
            <a href="index.php">Home</a>
            <a href="market.php">Market</a>
            <a href="technology.php">Technology</a>
            <a href="applications.php">Applications</a>
            <a href="newsroom.php">Newsroom</a>
            <a href="videos.php">Videos</a>
            <a href="investors.php">Investors</a>
            <a href="about-us.php">About</a>
            <a href="contact-us.php">Contact</a>
            <a href="https://cellsites.digitallocations.com/" target="_blank">Small Cells</a>
        </div>
        <div class="f-logo d-xl-none">
            <a href="#">
                <img src="./assets/img/logo-dark.svg" alt="footer logo">
            </a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="footer__bottom">
            <div class="footer__navigation d-none d-xl-flex">
                <div class="f-logo ">
                    <a href="index.php">
                        <img src="./assets/img/logo-dark.svg" alt="footer logo">
                    </a>
                </div>
                <div class="footer__nav">
                    <a href="index.php">Home</a>
                    <a href="market.php">Market</a>
                    <a href="technology.php">Technology</a>
                    <a href="applications.php">Applications</a>
                    <a href="newsroom.php">Newsroom</a>
                    <a href="videos.php">Videos</a>
                    <a href="investors.php">Investors</a>
                    <a href="about-us.php">About</a>
                    <a href="contact-us.php">Contact</a>
                    <a href="https://cellsites.digitallocations.com/" target="_blank">Small Cells</a>
                </div>
            </div>
            <div class="footer__ptnc">
                <a href="privacy-policy.php" class="d-none d-xl-block">Privacy Policy</a>
            </div>
        </div>
        <div class="footer__copyright">
            <p>Copyright © 2023 Digital Locations</p>
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



<script src="./assets/js/jquery-3.1.1.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://apis.google.com/js/api.js"></script>
<script src="./assets/js/main.js"></script>

</body>

</html>