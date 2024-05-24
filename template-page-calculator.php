<?php
/* Template Name: Page Calculator */
include('header.php');
?>

<!-- Page Calculator -->
<div class="container-fluid padding-tb-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h1 class="center margin-b-1 "> Free Page Calculator Tool</h1>
                <p class="text-center margin-b-2 ">Are you looking for a free page calculator tool?

                </p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="form-outer-container form-mt-30">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="mt-3 mb-3">
                            <h3 class="blue-header">Try Our Page Calculator Tool and Download the Free
                                Report</h3>
                        </div>

                        <div class="row margin-t-2">

                            <div class="col-md-2">
                                <label>Page Size</label>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle dropdown-styling" type="button" data-toggle="dropdown">A4
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu margin-t-12">
                                        <li><a href="#">A2</a></li>
                                        <li><a href="#">A3</a></li>
                                        <li><a href="#">A4</a></li>
                                        <li><a href="#">A5</a></li>
                                        <li><a href="#">U.S Letter</a></li>

                                    </ul>
                                </span>
                            </div>


                            <div class="col-md-2">
                                <label>Font Family</label>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle dropdown-styling" type="button" data-toggle="dropdown">Arial
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu margin-t-12">
                                        <li><a href="#">Calibri</a></li>
                                        <li><a href="#">Comic Sans</a></li>
                                        <li><a href="#">Courier</a></li>
                                        <li><a href="#">Verdana</a></li>
                                        <li><a href="#">New Times Roman</a></li>

                                    </ul>
                                </span>
                            </div>

                            <div class="col-md-2">
                                <label>Font Size</label>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle dropdown-styling" type="button" data-toggle="dropdown">12px
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu margin-t-12">
                                        <li><a href="#">14px</a></li>
                                        <li><a href="#">16px</a></li>
                                        <li><a href="#">18px</a></li>
                                        <li><a href="#">20px</a></li>
                                        <li><a href="#">22px</a></li>

                                    </ul>
                                </span>
                            </div>

                            <div class="col-md-2">
                                <label>Line Spacing</label>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle dropdown-styling" type="button" data-toggle="dropdown">Single
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu margin-t-12">
                                        <li><a href="#">1.5</a></li>
                                        <li><a href="#">Double</a></li>

                                    </ul>
                                </span>
                            </div>

                            <div class="col-md-2">
                                <label>Unit</label>
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle dropdown-styling" type="button" data-toggle="dropdown">cm
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu margin-t-12">
                                        <li><a href="#">px</a></li>
                                        <li><a href="#">%</a></li>
                                        <li><a href="#">rem</a></li>
                                        <li><a href="#">em</a></li>


                                    </ul>
                                </span>
                            </div>

                        </div>

                        <form>
                            <div class="row form-group form-mt-10">



                                <div class="col-md-12">
                                    <textarea id="page-calc-content-area" class="form-control form-mb-20" style="background-color: #fff;" placeholder="Enter your text here..." onfocus="this.placeholder= ''" onblur="this.placeholder=''" rows="10"></textarea>

                                    <div class="row icons-row">

                                        <div class="col-md-6">

                                        </div>

                                        <div class="col-md-6 text-right">
                                            <span class="fa fa-download word-counter-icon" aria-hidden="true"></span>
                                            <span class="fa fa-clipboard word-counter-icon " aria-hidden="true"></span>
                                            <span class="fa fa-print  word-counter-icon margin-r-20" aria-hidden="true"></span>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="btn-outer-div form-mb-20">


                                <label class=" ">
                                    I know the word count: <input type="text" name="word-count" placeholder="0 Words" class="word-count-text" id="word-count">
                                </label>

                            </div>
                        </form>

                    </div>
                </div>


                <div class="row">

                    <div class="col-md-12">

                        <h3>Result</h3>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="count-card-pink">
                            <img src="<?php bloginfo('template_directory'); ?>/images/page-wht.png" class="count-card-img" alt="count-card-img">
                            <div class="card-body">
                                <h5 class="count-card-text-sm"> Pages</h5>
                                <p class="count-card-text-big card-text-white" id="result">0</p>
                            </div>

                        </div>
                    </div>

                    <!-- <div class="col-md-3">
                        <div class="count-card-white text-pink">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Sheet-pink.png" class="count-card-img">

                            <div class="card-body">
                                <h5 class="count-card-text-sm"> Sheets</h5>
                                <p class="count-card-text-big card-text-pink">1</p>
                            </div>
                        </div>
                    </div> -->

                    <div class="col-md-4">
                        <div class="count-card-pink">
                            <img src="<?php bloginfo('template_directory'); ?>/images/words-white-pp.png" class="count-card-img" alt="words-white-pp">
                            <div class="card-body">
                                <h5 class="count-card-text-sm"> Words</h5>
                                <p class="count-card-text-big card-text-white" id="no-of-words">0</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="count-card-white text-pink">
                            <img src="<?php bloginfo('template_directory'); ?>/images/character-pink.png" class="count-card-img" alt="character-pink">

                            <div class="card-body">
                                <h5 class="count-card-text-sm"> Characters</h5>
                                <p class="count-card-text-big card-text-pink" id="no-of-characters">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="container padding-b-3">

    <div class="row">

        <div class="col-md-12">

            <h2 class="margin-b-2 mt-0">Heading 2</h2>
        </div>

    </div>

    <div class="row p-6">

        <div class="mb-2">

            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat accusamus
                rerum nihil voluptatibus, quam nisi labore dolores dolorem? Iusto laborum doloremque ipsa
                praesentium nihil culpa magni commodi quisquam dolorum.</p><br>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat accusamus
                rerum nihil voluptatibus, quam nisi labore dolores dolorem? Iusto laborum doloremque ipsa
                praesentium nihil culpa magni commodi quisquam dolorum. </p>

        </div>

    </div>

    <div class="row padding-t-2">

        <div class="col-md-4">

            <div class="big-num">Step 01</div>

        </div>

        <div class="col-md-4">

            <div class="big-num">Step 02</div>

        </div>

        <div class="col-md-4">

            <div class="big-num">Step 03</div>

        </div>

    </div>

    <div class="row steps-dot">

        <div class="col-md-4">

            <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps-dot" /></div>

        </div>

        <div class="col-md-4">

            <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps-dot-01" /></div>

        </div>

        <div class="col-md-4">

            <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps-dot-02" /></div>

        </div>

    </div>

    <div class="row padding-t-2">

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/copy-paste-paperperk.png" alt="copy-paste-paperperk" />
                </div>

                <div class="col-md-9">

                    <div>
                        <h4 class="step-heading">CTRL C + CTRL V</h4>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, eius.</p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/customize-paperperk.png" alt="customize-paperperk" />
                </div>

                <div class="col-md-9">

                    <div>
                        <h4 class="step-heading">Customize to Optimize</h4>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, blanditiis.</p>
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/truth-moment-paperperk.png" alt="moment-papeperk" /></div>

                <div class="col-md-9">

                    <div>
                        <h4 class="step-heading">The Moment of Truth</h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, dicta.</p>

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

                <h2 class="margin-b-1">Heading 2</h2>

                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim fugit veniam,
                    ut
                    nemo ad molestiae unde delectus architecto voluptate. Ut quibusdam autem non tenetur possimus
                    dolorem ab omnis nemo at et, ex, minima eos. Tempora eveniet mollitia esse in animi.</p>

            </div>

        </div>

        <div class="row">

            <div class="col-md-12">

                <ul class="nav nav-tabs">

                    <section class="customer-logos slider">

                        <div class="slide">

                            <span class="active"><a data-toggle="tab" href="<?= get_bloginfo('wpurl') ?>/services/medical-research-paper-writing">
                                    <div class="service-block">
                                        <div class="service-block-sub"><img src="<?php bloginfo('template_directory'); ?>/images/spell-check-1.png" alt="Tool 1" />
                                        </div>
                                    </div>
                                    <div class="serv-head"> Tool 1</div>
                                </a></span>

                        </div>


                        <div class="slide">

                            <span><a data-toggle="tab" href="<?= get_bloginfo('wpurl') ?>/services/nursing-research-paper-writing">
                                    <div class="service-block">
                                        <div class="service-block-sub"><img src="<?php bloginfo('template_directory'); ?>/images/spell-check-2.png" alt="spell-check-02"  />
                                        </div>
                                    </div>
                                    <div class="serv-head">Tool 2</div>
                                </a></span>

                        </div>

                        <div class="slide">

                            <span><a data-toggle="tab" href="#t-paper">
                                    <div class="service-block">
                                        <div class="service-block-sub"><img src="<?php bloginfo('template_directory'); ?>/images/spell-check-3.png" alt="spell-check-03" /></div>
                                    </div>
                                    <div class="serv-head">Tool 3</div>
                                </a></span>

                        </div>

                        <div class="slide">

                            <span><a data-toggle="tab" href="#t-writing">
                                    <div class="service-block">
                                        <div class="service-block-sub"><img src="<?php bloginfo('template_directory'); ?>/images/spell-check-4.png" alt="spell-check-04" />
                                        </div>
                                    </div>
                                    <div class="serv-head">Tool 4</div>
                                </a></span>

                        </div>

                        <div class="slide">

                            <span><a data-toggle="tab" href="#p-reading">
                                    <div class="service-block">
                                        <div class="service-block-sub"><img src="<?php bloginfo('template_directory'); ?>/images/spell-check-5.png" alt="spell-chceck-05" />
                                        </div>
                                    </div>
                                    <div class="serv-head">Tool 5</div>
                                </a></span>

                        </div>


                        <div class="slide">

                            <span><a data-toggle="tab" href="#p-reading">
                                    <div class="service-block">
                                        <div class="service-block-sub"><img src="<?php bloginfo('template_directory'); ?>/images/spell-check-6.png" alt="spell-check-06" />
                                        </div>
                                    </div>
                                    <div class="serv-head">Tool 6</div>
                                </a></span>

                        </div>

                        <div class="slide">

                            <span><a data-toggle="tab" href="#biblio">
                                    <div class="service-block">
                                        <div class="service-block-sub"><img src="<?php bloginfo('template_directory'); ?>/images/spell-check-1.png" alt="spell-check-01" />
                                        </div>
                                    </div>
                                    <div class="serv-head">Tool 7</div>
                                </a></span>

                        </div>

                    </section>

                </ul>

            </div>

        </div>

    </div>
</div>


<!-- FAQs -->

<div class="container padding-tb-3">

    <div class="row headline">

        <div class="col-md-12">

            <h2>Frequently Asked Questions</h2>

        </div>

    </div>

    <div class="row">

        <div class="glossymenu">

            <div class="col-md-10 col-md-offset-1">

                <a class="menuitem submenuheader" href="#">Lorem ipsum dolor sit amet consectetur, adipisicing
                    elit.</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum reiciendis aliquam
                            deleniti eligendi nisi. Corrupti soluta odio tenetur aperiam eveniet laborum iure beatae
                            sunt aut! Corporis dolorum voluptate fuga id?</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.</a>

                <div class="submenu">

                    <div class="p-faq">

                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut ipsam fugiat hic cum
                            aspernatur voluptates omnis, temporibus cumque similique optio repellat sunt ex, porro
                            dicta eaque aperiam cupiditate quos consectetur?</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.</a>

                <div class="submenu">

                    <div class="p-faq">

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vero quod adipisci quis.
                            Molestias rem ad alias recusandae repellendus vitae, necessitatibus odit illum
                            reiciendis debitis, quibusdam facilis est. Velit, animi?</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit.</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio ipsum facilis esse
                            explicabo et, itaque blanditiis atque libero dolorem fugit ipsam cupiditate veritatis
                            quos perferendis quis. Repudiandae quod voluptatem itaque nemo, maiores sed perferendis
                            ad eius quia, quis provident rerum!</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit.</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A doloribus exercitationem
                            error commodi facilis quo labore, mollitia iusto libero perferendis omnis iure aut
                            ratione ipsa facere est quam totam inventore.</p>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>




<div class="container-fluid background-light padding-tb-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h2 class="section-head center">Heading 2</h2>

                <div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci optio
                        aut similique eum ut, vel
                        perspiciatis facilis dolore, quam non et sapiente aperiam maxime illo fuga odit dolor
                        molestias libero.
                    </p>
                </div>

                <div>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci optio
                        aut similique eum ut, vel
                        perspiciatis facilis dolore, quam non et sapiente aperiam maxime illo fuga odit dolor
                        molestias libero.
                    </p>
                </div>

            </div>

        </div>

        <!--Vertical Tabs-->

        <div class="row margin-t-2">
            <div role="tabpanel">
                <div class="col-sm-4">
                    <div class="ex1">

                        <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                            <li role="presentation" class="brand-nav active"><a href="#tab1" data-toggle="tab">Heading 1</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab2" data-toggle="tab">Heading
                                    2</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab3" data-toggle="tab">Heading
                                    3</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab4" data-toggle="tab">Heading
                                    4</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="ex2">

                        <div class="tab-content no-padding no-margin">

                            <div class="tab-pane fade in active" id="tab1">

                                <div class="blue-header">Content Heading</div>


                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                                <div class="blue-header">Content Heading</div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="blue-header">Content Heading</div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                                <div class="blue-header">Content Heading </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="blue-header">Content Heading</div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                                <div class="blue-header">Content Heading</div>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.

                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="blue-header">Content Heading
                                </div>

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                                <div class="blue-header">Content Heading </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.

                                </p>

                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tincidunt
                                    feugiat lorem, at ornare
                                    tellus faucibus ut.
                                    Curabitur eget metus dapibus nibh laoreet lacinia eget id metus. Mauris quis
                                    convallis elit, ac
                                    convallis augue.
                                    Pellentesque ornare cursus nibh quis fermentum. Morbi faucibus at tortor sed
                                    volutpat. Etiam at ex
                                    molestie turpis aliquam auctor.
                                    Nulla consequat tristique augue, vel venenatis massa fringilla sit amet.
                                    Morbi egestas turpis
                                    facilisis sem faucibus finibus.
                                </p>
                                <p>
                                    Nam sodales magna eget nulla interdum gravida. Aenean cursus magna vel lorem
                                    eleifend, vel
                                    eleifend massa rhoncus.
                                    Duis accumsan vehicula ultricies. Proin tincidunt blandit congue. Curabitur
                                    semper odio ut
                                    malesuada dapibus.
                                </p>
                            </div>
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
            <h2 class="white">Heading 2</h2>

            <p class="white ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, earum impedit doloremque
                aspernatur at, molestias aliquid quia deserunt cumque nostrum, autem magni voluptas. Amet, ipsa. Ab
                molestias vel harum iusto?</p>
            <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure iusto enim
                saepe esse, magni natus voluptate, at atque minima maiores! Eligendi inventore accusantium quis.</p>
            <div class="white-btn"><a href="order-now.html">Order Now</a></div>

        </div>

    </div>

</div>
<script>
    const wordsPerPage = 250;
    const word_count_div = document.getElementById('word-count');
    const textarea = document.getElementById('page-calc-content-area');
    word_count_div.addEventListener('input', () => {

        var numWords = $('#word-count').val();
        var numPages = calculatePages(numWords);


        $('#result').text(numPages);

    });

    textarea.addEventListener('input', () => {

        var words = textarea.value.split(/\s+/).filter(Boolean).length;
        $('#no-of-words').text(words);
        $('#no-of-characters').text(textarea.value.length);
        var numPages = calculatePages(words);
        $('#result').text(numPages);
    });


    function calculatePages(numWords) {
        const numPages = Math.ceil(numWords / wordsPerPage);
        return numPages;
    }
</script>
<?php get_footer(); ?>