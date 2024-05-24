<?php
/* Template Name: Tools Page Design */
get_header('tools');
?>




<div class="container-fluid padding-tb-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h1 class="center margin-b-1 "><?php echo wp_kses_post( get_field('main_section')['h1_title'] ); ?></h1>
                <p class="text-center margin-b-2 "><?php echo wp_kses_post( get_field('main_section')['h1_description'] ); ?>
                </p>
                
                <h2 class="center margin-b-1 "><?php echo wp_kses_post( get_field('main_section')['h2_heading'] ); ?></h2>
                <p class="text-center margin-b-2 "><?php echo wp_kses_post( get_field('main_section')['h2_description'] ); ?>
                </p>
               

            </div>

        </div>

        <!-- Spelling Checker -->
        

    </div>
</div>
<?php the_field('tool_code_section'); ?>

<div class="container padding-b-3">

    <div class="row">

        <div class="col-md-12">

            <h2 class="margin-b-2"><?php echo wp_kses_post( get_field('steps_section')['title'] ); ?></h2>
        </div>

    </div>

    <div class="row p-6">

        <div class="mb-2">

            <p class="text-center"><?php echo wp_kses_post( get_field('steps_section')['description'] ); ?></p>

        </div>

    </div>

    <div class="row padding-t-2">

        <div class="col-md-4 col-xs-4">

            <div class="big-num"> 01</div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="big-num"> 02</div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="big-num"> 03</div>

        </div>

    </div>

    <div class="row steps-dot">

        <div class="col-md-4 col-xs-4">

            <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps-dot" /></div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps-dot2" /></div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps-dot3" /></div>

        </div>

    </div>

    <div class="row padding-t-2">

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/upload-icon.png" alt="step-image-size" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading"><?php echo wp_kses_post( get_field('steps_section')['step_1_title'] ); ?></h4>
                    </div>

                    <p><?php echo wp_kses_post( get_field('steps_section')['step_1_description'] ); ?></p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/scan-icon.png" alt="step-image-size2" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading"><?php echo wp_kses_post( get_field('steps_section')['step_2_title'] ); ?></h4>
                    </div>

                    <p><?php echo wp_kses_post( get_field('steps_section')['step_2_description'] ); ?></p>
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/report-icon.png" alt="step-image-size3" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading"><?php echo wp_kses_post( get_field('steps_section')['step_3_title'] ); ?> </h4>
                    </div>
                    <p><?php echo wp_kses_post( get_field('steps_section')['step_3_description'] ); ?></p>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- Other Tools -->
<div class="container-fluid background-light">
    <div class="container padding-tb-3">

        <div class="row headline">

            <div class="col-md-12">

                <h2 class="margin-b-1"><?php echo wp_kses_post( get_field('other_tools_slider')['title'] ); ?></h2>

                <p class="text-center"><?php echo wp_kses_post( get_field('other_tools_slider')['description'] ); ?></p>

            </div>

        </div>

         <?php get_template_part('includes/section', 'othertools') ?>

    </div>
</div>


<!-- FAQs -->

<div class="container padding-tb-3">

    <div class="row headline">

        <div class="col-md-12">

            <h2><?php echo esc_html( get_field('faqs_title') ); ?></h2>

        </div>

    </div>

    <div class="row">

        <div class="glossymenu">

            <div class="col-md-10 col-md-offset-1">
            <?php if( have_rows('faqs') ): ?>
                <?php while( have_rows('faqs') ): the_row(); 
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                ?>
                    <a class="menuitem submenuheader" href="#"><?php echo $question; ?></a>
                    <div class="submenu">
                        <div class="p-faq">
                            <p><?php echo $answer; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>


        </div>

    </div>

</div>




<div class="container-fluid background-light padding-tb-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h2 class="section-head center"><?php echo wp_kses_post( get_field('tabs_above_content')['title'] ); ?></h2>

                <div>
                    <?php echo wp_kses_post( get_field('tabs_above_content')['description'] ); ?>
                </div>

                
            </div>

        </div>

        <!--Vertical Tabs-->

        <div class="row margin-t-2">
            <div role="tabpanel">
    <div class="col-sm-4">
        <div class="ex1">
            <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                <?php if( have_rows('tabs_content') ): ?>
                    <?php $tab_id = 1; ?>
                    <?php while( have_rows('tabs_content') ): the_row(); 
                        $tab_title = get_sub_field('tabs_title');
                        $tab_description = get_sub_field('tabs_content');
                    ?>
                        <li role="presentation" class="brand-nav <?php if($tab_id == 1) echo 'active'; ?>">
                            <a href="#tab<?php echo $tab_id; ?>" data-toggle="tab"><?php echo $tab_title; ?></a>
                        </li>
                        <?php $tab_id++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="ex2">
            <div class="tab-content no-padding no-margin">
                <?php if( have_rows('tabs_content') ): ?>
                    <?php $tab_id = 1; ?>
                    <?php while( have_rows('tabs_content') ): the_row(); 
                        $tab_title = get_sub_field('tabs_title');
                        $tab_description = get_sub_field('tabs_content');
                    ?>
                        <div class="tab-pane fade <?php if($tab_id == 1) echo 'in active'; ?>" id="tab<?php echo $tab_id; ?>">
                            <div class="blue-header"><?php echo $tab_title; ?></div>
                            <p><?php echo $tab_description; ?></p>
                        </div>
                        <?php $tab_id++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

        </div>

        <!--Vertical Tabs-->

    </div>

</div>

</div>

<div class="container-fluid counter-bg-2">

    <div class="container">

        <div class="row order-offer">
            <h2 class="white"><?php echo wp_kses_post( get_field('cta')['title'] ); ?></h2>

            <div class="white "><?php echo wp_kses_post( get_field('cta')['description'] ); ?></div>
            <div class="white-btn"><a href="https://order.paperperk.com/"><?php echo wp_kses_post( get_field('cta')['button_text'] ); ?></a></div>

        </div>

    </div>

</div>

<!-- FAQs -->


<?php get_footer('tools'); ?>