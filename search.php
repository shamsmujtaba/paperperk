<?php get_header(); ?>
<style>
    .page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
    
}
.page-title{
    font-size: 40px;
}
.entry-title{
    text-align:left;
    font-size: 25px;
}
</style>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
     <div class="container">
      <div class="row">
        <header class="page-header">
            <h1 class="page-title">Search Results For: <?php echo esc_html(get_search_query()); ?></h1>
        </header>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title">
                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                        </h2>
                    </header>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php the_posts_pagination(); ?>
        <?php else : ?>
            <p>No results found.</p>
        <?php endif; ?>

    </main>
</div>


<?php get_footer(); ?>
