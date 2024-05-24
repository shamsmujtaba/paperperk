<?php
/* Template Name: Contact Us */
include('header.php');
?>

<div class="hero-bg d-flex justify-content-center align-items-center">

    <h1 class="heading-big mb-3 text-white">Contact Us</h1>

    <ul class="circles h-50">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<!-- ------------------------ Section - Contact Form---------------------------------- -->

<div class="container px-0 pt-5 mt-4">

    <div class="row contact-cont pt-0" id="contact-form">

        <div class="col-md-6 p-3 d-flex align-items-center justify-content-center">
            <div id="contact-us-animation" class="lottie-container" data-animation="contact-us-animation"></div>
            <!--<img src="<?php bloginfo('template_directory'); ?>/animations/contact-us-animation.gif" alt="contact-us-animation">-->
        </div>

        <div class="col-md-6 section-bg-color p-5 form-right">
            <form method="post">
                <h2 class="mb-4">Lets Get in Touch</h2>

                <div class="row">

                    <!-- <div class="col-md-3">

                            <label>Full Name</label>

                        </div> -->

                    <div class="col-md-12">

                        <div class="form-group">
                            <input type="text" name="full_name" required="required" placeholder="Full Name">
                        </div>

                    </div>

                </div>

                <div class="row">

                    <!-- <div class="col-md-3">
                            <label>Phone</label>
                        </div>
                         -->
                    <div class="col-md-12">
                        <div class="form-group">

                            <input type="text" name="phone" required="required" placeholder="Phone">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <!-- 
                        <div class="col-md-3">
                            <label>Email</label>
                        </div> -->
                    <div class="col-md-12">
                        <div class="form-group">

                            <input type="text" name="email" required="required" placeholder="Email">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <!-- 
                        <div class="col-md-3">
                            <label>Subject</label>
                        </div> -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" name="subject" required="required" placeholder="Subject">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <!-- 
                        <div class="col-md-3">
                            <label>Message</label>
                        </div> -->
                    <div class="col-md-12">

                        <div class="form-group">
                            <textarea name="message" placeholder="Write your message..."></textarea>
                        </div>
                    </div>

                </div>

                <div class="form-group pb-2 text-end mt-3">

                    <button type="submit" class="btn btn-custom btn-secondary reset-btn">Cancel</button>
                    <button type="submit" class="btn btn-custom btn-light-blue contact-btn">Send</button>
                    <input type="hidden" id="confirmation-message-input" value="<?= $confirmation_message ?>" />

                </div>
            </form>
        </div>

    </div>

</div>

<!-- ------------------------------Section - Contact Information-------------------------------- -->

<div class="container write-a-paper-section-tb-padding" id="contact-info">

    <div class="row">

        <div class="col-md-4">

            <div class="custom-card p-5 bg-blue text-center h-100 mx-3">

                <i class="fas fa-home mb-3 my-auto text-yellow"></i>

                <h3 class="paper-writing-service-blue-small-heading text-yellow mb-2"> Address</h3>
                <p class="contact-info-text text-white">1149 S Hill St, Los Angeles, CA 90015, USA</p>

            </div>

        </div>

        <div class="col-md-4">

            <div class="custom-card p-5 bg-light-blue text-center h-100 mx-3 ">

                <i class="fas fa-envelope mb-3"></i>

                <h3 class="paper-writing-service-blue-small-heading text-white mb-2"> Email</h3>

                <a class="contact-info-text text-white" href="mailto:info@paperperk.com">info@paperperk.com</a>

            </div>

        </div>

        <div class="col-md-4">

            <div class="custom-card p-5 bg-blue text-center h-100 mx-3">

                <i class="fas fa-phone mb-3 text-yellow "></i>

                <h3 class="paper-writing-service-blue-small-heading text-yellow mb-2"> Phone</h3>
                <a class="contact-info-text text-white" href="tel:  +1 213 318 4345">  +1 213 318 4345</a>

            </div>

        </div>

    </div>

</div>


<!-- -----------------Section - 24-hours Support --------------- -->

<div class="section-bg-color pt-5 pb-5 " id="special-features">

    <div class="container-fluid">

      <div class="row">

        <div class="col-md-1"></div>

        <div class="col-md-2 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row">

              <div class="col-md-12 text-center feature-body">

                <img src="<?php bloginfo('template_directory'); ?>/icons/feature-experienced-writer.png" class=" mb-3" alt="features-experienced-writer">

                <div class="paper-writing-service-blue-small-heading mb-2">EXPERIENCED WRITERS</div>

                <p class="feature-text-sm">Masters &amp; Ph.D Qualified Writers </p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-2 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row">

              <div class="col-md-12 feature-body text-center">

                <img src="<?php bloginfo('template_directory'); ?>/icons/feature-exclusive-discount.png" class="mb-3" alt="feature-exclusive-discount">

                <div class="paper-writing-service-blue-small-heading mb-2">EXCLUSIVE DISCOUNT OFFERS
                </div>

                <p class="feature-text-sm">Discount Bundles for New &amp; Existing Clients</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-2 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row">

              <div class="col-md-12 text-center feature-body">

                <img src="<?php bloginfo('template_directory'); ?>/icons/feature-plagiarism-free.png" class="mb-3" alt="feature-plagiarism-free">

                <div class="paper-writing-service-blue-small-heading mb-2">100% PLAGIARISM FREE</div>

                <p class="feature-text-sm">Plagiarism Report Ensuring Original Papers</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-2 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row">

              <div class="col-md-12 text-center feature-body">

                <img src="<?php bloginfo('template_directory'); ?>/icons/feature-24-hours.png" class="mb-3" alt="feature-24-hours">

                <div class="paper-writing-service-blue-small-heading mb-2">24/7 ONLINE PRESENCE</div>

                <p class="feature-text-sm">24/7 Order Tracking and Online Support</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-2">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row">

              <div class="col-md-12 text-center feature-body">

                <img src="<?php bloginfo('template_directory'); ?>/icons/feature-money-back.png" class="mb-3" alt="feature-money-back">

                <div class="paper-writing-service-blue-small-heading mb-2">100% MONEYBACK ASSURANCE </div>

                <p class="feature-text-sm">Risk-Free Services With Guaranteed Satisfaction</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-1"></div>

      </div>

    </div>

  </div>



<?php get_footer(); ?>