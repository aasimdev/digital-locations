<?php
$GLOBALS['title'] = "Contact Us - Digital Locations";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>

<section class="mbanner nographic" style="background-image: url(./assets/img/market-bg.png);">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-lg-0 order-1">
                <div class="contact__text">
                    <h2>Contact Us!</h2>
                    <div class="contact__list">
                        <span><svg width="21" height="17" viewBox="0 0 21 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9173 2.08333C20.9173 0.9375 19.9798 0 18.834 0H2.16732C1.02148 0 0.0839844 0.9375 0.0839844 2.08333V14.5833C0.0839844 15.7292 1.02148 16.6667 2.16732 16.6667H18.834C19.9798 16.6667 20.9173 15.7292 20.9173 14.5833V2.08333ZM18.8346 2.08337L10.5013 7.29171L2.16797 2.08337H18.8346ZM18.8346 14.5833H2.16797V4.16663L10.5013 9.37496L18.8346 4.16663V14.5833Z" fill="#EC2427" />
                            </svg>
                            Email</span>
                        <a href="mailto:admin@Digitallocations.com">admin@Digitallocations.com
                        </a>
                    </div>
                    <div class="contact__list">
                        <span><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.81315 2.08337C3.87565 3.01046 4.0319 3.91671 4.2819 4.78129L3.0319 6.03129C2.60482 4.78129 2.33398 3.45837 2.24023 2.08337H3.81315ZM14.084 14.6041C14.9694 14.8541 15.8757 15.0104 16.7923 15.0729V16.625C15.4173 16.5312 14.0944 16.2604 12.834 15.8437L14.084 14.6041ZM4.8125 0H1.16667C0.59375 0 0.125 0.46875 0.125 1.04167C0.125 10.8229 8.05208 18.75 17.8333 18.75C18.4062 18.75 18.875 18.2812 18.875 17.7083V14.0729C18.875 13.5 18.4062 13.0312 17.8333 13.0312C16.5417 13.0312 15.2812 12.8229 14.1146 12.4375C14.0104 12.3958 13.8958 12.3854 13.7917 12.3854C13.5208 12.3854 13.2604 12.4896 13.0521 12.6875L10.7604 14.9792C7.8125 13.4688 5.39583 11.0625 3.89583 8.11458L6.1875 5.82292C6.47917 5.53125 6.5625 5.125 6.44792 4.76042C6.0625 3.59375 5.85417 2.34375 5.85417 1.04167C5.85417 0.46875 5.38542 0 4.8125 0Z" fill="#EC2427" />
                            </svg>
                            Phone</span>
                        <a href="tel:+8054567000">(805) 456-7000</a>
                    </div>
                    <div class="contact__list">
                        <span><i class="fas fa-map-marker-alt"></i>
                            Address</span>
                        <p>Digital Locations, Inc. <br>
                            1117 State Street <br>
                            Santa Barbara CA 93101</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 order-0">
                <div class="contact__form">
                    <h3>Contact us today to learn more about how we can help you.</h3>
                    <form action="https://submit.jotform.com/submit/241335532734049/" method="POST">
                        <input type="hidden" name="formID" value="241335532734049" />
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form__group">
                                    <label for="first_3" class="form-label">Your name</label>
                                    <input type="text" class="form-control" id="first_3" name="q3_name[first]" placeholder="Your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form__group">
                                    <label for="last_3" class="form-label">last name</label>
                                    <input type="text" class="form-control" id="last_3" name="q3_name[last]" placeholder="Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="input_6" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="input_6" name="q6_email" placeholder="Enter Email Address" required>
                        </div>
                        <div class="form__group">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea name="q5_typeA" id="input_5" cols="30" rows="5" class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="theme-btn" id="sendemail">Submit Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include('footer.php'); ?>