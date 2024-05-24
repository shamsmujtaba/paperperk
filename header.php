<!doctype html>

<html lang="en">
<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" loading="lazy" rel="stylesheet"

    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" loading="lazy" crossorigin="anonymous" onload="this.media='all'" >

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" loading="lazy" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"  onload="this.media='all'"/>

    



  <!--<link rel="preconnect" href="https://fonts.googleapis.com" onload="this.media='all'">-->

  <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet preload' onload="this.media='all'">

  <!--<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>-->



 <!--<link rel="stylesheet" href="https://paperperk.com/wp-content/themes/theme/custom.css">-->

  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" loading="lazy" onload="this.media='all'">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" loading="lazy" onload="this.media='all'">
  <?php if (is_page('pricing')) : ?>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js" integrity="sha512-DNeDhsl+FWnx5B1EQzsayHMyP6Xl/Mg+vcnFPXGNjUZrW28hQaa1+A4qL9M+AiOMmkAhKAWYHh1a+t6qxthzUw==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css" integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg==" crossorigin="anonymous" loading="lazy" onload="this.media='all'" />
<?php endif; ?>


  <?php wp_head(); ?>

<meta property="og:image" content="https://paperperk.com/wp-content/themes/theme/images/paper-perk-logo-1.png" />

</head>



<body>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"

    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"

    crossorigin="anonymous"></script>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"

    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"

    crossorigin="anonymous"></script>
    <style>
    .sticky-header{
    position: sticky;
    top: 0px;
    z-index: 999999999999999999999;
}
    </style>

  <!-- ---------NAVBAR------------ -->



  <div class="nav-container img-z-index sticky-header">



    <div class=" top-navbar">



      <div class="container">



        <div class="row">



          <div class="col-md-12 d-flex align-items-center">



            <div class="btn btn-sm navbar-btn mx-1" style="z-index:9999999999999;"><i class="fas fa-phone"></i> <a href="tel:+1 213 318 4345"

                class="text-white text-decoration-none">+1 213 318 4345</a></div>



            <div class="btn btn-sm navbar-btn mx-1" style="z-index:9999999999999;"> <i class="fas fa-envelope"></i> <a href="mailto:info@paperperk.com"

                class="text-white text-decoration-none" >info@paperperk.com</a> </div>



          </div>

          <!-- 

      <div class="col-md-6">





      </div> -->



        </div>



      </div>



    </div>

    <nav class="navbar navbar-expand-sm navbar-light" id="neubar">



      <div class="container">



        <a id="logo" href="<?= get_bloginfo('wpurl') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/paper-perk-logo-1.png" alt="logo-1" /> </a>



        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"

          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">



          <span class="fa fa-bars"></span>



        </button>



        <div class=" collapse navbar-collapse" id="navbarNavDropdown">



          <ul class="navbar-nav ms-auto ">

            <li class="nav-item">



              <a class="nav-link " href="<?= get_bloginfo('wpurl') ?>/our-writers">Our Writers</a>

            </li>



            <li class="nav-item">



              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/blog">Blog</a>



            </li>



            <li class="nav-item dropdown dropdown-mega position-static">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Services</a>
                <div class="dropdown-menu shadow">
                  <div class="mega-content">
                    <div class="container-fluid">
                      <div class="row meg-1">
                        <div class="col-12 col-sm-4 col-md-3 py-4">
							
							<ul>
							
								<li><a class="dropdown-item" href="https://paperperk.com/services/medical-research-paper-writing">Medical Research Paper</a></li>
								
								<li><a class="dropdown-item" href="https://paperperk.com/services/history-paper-writing-service">History Paper</a></li>
								
								<li><a class="dropdown-item" href="https://paperperk.com/services/phd-research-paper-writing">Ph.D Research Paper</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/nursing-research-paper-writing"> Nursing Paper</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/research-paper-writing">Research Paper</a></li>
							
							</ul>
							
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 py-4">
							
							<ul>
							
								<li><a class="dropdown-item" href="https://paperperk.com/services/college-paper-writing-service">College Paper Writing</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/thesis-writing-service">Thesis Writing Service</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/term-paper-writing-service">Term Paper Writing Service</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/dissertation-writing-service">Dissertation Writing Service</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/coursework-writing-service">Coursework Writing Service</a></li>
							
							</ul>
							
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 py-4">
							
							<ul>
							
								<li></li>
								
								<li><a class="dropdown-item" href="https://paperperk.com/services/assignment-writing-services">Assignment Writing Service</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/essay-writing-services">Essay Writing Service</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/help-on-my-paper">Help on my Paper</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/write-my-paper">Write My Paper</a></li>
							
							</ul>
							
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 py-4">
							
							<ul>
							
								<li></li>
								
								<li><a class="dropdown-item" href="https://paperperk.com/services/pay-for-paper">Pay For Paper</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/buy-paper-online">Buy Paper Online</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/write-my-dissertation">Write My Dissertation</a></li>
								
                                <li><a class="dropdown-item" href="https://paperperk.com/services/pay-for-dissertation">Pay For Dissertation</a></li>
							
							</ul>
							
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>



            <li class="nav-item">



              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/pricing">Pricing </a>



            </li>





            <li class="nav-item">



              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/free-tool">Free Tools</a>



            </li>

            

            <li class="nav-item">



              <a class="nav-link" href="<?= get_bloginfo('wpurl') ?>/reviews">Reviews</a>



            </li>



           




			  <span class="head-btns-diff">
			      
			      <li class="nav-item">



                    <a class="btn btn-custom btn-yellow btn-shadow" href="https://paperperk.com/free-tool/ai-essay-writer/">Ai Essay Writer</a>



                  </li>
			  
                  <li class="nav-item">



                    <a class="btn btn-custom btn-light-blue btn-shadow" href="https://order.paperperk.com/login"><i

                        class="fas fa-user mx-2"></i>Login</a>



                  </li>



                  <li class="nav-item">



                    <a class="btn btn-custom btn-yellow btn-shadow" href="https://order.paperperk.com">Order Now</a>



                  </li>
			  
			  </span>



          </ul>



        </div>



      </div>



    </nav>



  </div>