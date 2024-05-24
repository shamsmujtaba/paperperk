<?php

/* Template Name: Services Page Design */
 get_header(); 
?>



    <div class="hero-bg d-flex justify-content-center align-items-center">



        <ul class="circles">

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



        <div class="container img-z-index">



            <div class="row">



                <div class="col-md-8 d-flex justify-content-center align-items-center ">



                    <div class="head-content-div">



                        <div class="text-white">



                            <h1 class="heading-big mb-3"><?php the_field('h1') ?></h1>



                            <div class="head-sm-text-white mb-3"><?php the_field('h1_paragraph') ?>

                            </div>

                            



                            <div class="btns-hd">
								
								<a class="btn btn-custom btn-light-blue btn-shadow" href="https://order.paperperk.com/"><?php the_field('header_order_button_text') ?></a>

                                <a class="btn btn-custom btn-yellow btn-shadow" href="javascript:void(Tawk_API.toggle())">Chat Now</a>
								
							</div>



                        </div>



                    </div>



                </div>



                <div class="col-md-4">



                    <?php get_template_part('includes/section', 'orderForm') ?>



                </div>



            </div>



        </div>



    </div>





    <!-- ----------Blue Bar------------ -->



    <!-- -----------------Section-2 --------------- -->



   <div class="container write-a-paper-section-tb-padding position-relative mrgn-btm1">

    <h2 class="mb-4"><?php the_field('universities_slider_heading') ?></h2>

    

    <div class="university-logo-slider slider mt-5">


      <div class="custom-card slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-1.png" alt="university-logo-1" class="w-100 p-4">

      </div>


      <div class="custom-card slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-2.png" alt="university-logo-2" class="w-100 p-4">

      </div>

      <div class="custom-card slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-3.png" alt="university-logo-3" class="w-100 p-4">

      </div>


      <div class="custom-card  slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-4.png" alt="university-logo-3" class="w-100 p-4">

      </div>


      <div class="custom-card slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-5.png" alt="university-logo-4" class="w-100 p-4">

      </div>

      <div class="custom-card slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-6.png" alt="university-logo-5" class="w-100 p-4">

      </div>

      <div class="custom-card slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-7.png" alt="university-logo-7" class="w-100 p-4">

      </div>

      <div class="custom-card slide">

        <img src="<?php bloginfo('template_directory'); ?>/images/university-logo-8.png" alt="university-logo-8" class="w-100 p-4">

      </div>

    </div>
 
   <div class="custom-arrow custom-arrow-left">

     <i class="fas fa-chevron-left"></i>

    </div>

    <div class="custom-arrow custom-arrow-right">

     <i class="fas fa-chevron-right"></i> 

    </div>

  </div>



    <!-- ------------------------Section-3 Our Features------------------- -->



    <div class="container-fluid write-a-paper-section-tb-padding" id="our-features">



        <div class="container">

        <div class="section-sub-head mb-2"><?php the_field('upper_features_small_title') ?></div>

            <h2 class="mb-4"><?php the_field('best_features_out_of_the_box_heading') ?></h2>



            <div class="row mt-5">



                <div class="col-md-7">



                    <div class="row">



                        <div class="col-md-6">



                            <div class="custom-card p-4 text-center">



                                <div class="card-sm-title mb-3 text-uppercase text-black"><img

                                        src="<?php bloginfo('template_directory'); ?>/icons/best-writer.png" alt="best-writer"> The Best Writer</div>



                                <!-- <div class="writer-divider mb-2"> </div> -->



                                <div class="mt-4">



                                    <span class="grey-badge"> $4.99</span>



                                    <span class="red-badge"> FREE</span>



                                </div>



                            </div>



                        </div>

                        <div class="col-md-6 pt-01">



                            <div class="custom-card p-4 text-center ">



                                <div class="card-sm-title mb-3 text-uppercase text-black"><img src="<?php bloginfo('template_directory'); ?>/icons/outline.png"

                                        alt="outline"> Outline</div>



                                <!-- <div class="writer-divider mb-2"> </div> -->



                                <div class="mt-4">



                                    <span class="grey-badge"> $7.99</span>



                                    <span class="red-badge"> FREE</span>



                                </div>



                            </div>



                        </div>



                    </div>



                    <div class="row mt-4">



                        <div class="col-md-6">



                            <div class="custom-card p-4 text-center">



                                <div class="card-sm-title mb-3 text-uppercase text-black"><img

                                        src="<?php bloginfo('template_directory'); ?>/icons/title-page.png" alt="title-page"> Title Page</div>



                                <!-- <div class="writer-divider mb-2"> </div> -->



                                <div class="mt-4">



                                    <span class="grey-badge"> $4.99</span>



                                    <span class="red-badge"> FREE</span>



                                </div>



                            </div>



                        </div>

                        <div class="col-md-6 pt-01">



                            <div class="custom-card p-4 text-center">



                                <div class="card-sm-title mb-3 text-uppercase text-black"><img

                                        src="<?php bloginfo('template_directory'); ?>/icons/page-formatting.png" alt="page-formatting"> Formatting</div>



                                <!-- <div class="writer-divider mb-2"> </div> -->



                                <div class="mt-4">



                                    <span class="grey-badge"> $12.99</span>



                                    <span class="red-badge"> FREE</span>



                                </div>



                            </div>



                        </div>



                    </div>



                    <div class="row mt-4">



                        <div class="col-md-6 offset-md-3">



                            <div class="custom-card p-4 text-center">



                                <div class="card-sm-title mb-3 text-uppercase  text-black"><img

                                        src="<?php bloginfo('template_directory'); ?>/icons/plagiarism-report.png" alt="plagiarism-report"> Plagiarism Report</div>



                                <!-- <div class="writer-divider mb-2"> </div> -->



                                <div class="mt-4">



                                    <span class="grey-badge"> $23.99</span>



                                    <span class="red-badge"> FREE</span>



                                </div>



                            </div>



                        </div>



                    </div>



                </div>



                <div class="col-md-5 fea-img">



                    <img src="<?php bloginfo('template_directory'); ?>/images/service-pg-cta-1.png" alt="service-pg-cta-1">



                </div>



            </div>



        </div>

    </div>



    <!-- ----------------------------Section-4 Writers----------------------------- -->



    <div class="container-fluid write-a-paper-section-tb-padding section-bg-color" id="hire-writer">



        <div class="container">



            <div class="section-sub-head">FORCE BEHIND US </div>



            <h2 class="mb-4"><?php the_field('writers_slider_heading') ?></h2>



            <p class="text-center"><?php the_field('writers_slider_paragraph') ?> </p>



            <?php get_template_part('includes/section', 'writer-team') ?>



        </div>



    </div>





    <!-- ----------------------------Section-5 Testimonials----------------------------- -->



    <div class="container-fluid write-a-paper-section-tb-padding bg-blue position-relative" id="testimonials-section">



        <div class="container">



            <div class="section-sub-head text-yellow">TESTIMONIALS</div>



            <div class="row" >
                
                <h2 class="mb-4 text-white"><?php the_field('testimonials_slider_heading') ?></h2>



                <p class="text-center text-white"><?php the_field('testimonials_slider_paragraph') ?> </p>

            </div>


        </div>



    </div>



    <div class="container write-a-paper-section-tb-padding" id="customer-reviews">

        <!-- ----------testimonial carousal--------- -->



        <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">


            
        <div class="carousel-inner  customer-logos slider">
            <?php if (have_rows('testimonials_slider')) : ?>
            <?php while (have_rows('testimonials_slider')) : the_row(); ?>
                <div class="carousel-item active slide">
                    <div class="testimonial-card">
                        <div class="white-box-round">
                            <div class="test-head">
                                <h3><?php the_sub_field('subject_review'); ?></h3>
                            </div>
                            <div class="test-body">
                                <div class="card-sm-title text-center"><?php the_sub_field('review_title'); ?></div>
                                <ul class="rating rating-color text-center p-0 mt-1">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                                        class="fa fa-star"></i><i class="fa fa-star"></i>
                                </ul>
                                <div class="review-text">
                                    <?php the_sub_field('client_testimonials'); ?>
                
                
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 col-4">
                
                                            <div class="box-img w-100"><img
                                                    src="<?php bloginfo('template_directory'); ?>/images/jane-doe.webp" alt="Liam Hardon"></div>
                                        </div>
                
                                        <div class="col-md-8 p-0 col-8">
                
                                            <div class="reviewer-name">
                                                <?php the_sub_field('client_name'); ?>
                                            </div>
                
                                            <div class="reviewer-desc"><?php the_sub_field('university_name'); ?></div>
                
                                        </div>
                
                                    </div>
                
                                </div>
                
                            </div>
                
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

            

    </div>



    </div>



    </div>







<!-- -------------------------Section-6 Why We Are The Best--------------------------- -->



<div class="container-fluid section-bg-color">



        <div class="container write-a-paper-section-tb-padding px-5">



            <div class="section-sub-head">WHY WE ARE THE BEST? </div>



            <h2 class="mb-4"><?php the_field('why_we_are_the_best_heading') ?></h2>



            



            <div class="row mt-5 px-3">



                <div class="col-md-4 col-sm-6 text-center counter-section wow fadeInUp sm-margin-bottom-ten animated">

                    <img src="<?php bloginfo('template_directory'); ?>/icons/100-percent-original.png" alt="100-percent-original">

                    <span id="anim-number-pizza" class="counter-number"></span>

                    <h5 class=" mt-3 "><?php the_field('first_quality_title') ?>

                    </h5>

                    <p class="text-center px-2 m-pb"><?php the_field('first_quality_paragraph') ?>

                    </p>

                </div>



                <div class="col-md-4 col-sm-6 text-center counter-section">

                    <img src="<?php bloginfo('template_directory'); ?>/icons/timely-delivered.png" alt="timely-delivered">

                    <h5 class="mt-3"><?php the_field('second_quality_title') ?>

                    </h5>

                    <p class="text-center px-2 m-pb"><?php the_field('second_quality_paragraph') ?>



                    </p>

                </div>



                <div class="col-md-4 col-sm-6  text-center counter-section">

                    <img src="<?php bloginfo('template_directory'); ?>/icons/money-back-guarantee-icon.png" alt="money-back-guarantee-icon">

                    <h5 class="mt-3"><?php the_field('third_quality_title') ?></h5>

                    <p class="text-center px-2"><?php the_field('third_quality_paragraph') ?>



                    </p>

                </div>



            </div>



        </div>



</div>



    <!-- ----------------------------Section-7 Order Steps----------------------------- -->



    <div class="container write-a-paper-section-tb-padding position-">



        <div class="section-sub-head">FOLLOW THESE STEPS </div>



        <h2 class="mb-4"><?php the_field('orders_steps_heading') ?></h2>



        <p class="text-center"><?php the_field('orders_steps_paragraph') ?>



        </p>



        <div class="row mt-5">

            <!-- Order Step 1 -->

            <div class="col-md-4 col-sm-6 bottom-margin text-center px-4">



                <img src="<?php bloginfo('template_directory'); ?>/images/step-1-img.png" alt="Provide Details" class="img-fluid img-z-index">



                <div class="card-sm-title mb-3">Step 1: <?php the_field('step_1_title') ?> </div>



                <p class="m-pb"><?php the_field('step_1_paragraph') ?></p>



            </div>

            <!-- end order-step-1 -->



            <!-- Order Step 2 -->

            <div class="col-md-4 col-sm-6 bottom-margin text-center px-4">



                <img src="<?php bloginfo('template_directory'); ?>/images/step-2-img.png" alt="step-2-img" class="img-fluid img-z-index">



                <div class="card-sm-title mb-3">Step 2: <?php the_field('step_2_title') ?> </div>



                <p class="m-pb"><?php the_field('step_2_paragraph') ?>

                </p>



                <img src="<?php bloginfo('template_directory'); ?>/images/order-steps-left-arrow.png" alt="order-steps-left-arrow" class="writing-paper-help-lft-arrow d-none">



            </div>



            <!-- end order-step-2 -->



            <!-- Order Step 3 -->

            <div class="col-md-4 col-sm-6 bottom-margin-small text-center px-4">



                <img src="<?php bloginfo('template_directory'); ?>/images/step-img-3.png" alt="step-img-3" class="img-fluid img-z-index">



                <div class="card-sm-title  mb-3">Step 3: <?php the_field('step_3_title') ?></div>



                <p class=""><?php the_field('step_3_paragraph') ?> </p>



                <img src="<?php bloginfo('template_directory'); ?>/images/order-steps-right-arrow.png" alt="order-steps-right-arrow" class="writing-paper-help-right-arrow d-none">



            </div>





            <!-- end order-step-3 -->





        </div>



        <div class="text-center mt-5"><a class="btn btn-custom btn-light-blue best-paper-writing-service-order-now-btn"

                href="https://order.paperperk.com/">Order Now</a></div>



    </div>



    <!-- ---------------------------------Section-8 CTA----------------------------------------->



    <div class="container-fluid cta-order-now bg-blue">



        <div class="container">



            <div class="row">



                <div class="col-md-6">



					<div class="cta-img-nw"><img src="<?php bloginfo('template_directory'); ?>/images/service-pg-cta-2.png" alt="service-pg-cta-2"></div>



                </div>



                <div class="col-md-6 d-flex align-items-center">



                    <div class="px-3 cta-txt-nw">



                        <h2 class="text-start text-white lh-base" style="font-size: 27px;"><?php the_field('cta_text') ?></h2>

                        

                        <a class="btn btn-custom btn-yellow btn-shadow mt-4 mb-3" href="https://order.paperperk.com/">Order Now</a>

                    

                    </div>



                </div>



            </div>



        </div>

        

    </div>



    <!-- ----------------------------Section-11 Frequently Asked Questions----------------------- -->



    <div class="container-fluid write-a-paper-section-tb-padding section-bg-color" id="faqs-section">



        <div class="container">



            <div class="section-sub-head">FAQS</div>



            <h2 class="mb-4"><?php the_field('faqs_heading') ?></h2>





            <!-- -----Accordian----- -->



             <div class="row mt-5">



                <div class="col-md-6">



                    <div class="faq" id="accordion">
                    <?php $faq_index = 0; // Initialize FAQ index ?>
                    <?php if (have_rows('faqs_details')) : ?>
                        <?php while (have_rows('faqs_details')) : the_row(); ?>
                            <div class="card">
                                <?php $faq_index++; // Increment FAQ index for each FAQ ?>
                                <div class="card-header" id="faqHeading-<?php echo $faq_index; ?>">
                                    <div class="mb-0 d-flex align-items-center">
                                        <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-<?php echo $faq_index; ?>"
                                            aria-expanded="true" aria-controls="faqCollapse-<?php echo $faq_index; ?>">
                                            <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon"></span><?php the_sub_field('faq_question'); ?>
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-<?php echo $faq_index; ?>" class="collapse" aria-labelledby="faqHeading-<?php echo $faq_index; ?>"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p><?php the_sub_field('faq_answer'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>


                </div>



                <div class="col-md-6">


                     <div class="faq" id="accordion">
                            <?php $faq_index = 10; // Initialize FAQ index ?>
                            <?php if (have_rows('faqs_details_right')) : ?>
                                <?php while (have_rows('faqs_details_right')) : the_row(); ?>
                                    <div class="card">
                                        <?php $faq_index++; // Increment FAQ index for each FAQ ?>
                                        <div class="card-header" id="faqHeading-<?php echo $faq_index; ?>">
                                            <div class="mb-0 d-flex align-items-center">
                                                <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-<?php echo $faq_index; ?>"
                                                    aria-expanded="true" aria-controls="faqCollapse-<?php echo $faq_index; ?>">
                                                    <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon"></span><?php the_sub_field('faq_question'); ?>
                                                </h5>
                                            </div>
                                        </div>
                                        <div id="faqCollapse-<?php echo $faq_index; ?>" class="collapse" aria-labelledby="faqHeading-<?php echo $faq_index; ?>"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                <p><?php the_sub_field('faq_answer'); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    

                </div>

            </div>

        </div>



    </div>



    <!-- ----------------------------Section-12 Content Area------------------------- -->



   <div class="container-fluid write-a-paper-section-tb-padding" id="content-area">



        <div class="container">



            <div class="section-content">



                <div class="scrollable-div">



                    <div class="row">
                        
                         <div class="col-md-6">
                             
                              <div class="row">
                            <?php  if( have_rows('scrollable_content_left') ): ?>
                            <?php  while( have_rows('scrollable_content_left') ) : the_row(); ?>
                                <div class="col-md-12">
        
        
        
                                    <div class="scroll-inner-cont ">
        
        
        
                                        <div class="d-flex align-items-center justify-content-center">
        
        
        
                                            <img src="<?php bloginfo('template_directory'); ?>/icons/writing-icon.png" alt="writing-icon" class="mx-3">
        
        
        
                                            <span class="content-area-title"><?php the_sub_field('content_title'); ?></span>
        
        
        
                                        </div>
        
        
        
                                        <p class="mt-3"><?php the_sub_field('content_description'); ?></p>
        
        
        
                                    </div>
        
        
        
                                </div>
                                <?php endwhile; ?>
                                 <?php endif; ?>
 
                              </div> 
                             
                         </div>
                        
                       
                        <div class="col-md-6">
                            <?php  if( have_rows('scrollable_content_right') ): ?>
                            <?php  while( have_rows('scrollable_content_right') ) : the_row(); ?>
                            <div class="col-md-12">
    
    
    
                                <div class="scroll-inner-cont ">
    
    
    
                                    <div class="d-flex align-items-center justify-content-center">
    
    
    
                                        <img src="<?php bloginfo('template_directory'); ?>/icons/writing-icon.png" alt="writing-icon5" class="mx-3">
    
    
    
                                        <h3><span class="content-area-title"><?php the_sub_field('content_title'); ?></span></h3>
    
    
    
                                    </div>
    
    
    
                                    <p class="mt-3"><?php the_sub_field('content_description'); ?></p>
    
    
    
                                </div>
    
    
    
                            </div>
                            <?php endwhile; ?>
                                 <?php endif; ?>
                        </div>
                         
                       <div class="col-md-12">
                <?php if (have_rows('scrollable_last_row')) : ?>
                    <?php while (have_rows('scrollable_last_row')) : the_row(); ?>
                        <div class="scroll-inner-cont">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="<?php bloginfo('template_directory'); ?>/icons/writing-icon.png" alt="writing-icon9" class="mx-3">
                                <h3><span class="content-area-title"><?php the_sub_field('scrollable_content_last_full_row_title') ?></span></h3>
                            </div>
                            <p class="mt-3"><?php the_sub_field('scrollable_content_last_full_row_description') ?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>


                    </div>

                </div>

            </div>


        </div>



    </div>



 <div class="section-bg-color pt-5 pb-5">



        <div class="container">



            <div class="row">



                <div class="col-md-4 dotted-border">



                    <div class="d-flex align-items-center justify-content-center p-3">



                        <div class="row">



                            <div class="col-md-4 f-img">



                                <img src="<?php bloginfo('template_directory'); ?>/icons/24-hr-support.png" class="w-100" alt="24-hr-support">



                            </div>



                            <div class="col-md-8">



                                <div class="paper-writing-service-blue-small-heading mb-2 center-t">24/7 Support</div>



                                <p>Connections with Writers and support</p>



                            </div>



                        </div>



                    </div>



                </div>



                <div class="col-md-4 dotted-border">



                    <div class="d-flex align-items-center justify-content-center p-3">



                        <div class="row">



                            <div class="col-md-4 f-img">



                                <img src="<?php bloginfo('template_directory'); ?>/icons/safe-service.png" class="w-100" alt="safe-service">



                            </div>



                            <div class="col-md-8">



                                <div class="paper-writing-service-blue-small-heading mb-2 center-t">Safe Service</div>



                                <p>Privacy and Confidentiality Guarantee</p>



                            </div>



                        </div>

                    </div>



                </div>



                <div class="col-md-4 ">



                    <div class="d-flex align-items-center justify-content-center p-3">



                        <div class="row">



                            <div class="col-md-4 f-img">



                                <img src="<?php bloginfo('template_directory'); ?>/icons/quality-score.png" class="w-100" alt="quality-score">



                            </div>



                            <div class="col-md-8">



                                <div class="paper-writing-service-blue-small-heading mb-2 center-t">4.72</div>



                                <p class="mb-0">Average Quality Score</p>



                                <div class="d-flex justify-content-between align-items-center">

                                    <div class="small-ratings">

                                        <i class="fa fa-star rating-color"></i>

                                        <i class="fa fa-star rating-color"></i>

                                        <i class="fa fa-star rating-color"></i>

                                        <i class="fa fa-star rating-color"></i>

                                        <i class="fa fa-star rating-color"></i>

                                    </div>

                                </div>



                            </div>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



<?php get_footer(); ?>