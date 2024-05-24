<!doctype html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"

    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>



 <!--<link rel="stylesheet" href="https://paperperk.com/wp-content/themes/theme/custom.css">-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  

<?php if (is_page('free-tool/ai-essay-writer')) : ?>
<link rel="stylesheet" href="https://paperperk.com/wp-content/themes/theme/tools-css/customae48.css">
<?php 
endif; 
?>

  <?php wp_head(); ?>
	
<style>
.sticky-header{
    position: sticky;
    top: 0px;
    z-index: 999999999999999999999;
}

@media (max-width: 575.98px) {

.navbar .container, .navbar .container-fluid{
    width:100%!important;
}
.navbar .container::before, .navbar .container::after{
    content: none!important;
}
}

.py-4 {
    padding-top: 1.5rem!important;
    padding-bottom: 1.5rem!important;
}
.position-static {
    position: static!important;
}
#neubar .nav-item {
    margin: auto 4px;
}
#neubar .dropdown-item {
    color: rgb(54, 54, 54) !important;
}

.mega-content{
    padding: 14px 12px 15px 9px;
}
.dropdown-item{
    padding-bottom: 10px;
}

.dropdown-item:hover{
    background-color: #e9ecef;
    
}

</style>



</head>



<body>



  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"-->

  <!--  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"-->

  <!--  crossorigin="anonymous"></script>-->



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"

    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"

    crossorigin="anonymous"></script>





  <!-- ---------NAVBAR------------ -->



  <div class="nav-container img-z-index sticky-header">



    <div class=" top-navbar">



      <div class="container">



        <div class="row">



          <div class="col-md-12 d-flex align-items-center">



            <div class="btn btn-sm navbar-btn mx-1"><i class="fas fa-phone"></i> <a href="tel:+1 213 318 4345"

                class="text-white text-decoration-none" style=" font-size: 13px; ">+1

                213 318 4345</a></div>



            <div class="btn btn-sm navbar-btn mx-1"> <i class="fas fa-envelope"></i> <a href="mailto:info@paperperk.com"

                class="text-white text-decoration-none" style=" font-size: 13px; ">info@paperperk.com</a> </div>



          </div>

          <!-- 

      <div class="col-md-6">





      </div> -->



        </div>



      </div>



    </div>

    <nav class="nav navbar navbar-expand-sm navbar-light tools-menu-new" id="neubar">



      <div class="container">



        <a id="logo" href="<?= get_bloginfo('wpurl') ?>"><img src="<?php bloginfo('template_directory'); ?>/images/paper-perk-logo-1.png" alt="paper-perk-logo" /> </a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

            <span class="fa fa-bars"></span>
			
        </button>



        <div class=" collapse navbar-collapse" id="navbarNavDropdown">



          <ul class="nav navbar" style="align-items:end; justify-content:end;">



            <li class="nav-item dropdown dropdown-mega position-static">
  <a href="#" class=" nav-link dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li class="container-fluid">
      <!-- Using 'row' directly inside 'dropdown-menu' might not properly align with Bootstrap 3's styling.
           Consider wrapping the content inside a 'container-fluid' or 'container' for proper alignment. -->
      <div class="mega-content">
          <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 py-4">
          <ul class="list-unstyled">
            <li><a class="dropdown-item" href="https://paperperk.com/services/medical-research-paper-writing">Medical Research Paper</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/history-paper-writing-service">History Paper</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/phd-research-paper-writing">Ph.D Research Paper</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/nursing-research-paper-writing">Nursing Paper</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/research-paper-writing">Research Paper</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 py-4">
          <ul class="list-unstyled">
            <li><a class="dropdown-item" href="https://paperperk.com/services/college-paper-writing-service">College Paper Writing</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/thesis-writing-service">Thesis Writing Service</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/term-paper-writing-service">Term Paper Writing Service</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/dissertation-writing-service">Dissertation Writing Service</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/coursework-writing-service">Coursework Writing Service</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 py-4">
          <ul class="list-unstyled">
            <li><a class="dropdown-item" href="https://paperperk.com/services/assignment-writing-services">Assignment Writing Service</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/essay-writing-services">Essay Writing Service</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/help-on-my-paper">Help on my Paper</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/write-my-paper">Write My Paper</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3 py-4">
          <ul class="list-unstyled">
            <li><a class="dropdown-item" href="https://paperperk.com/services/pay-for-paper">Pay For Paper</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/buy-paper-online">Buy Paper Online</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/write-my-dissertation">Write My Dissertation</a></li>
            <li><a class="dropdown-item" href="https://paperperk.com/services/pay-for-dissertation">Pay For Dissertation</a></li>
          </ul>
        </div>
      </div>
      </div>
    </li>
  </ul>
</li>



            <li class="nav-item">



              <a class="btn btn-custom btn-yellow btn-shadow" href="https://paperperk.com/free-tool/ai-essay-writer/">Ai Essay Writer</a>



            </li>


            <li class="nav-item">



              <a class="btn btn-custom btn-light-blue btn-shadow" href="https://order.paperperk.com/login"><i

                  class="fas fa-user mx-2"></i>Login</a>



            </li>



            <li class="nav-item">



              <a class="btn btn-custom btn-yellow btn-shadow" href="https://order.paperperk.com">Order Custom Essay</a>



            </li>



          </ul>



        </div>



      </div>



    </nav>



  </div>