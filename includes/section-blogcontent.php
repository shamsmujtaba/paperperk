<style>

.container-fluid-2{
    padding:20px 30px 0 30px;
}
  .blog-detail-sec  p{
        text-align: left;
}
.sticky-sidebar {
    position: sticky;
    top: 120px; 
}
.blog-detail-sec h1 {
    font-style: normal;
    font-weight: 500;
    font-size: 36px;
    line-height: 47px;
}
.ez-toc-title-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.numbering:first-of-type {
  counter-reset: heading heading-1 heading-2 heading-3 heading-4;
}

.numbering:before {
  counter-increment: heading;
  content: counter(heading) ". ";
}
.numbering-1:before {
  counter-increment: heading-1;
  content: counter(heading-1) ". ";
}
.numbering-2:before {
  counter-increment: heading-2;
  content: counter(heading-2) ". ";
}
.numbering-3:before {
  counter-increment: heading-3;
  content: counter(heading-3) ". ";
}
.numbering-4:before {
  counter-increment: heading-4;
  content: counter(heading-4) ". ";
}

.numbering-h3 {
  counter-increment: heading-h3 !important;
}

.numbering-h3:before {
  content: counter(heading-h3) ". " !important;
}
.bullets{
    display: list-item;
    margin-left : 1em; 
    }
h4{
    font-size: 1.3rem !important;
}  

/*-----Usefull Links----------*/
.leftwidgett-container {
    padding-top: 80px;
    padding-bottom: 80px;
    margin-right: 30px;
    margin-left: 4px;
}
.timer-big-num {
    font-size: 14px;
    padding-right: 7px;
}
.scroll-container {
       height: 390px;
    overflow-y: auto; 
}
.sidebar-single__properties-item p {
    font-size: 0.77rem;
}
.container-fluid {
    padding-left: 80px;
    padding-right: 80px;
}
.card-body {
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0px 0px 4px #33bae1;
    }

    .sidebar-single__header {
        text-align: center;
        margin-bottom: 20px;
    }

    .sidebar-single__title {
        font-size: 21px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .sidebar-single__order {
        background-color: #33bae1;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        font-weight: bold;
        transition: background-color 0.3s ease;
        margin-top: 10px;
    }

    .sidebar-single__order:hover {
    background-color: #14212b;
    color: white;
    }

    .sidebar-single__body {
        display: flex;
        justify-content: center;
    }

    .sidebar-single__properties {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .sidebar-single__properties-item {
        text-align: center;
    }

    .sidebar-single__properties-text {
        font-size: 14px;
        margin-top: 5px;
    }

    .bold {
        font-weight: bold;
    }

    .additional-icons {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .additional-icons img {
        margin: 0 10px;
    }
.df {
    display: flex;
}
 .social-sharing {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }

        .social-sharing a img {
            width: 30px;
            /* Adjust the size as needed */
            height: auto;
        }

        /*Blogs CSS*/
        .relatedBlogsWidget {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: 15px !important;
            border-radius: 8px;
        }

        /* Style the "People also read" heading */
        .relatedBlogsWidget div {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        /* Style the list of related blogs */
        .relatedblogwrap {
            list-style: none;
            height: 418px;
            
        }

        /* Style each related blog item */
        .relatedblogwrap div {
            margin-bottom: 10px;
        }

        /* Add a box shadow to each related blog item */
        .relatedblogwrap div a {
            display: block;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            font-size: 13px;
            color: #255360;
            font-weight: 600;
            justify-content: space-evenly;
            display: flex;
            align-items: center;
        }

        /* Change the box shadow on hover for a subtle effect */
        .relatedblogwrap div a:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        /* Style the SVG icon within each related blog item */
        .relatedblogwrap div a span svg {
            margin-right: 5px;
            fill: #3498db;
            /* Change the icon color to your liking */
        }
        .sidebar-single__properties-item p {
                text-align: center !important;
        }
        
 @media (max-width: 768px){
     .leftwidgett-container{
    padding-top: 40px;
    padding-bottom: 10px;
    margin-right: 0px;
    margin-left: 0px;}
    .mrgnright-calt{
    margin-right: 0px !important;
}
.bottom-d, .bt-div {
    order: 1 !important;
}
.relatedBlogsWidget {
    order: 3;
}
.top-d {
    order: 2;
}
.bottom-d {
    margin-bottom: 60px;
}
.blogSideBar {
    margin-bottom: 60px;
}
.relatedBlogsWidget {
    order:3;
}
.sticky-sidebar {
    top: 2rem !important ;
}
/*.relatedblogwrap, relatedBlogsWidget{*/
/*    display: none !important;*/
/*}*/
.sticky-sidebar {
    position: relative;
    top: 2rem !important;
}
.section-head.p-1b {
        padding-top: 4px;
        margin-bottom: 0px;
}
 }
@media (max-width: 480px){
    .leftwidgett-container{
    padding-top: 40px;
    padding-bottom: 10px;
    margin-right: 0px;
    margin-left: 0px;}
    .mrgnright-calt{
    margin-right: 0px !important;
}
/*.relatedblogwrap, relatedBlogsWidget{*/
/*    display: none !important;*/
/*}*/
.d-flex-global{
    display: none !important;
}
.sticky-sidebar {
    position: relative;
    top: 2rem !important;
}
}
@media (max-width: 320px){
    .leftwidgett-container{
    padding-top: 40px;
    padding-bottom: 10px;
    margin-right: 0px;
    margin-left: 0px;}
    .mrgnright-calt{
    margin-right: 0px !important;
}
.timer-big-num {
    font-size: 15px;
}
/*.relatedblogwrap, relatedBlogsWidget{*/
/*    display: none !important;*/
/*}*/
.sticky-sidebar {
    position: relative;
    top: 10rem !important;
}
}
 @media (max-width: 425px){
     .leftwidgett-container{
    padding-top: 80px;
    padding-bottom: 10px;
    margin-right: 0px;
    margin-left: 0px;}
    .mrgnright-calt{
    margin-right: 0px !important;
}
/*.relatedblogwrap, relatedBlogsWidget{*/
/*    display: none !important;*/
/*}*/
.sticky-sidebar {
    position: relative;
    top: 2rem !important;
}
 }
@media (max-width: 375px){
    .leftwidgett-container{
    padding-top: 80px;
    padding-bottom: 10px;
    margin-right: 0px;
    margin-left: 0px;}
    .mrgnright-calt{
    margin-right: 0px !important;
}
/*.relatedblogwrap, relatedBlogsWidget{*/
/*    display: none !important;*/
/*}*/
.sticky-sidebar {
    position: relative;
    top: 2rem !important;
}
}

</style>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $tag = get_the_tags();
        $post_tag =  $tag[0]->name;

        $post = get_post();
        $ID = $post->ID;
       
?>
    

    <div class="container-fluid blog-detail-sec write-a-paper-section-tb-padding">

        <div class="row df main-d">
                
            <div class="col-md-8 blog-det top-d">

                <h1 class="mb-3"><?php the_title(); ?></h1>

                <!--<img src="<?php the_post_thumbnail_url('blog-extra-large'); ?>" alt="blog image" class="w-100 mb-4"  loading="lazy" >-->

                <?php the_content(); ?>

            </div>

            <div class="col-md-4 bottom-d right-form mrgnright-calt ">
                <div class="side-win-new ">
    <div class="card-body sidebar-single">

        <div class="sidebar-single__header">
            <p class="sidebar-single__title" style="display: flex; justify-content: center;">Order Original Papers & Essays</p>
            <p style="display: flex; justify-content: center;" class="sidebar-single__titlee">Your First Custom Paper Sample is on Us!</p>
            <a href="https://order.paperperk.com/" id="btn_analitick" class="sidebar-single__order btn btn-paper">Hire a Writer Free</a>
        </div>

        <div class="sidebar-single__body">

            <div class="sidebar-single__body-item sidebar-single__properties">
                <div class="sidebar-single__properties-item">
                    <img class="lozad" width="40" height="40" <img src="<?php bloginfo('template_directory') ?>/images/timely-deliveries.png" width="360" height="356" loading="lazy" class="img-responsive" alt="timely deliveries">
                    <p>Timely Deliveries</p>
                </div>
                <div class="sidebar-single__properties-item">
                    <img class="lozad" width="40" height="40" <img src="<?php bloginfo('template_directory') ?>/images/premium-quality.png" width="360" height="356" loading="lazy" class="img-responsive" alt="premium quality">
                    <p>No Plagiarism & AI</p>
                </div>
                <div class="sidebar-single__properties-item">
                    <img class="lozad" width="40" height="40" <img src="<?php bloginfo('template_directory') ?>/images/unlimited-revisions.png" width="360" height="356" loading="lazy" class="img-responsive" alt="unlimited revisions">
                    <p>100% Refund</p>
                </div>
            </div>

        </div>
    </div>


</div>

                <div class="row sticky-sidebar">
                    <?php get_template_part('includes/section', 'orderformblogs') ?>
                </div>

            </div>
        </div>

    </div>


    <!-- -----------------------Related Blogs------------------ -->
    <div class="container write-a-paper-section-tb-padding pt-0">

        <div class="section-sub-head"> Explore More</div>

        <h2 class="mb-5">Related Blogs</h2>

        <div class="row">
 <?php

                            $original_query = $wp_query;
                            $wp_query = null;
                            $args = array('posts_per_page' => 3, 'tag' => $post_tag, 'post__not_in' => array($ID));
                            $wp_query = new WP_Query($args);
                                       
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    

                            ?>
            <div class="col-md-4">
               

                <div class="blog-box text-center">

                    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('blog-small'); ?>" class="img-responsive w-100" alt="blog-img"  loading="lazy"/></a>

                    

                    <div class="blog-title-window"><a href="<?php the_permalink(); ?>"><?= the_title(); ?></a></div>

                    <div class="btn btn-custom btn-light-blue btn-blog"><a href="<?php the_permalink(); ?>"
                            class="text-white">Read More</a></div>

                </div>
                                
            </div>
<?php
                                endwhile;
                            endif;

                            $wp_query = null;
                            $wp_query = $original_query;
                            wp_reset_postdata();



                            ?>
           

            

        </div>

    </div>


    <!-- -----------------Section - 24-hours Support --------------- -->

    <div class="section-bg-color pt-5 pb-5">

    <div class="container">

      <div class="row">

        <div class="col-md-4 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row support-card">

              <div class="col-md-4">

                <img src="<?php bloginfo('template_directory'); ?>/icons/24-hr-support.png" class="w-100" alt="24 hr support">

              </div>

              <div class="col-md-8">

                <div class="paper-writing-service-blue-small-heading mb-2">24/7 Support</div>

                <p>Connections with Writers and support</p>

              </div>

            </div>

          </div>

        </div>

        <div class="col-md-4 dotted-border">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row support-card">

              <div class="col-md-4">

                <img src="<?php bloginfo('template_directory'); ?>/icons/safe-service.png" class="w-100" alt="safe service" loading="lazy">

              </div>

              <div class="col-md-8">

                <div class="paper-writing-service-blue-small-heading mb-2">Safe Service</div>

                <p>Privacy and Confidentiality Guarantee</p>

              </div>

            </div>
          </div>

        </div>

        <div class="col-md-4 ">

          <div class="d-flex align-items-center justify-content-center p-3">

            <div class="row support-card">

              <div class="col-md-4 ">

                <img src="<?php bloginfo('template_directory'); ?>/icons/quality-score.png" class="w-100" alt="quality-score">

              </div>

              <div class="col-md-8">

                <div class="paper-writing-service-blue-small-heading mb-2">4.72</div>

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
<?php
    }
}

?>