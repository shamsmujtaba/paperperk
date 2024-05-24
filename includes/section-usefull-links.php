<div class="blogSideBar col-md-3 blog-det top-d relatedblogwrap relatedBlogsWidget sticky-sidebar"><div>
  <div class="scroll-container">
  <p style="text-align:center;">Useful Links</p>
  
  <div>
    <a href="<?=get_site_url()?>/services/nursing-research-paper-writing" target="_blank">
      Nursing Paper Writing Service
    </a>
  </div>
  <div>
    <a href="<?=get_site_url()?>/services/research-paper-writing" target="_blank">
      Research Paper Writing Service 
    </a>
  </div>
  <div>
    <a href="<?=get_site_url()?>/services/history-paper-writing-service" target="_blank">
       History Paper Writing Service 
    </a>
  </div>
  <div>
    <a href="<?=get_site_url()?>/services/term-paper-writing-service" target="_blank">
      Term Paper Writing Service
    </a>
  </div>
  <div>
    <a href="<?=get_site_url()?>/services/coursework-writing-service" target="_blank">
      Coursework Writing Service 
    </a>
  </div>
 
  <div>
    <a href="<?=get_site_url()?>/services/assignment-writing-services" target="_blank">
      Assignment Writing Services
    </a>
  </div>

 
  <div>
    <a href="<?=get_site_url()?>/services/thesis-writing-service" target="_blank">
      Thesis Writing Service 
    </a>
  </div>
</div>
<?php
// Get current post details
global $post;
$post_url = get_permalink();
$post_title = get_the_title();

// URL encode for sharing
$encoded_url = urlencode($post_url);
$encoded_title = urlencode($post_title);
?>

<div class="social-sharing" style=" margin-top: 43px; ">
    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" target="_blank">
        <img src="<?=get_site_url()?>/wp-content/themes/theme/images/facebook-sahring.png" alt="Share on Facebook"/>
    </a>

    <!-- Twitter -->
    <a href="https://twitter.com/intent/tweet?url=<?php echo $encoded_url; ?>&text=<?php echo $encoded_title; ?>" target="_blank">
        <img src="<?=get_site_url()?>/wp-content/themes/theme/images/3670151.png" alt="Share on Twitter"/>
    </a>

    <!-- LinkedIn -->
    <a  href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $encoded_url; ?>&title=<?php echo $encoded_title; ?>&summary=[Your-Blog-Summary]&source=<?php echo $encoded_url; ?>" target="_blank">
        <img src="<?=get_site_url()?>/wp-content/themes/theme/images/702300.png" alt="Share on LinkedIn"/>
        
    </a>

    
</div>
  </div>
  </div>