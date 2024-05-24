<?php
include('header.php');
?>
<style>
  .hd-ord-new-bn {
    padding-bottom: 20px;
    display: table;
    margin: 30px auto auto auto;
  }

  .hd-ord-new-bn a {
    background: #2dc1dd;
    border-radius: 4px;
    color: #FFFFFF;
    text-align: center;
    border: none;
    padding: 12px 24px;
    font-size: 18px;
    font-weight: 600;
    transition: all ease-in-out 0.2s;
  }

  .hd-ord-new-bn a:hover {
    background: #42c5eb;
    color: #fff;
    text-decoration: none;
    transition: all ease-in-out 0.2s;
  }

  .hd-form-head-new-bn {
    padding: 35px 20px 4px 20px;
    background-color: #fff;
  }

  .hd-form-head-new-bn .select-new-bn {
    font-size: 14px;
    color: #000;
    line-height: 1.3;
    padding: 11px 10px;
    width: 100%;
    max-width: 100%;
    margin: 0;
    box-shadow: none;
    border-radius: 0px;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background: #eaf6fa;
    background-image: url('<?php bloginfo('template_directory'); ?>/images/arrow-new-bn.svg');
    background-repeat: no-repeat, repeat;
    background-position: right .7em top 50%, 0 0;
    background-size: .65em auto, 100%;
    border: none;
  }

  .hd-form-head-new-bn .select-new-bn:last-child {}

  .hd-form-head-new-bn .select-new-bn::-ms-expand {
    display: none;
  }

  .hd-form-head-new-bn .select-new-bn:focus {
    border-color: #eee;
    color: #222;
    outline: none;
  }

  .hd-form-head-new-bn .select-new-bn option {
    font-weight: normal;
  }

  .hd-form-head-new-bn input[type="date"] {
    border-radius: 0px !important;
    border: none !important;
    box-shadow: none;
    padding: 3px;
    height: auto;
    background: #eaf6fa;
  }

  .hd-form-head-new-bn input[type="text"],
  .hd-form-hea-new-bnd input[type="email"],
  .hd-form-head-new-bn input[type="password"] {
    border-radius: 0px !important;
    border: none !important;
    box-shadow: none;
    padding: 10px;
    height: auto;
    background: #eaf6fa;
  }

  .hd-form-head-new-bn textarea {
    background: #eaf6fa;
    resize: none;
  }

  .inp-2 input[type="date"] {
    border-radius: 0px !important;
    border: none;
    box-shadow: none;
    padding: 10px;
    height: auto;
  }

  @media (max-width: 767px) {
    .inp-2 input[type="date"] {
      width: 100%;
    }

    .mob-gap {
      padding-top: 14px;
    }
  }

  @media (max-width: 991px) {
    .inp-2 input[type="date"] {
      width: 100%;
    }

    .mob-gap {
      padding-top: 14px;
    }
  }
</style>
</div>
<?php get_template_part('includes/section', 'blogcontent'); ?>

<?php get_footer(); ?>
<script>
	
$(document).ready(function(){
    $('.rel-blogs').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});	
	
</script>