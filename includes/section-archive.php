<style>
    .abb {
    display: none;
}
#search-bar input[type=text] {
height: 45px;
    width: 40%;
    border: none;
    border-radius: 40px;
    padding: 10px 20px;
}

#search-bar{
margin-bottom:15px !important;
}

.searchButton{
    background-color: #1fb4df;
    color: white;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    padding:  10px 20px;
    border-radius: 100px;
    margin-right: 10px;
    border: none;
    width:180px;
}

@media (max-width: 550px){
    .searchButton{
    background-color: #1fb4df;
    color: white;
    font-size: 18px;
    font-weight: 500;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    padding:  10px 20px;
    border-radius: 100px;
    margin-right: 10px;
    border: none;
    
}

#search-bar input[type=text] {
    height: 44px;
    width: 40%;
    border: none;
    border-radius: 40px;
    padding: 10px 20px;
    margin-bottom: 10px;
}

#search-bar{
margin-bottom:15px !important;

}
@media (max-width: 768px){
   #search-bar input[type=text] {
    height: 44px;
    width: 100%;
    border: none;
    border-radius: 40px;
    padding: 10px 20px;
    margin-bottom: 10px;
} 
#search-bar
}
</style>

    <div class="hero-bg d-block text-center">

        <h1 class="heading-big mb-3 text-white">Blogs</h1>
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
           <div class="container" >
               <div class="row" >
               
                 <form id="search-bar" class="text-center" role="search" method="get" action="https://paperperk.com/blog/" style="z-index:1;">
                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search Blog..." required>
                            <input class="searchButton" type="submit" id="searchsubmit" value="Search">
                </form>
       
      
                </div>
           </div>
       
    </div>
 
                 
                 
    <!-- -----------------------Blogs Area------------------ -->
    <div class="container write-a-paper-section-tb-padding">
        <div class="container">
                     
                
                
                 
        <div class="row">
            <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>

            <div class="col-md-4">

                <div class="blog-box abb text-center ">

                    <a href="<?php the_permalink(); ?>">
                        <?php
                            if (has_post_thumbnail()) {
                            ?>
                        <img src="<?php the_post_thumbnail_url('blog-small'); ?>" class="img-responsive w-100" alt="<?php the_field('post_titile'); ?>" />
                         <?php
                            } else {
                            ?>
                            
                            <img src="<?php bloginfo('template_directory'); ?>/images/blog-img.webp" class="img-responsive" alt="blog-img" />

                            <?php } ?>
                        </a>

                    

                    <div class="blog-title-window text-start"><a href="<?php the_permalink(); ?>"><?php the_field('post_titile'); ?></a></div>

                    <div class="btn btn-custom btn-light-blue btn-blog"><a href="<?php the_permalink(); ?>"
                            class="text-white">Read More</a></div>

                </div>

            </div>
            
            <?php
            }
        }

        ?>

            

            

            <div class="text-center mt-5">

                <a href="#" id="load" class="text-white"><div class="btn btn-custom btn-light-blue btn-blog-load">
                    Load
                        More</div></a>

            </div>

        </div>

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

                <img src="<?php bloginfo('template_directory'); ?>/icons/24-hr-support.png" class="w-100" alt="24-hr-support">

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

                <img src="<?php bloginfo('template_directory'); ?>/icons/safe-service.png" class="w-100" alt="safe-service">

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
    
    
