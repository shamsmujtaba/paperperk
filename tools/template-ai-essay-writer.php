 
<?php
/* Template Name: AI Essay Writer  */
get_header('ai');
?>
<style>
    .reviews-card img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-top: 20px;
    z-index: 999;
}
</style>
    <div class="hero-bg-tools-ai">

        <div class="container">

            <div class="content-inner-wrapper text-center">

                <h1 class="hero-ai-head"> Lifetime Free<span class="gradient-text">AI Essay Writer</span></h1>


                <p class="hero-ai-para">The fastest and most accurate essay generator is available for a lifetime. It’s not 50% off; instead, the AI-based tool is 100% free with advanced features. Now, get the latest 2024 essays ready in a span of 5 minutes.</p>

                <div class="features-ai">

                    <div class="row">

                        <div class="col-md-3">

                            <div class="d-flex align-items-center justify-content-center p-3">

                                <div class="row">

                                    <div class="col-md-12 text-center feature-body flex-center">

                                        <div class="img-circle-wrapper">

                                            <img src="<?php bloginfo('template_directory'); ?>/images/plagiarism-free.png" class=" "
                                                alt="feature-experienced-writer" width="64" height="64">

                                        </div>

                                        <div class="paper-writing-service-blue-small-heading mb-2">100%
                                            Plagiarism-Free</div>



                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="d-flex align-items-center justify-content-center p-3">

                                <div class="row">

                                    <div class="col-md-12 text-center feature-body flex-center">

                                        <div class="img-circle-wrapper">

                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon-grammer-checker.png"
                                                class=" " alt="feature-experienced-writer" width="64" height="64">

                                        </div>

                                        <div class="paper-writing-service-blue-small-heading mb-2">Grammer Checker
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="d-flex align-items-center justify-content-center p-3">

                                <div class="row">

                                    <div class="col-md-12 text-center feature-body flex-center">

                                        <div class="img-circle-wrapper">

                                            <img src="<?php bloginfo('template_directory'); ?>/images/icon-content-phrase.png"
                                                class=" " alt="feature-experienced-writer" width="64" height="64">

                                        </div>

                                        <div class="paper-writing-service-blue-small-heading mb-2">Content
                                            Paraphraser</div>



                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="d-flex align-items-center justify-content-center p-3">

                                <div class="row">

                                    <div class="col-md-12 text-center feature-body flex-center">

                                        <div class="img-circle-wrapper">

                                            <img src="<?php bloginfo('template_directory'); ?>/images/citation-finder.png" class=" "
                                                alt="feature-experienced-writer" width="64" height="64">

                                        </div>

                                        <div class="paper-writing-service-blue-small-heading mb-2">Citation Finder
                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>



    <!-- -------------------Essay Generator Area--------------------- -->

    <div class="container-fluid padding-tb-3 sec-essay-generator">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-12 dis-flex">

                    <h2 class="center margin-b-1 ">
                        Essay Writer Free Online to Create Original Essays
                    </h2>

                    <div class="section-sub-head">Get a Full Essay in 5 Minutes!</div>

                    <p class="text-center width-80">It’s really not hard to complete your day-to-day tasks with an AI paper writer free of cost. You only need to add your title, select an academic level, and a total number of words. The moment you command our AI essay generator, it will come up with an outstanding original piece of work. Moreover, it does wonder as an essay extender too!</p>
                </div>
            </div>

            <div class="container-fluid padding-lr-2">

                <div class="form-outer-container">
                    <div class="row">
                        <div class="col-md-12 ">

                            <div class="row">

                                <form class="form-container" id="essay-generator-form">

                                    <div class="col-md-4">

                                        <div class="form-left-container">
                                            <label class="form-label" for="name">Title</label>
                                            <input class="form-input" type="text" id="name" name="name" required>
                                            <span class="error-message" id="name-error"></span>

                                            <label class="form-label" for="academic-level">Academic Level:</label>
                                            <select class="form-select" id="academic-level" name="academic-level"
                                                required>
                                                <option value="default" disabled selected>Select Academic Level
                                                </option>
                                                <option value="undergraduate">Undergraduate</option>
                                                <option value="graduate">Graduate</option>
                                                <option value="postgraduate">Postgraduate</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <span class="error-message" id="academic-level-error"></span>

                                            <label class="form-label" for="total-words">Total Words:</label>
                                            <input class="form-input" id="total-words" name="total-words"
                                                required>



                                            <span class="error-message" id="total-words-error"></span>

                                            <button class="form-button btn-generate-essay" type="submit"><span class="btn-text">Generate
                                                Essay </span><i class="fa fa-spinner fa-spin text-bold" id="lead-loader" style="display: none; margin-top: -17px; margin-left: 11pc;"></i></button>
                                                <div class="text-center  stop-btn-container hidden"  >
                                                        <a class="stop-button btn-stop-generate" id="stopButton" style=" color: red; "><i class="fa fa-stop " aria-hidden="true"></i> Stop</a>
                                                    </div>
                                        </div>




                                    </div>

                                    <div class="col-md-8">
                                        <div class="form-right-container">

                                            <div class="form-mb-20 animation-outer">

                                                <div id="form-default-anim" class="lottie-container"
                                                    data-animation="form-default-anim"></div>

                                                <div id="form-onload-anim" class="lottie-container"
                                                    data-animation="form-onload-anim" style="display: none;"></div>

                                                <h3 class= "generating-text">Generate Your Essay Instantly </h3>
                                                <div id="generated-content-placeholder"></div>
                                            </div>
                                            

                                        </div>
                                        <div id="tooltip" class="tipCopy" style="display: none;">Text Copied!</div>
                                            <a href="javascript:void(0)" id="copytextButton"  class="fa fa-clone word-counter-icon btn-clone " style="display:none" ></a>
                                    </div>

                                </form>

                            </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- -------------------------Section - Features----------------------- -->
    <div class="container sect-features container-pb">

        <h2 class="center mb-3" style=" margin-top: 0px; ">What Makes an AI Paper Writer Different? </h2>
        <p class="text-center">Our daily users of free essay generators enjoy the best peace of mind in all their important tasks. People have tested this tool for class assignments, essay papers, blogs, as an essay expander, and much more for the following reasons.</p>

        <div class="feature-inner">

            <div class="row">
                <!-- feature 1 -->
                <div class="col-md-3">
                    <div class="working-card text-center text-white">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-database.png" class="img-responsive"
                            alt="Step 1 Icon">
                        <h3>Updated Version 2024</h3>
                        <p>Many of the tools in the market are stuck to 2020, but this AI essay writer is featured for all the latest happenings to mention in your essays.</p>
                    </div>
                </div>

                <!-- feature 2 -->
                <div class="col-md-3">
                    <div class="working-card text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-plagiarism-free.png" class="img-responsive"
                            alt="Step 2 Icon">
                        <h3>Full of Ideas, Prompts, Uniqueness</h3>
                        <p>You have many pleasant surprises waiting for you in the form of mind-blowing topics, titles, and outlines, which this paper writer is about to create for you.</p>
                    </div>
                </div>

                <!-- feature 3 -->
                <div class="col-md-3">
                    <div class="working-card text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-free-essay.png" class="img-responsive"
                            alt="Step 3 Icon">
                        <h3>100% Well-Researched Original Content</h3>
                        <p>Make your mind up to having this tool stand by anytime, 24/7, to cover research-based work as well. So, no more looming deadlines once you get this AI essay helper close.</p>
                    </div>
                </div>

                <!-- feature 4 -->
                <div class="col-md-3">
                    <div class="working-card text-center">
                        <img src="<?php bloginfo('template_directory'); ?>/images/icon-unlimited-access.png" class="img-responsive"
                            alt="Step 4 Icon">
                        <h3>Standard Essay Outlines</h3>
                        <p>The essay writer is designed to follow the up-to-date standard structure for your essay topic. Each teacher will praise your professionally outlined essay. Believe us!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- --------------------------Section - Reviews-------------------------->

    <div class="sec-reviews container-ptb">

        <div class="container">

            <h2 class="text-center">The Best Shot of Paper Perk? AI Essay Helper!</h2>

            <p class="text-center ">Do you have an essay due tomorrow? But you are not coming out of procrastination? Then, don&rsquo;t go hard on yourself. Enjoy Netflix and leave the perfect school, college, or any <a href="https://paperperk.com/">custom paper writing service</a> for this AI essay tool.</p>

            <div class="container mt-2">

                <div class="row">

                    <div class="col-md-1"></div>

                    <div class="col-md-3">
                        <img src="<?php bloginfo('template_directory'); ?>/images/trustPilotRating.svg" 
                        alt="trustPilotRating">
                    </div>

                    <div class="col-md-3">
                        <img src="<?php bloginfo('template_directory'); ?>/images/g2GridRating.svg" alt="g2GridRating">
                    </div>

                    <div class="col-md-3">
                        <img src="<?php bloginfo('template_directory'); ?>/images/capterraRating.svg" alt="capterraRating">
                    </div>

                    <div class="col-md-1"></div>

                </div>
                <div class="row">
                    <div class="reviews-slider">
                        <div class="reviews-card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/review-avatar-1.png" alt="Client 1">
                            <h4>Brooke Lansing</h4>
                            <p>Writing papers on trickly topics like cryptocurrencies was never my strong suit. That's when I found the AI essay writer by paperperk.com. What a revelation! I created a well-informed essay that covers all necessary details.</p>
                        </div>

                        <div class="reviews-card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/review-avatar-2.png" alt="Client 2">
                            <h4>Avery Riley</h4>
                            <p>I used the AI essay writer free online to help analyze classic Shakespeare plays, and I'm thrilled with the outcome! A must-have tool for any literature student.</p>
                        </div>

                        <div class="reviews-card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/review-avatar-3.png" alt="Client 3">
                            <h4>Sierra Holland</h4>
                            <p>I used this for an essay generator for my technology-related paper, and it provided an easily understandable, coherent article that thoroughly covered the topic.</p>
                        </div>

                        <div class="reviews-card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Image-34.png" alt="Client 4">
                            <h4>Savannah Harper</h4>
                            <p>The AI essay helper was perfect for my psychology assignment. I input my topic and received a well-structured, informative essay in no time.</p>
                        </div>

                        <div class="reviews-card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Image-60.png" alt="Client 5">
                            <h4>Easton Henry</h4>
                            <p>When I had to write an essay on the evolution of jazz music, I didn't know where to start. Luckily, I found the free essay generator! Now, writing essays has never been easier for me.</p>
                        </div>

                        <div class="reviews-card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/Image-6034.png" alt="Client 5">
                            <h4>Nolan Carter</h4>
                            <p>Your free essay generator is a game-changer for busy college students like me. With so many assignments to juggle, this free AI-powered tool gave me a well-written draft in no time.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


    <div class="container-fluid" id="show-div">
        <div class="container p-5">
            <div class="row bg-white p-5 rounded shadow">
                <div class="col-md-12 text-center" style="display: none" id="loader">
                    <img src="<?php bloginfo('template_directory'); ?>/images/loader.gif" alt="loader" class="w-25">
                </div>
                <div class="col-md-12" style="display: none;" id="detail-list">
                </div>
            </div>
        </div>
    </div>


    <!-- Other Tools -->
    <div class="container-fluid background-light">
        <div class="container padding-tb-3">

            <div class="row headline">

                <div class="col-md-12">

                    <h2 class="margin-b-1">Find More Free AI Writing Tools (Updated Versions)</h2>

                    <p class="text-center">We are not only sticking to this <a
                            href="https://paperperk.com/free-tool">free tool </a>, but you have many more options
                        available to use in multiple tasks.
                    </p>

                </div>

            </div>

            <div class="row">
                <div class="col-md-12">

                    <ul class="div-no-padding">
                        <section class="customer-logos slider">


                            <div class="slide">
                                <a href="plagiarism-checker">
                                    <span class="active">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/images/plagiarism-checker7.png"
                                                    alt="Tool 1" />
                                            </div>
                                        </div>
                                        <div class="serv-head"> Plagiarism checker</div>
                                    </span></a>

                            </div>

                            <div class="slide">
                                <span><a href="spell-checker">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/images/spelling-checker.png"
                                                    alt="Tool 2" />
                                            </div>
                                        </div>
                                        <div class="serv-head">Spell Checker</div>
                                    </a></span>

                            </div>

                            <div class="slide">

                                <span><a href="word-counter">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/images/words-counter.png"
                                                    alt="Tool 3" /></div>
                                        </div>
                                        <div class="serv-head">Word Counter</div>
                                    </a></span>

                            </div>

                            <div class="slide">

                                <span><a href="harvard-referencing">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/icons/Harvard%20referencing.png"
                                                    alt="Tool 4" />
                                            </div>
                                        </div>
                                        <div class="serv-head">Harvard Referencing</div>
                                    </a></span>

                            </div>

                            <div class="slide">

                                <span><a href="mla-referencing">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/icons/pp-mla-icon.png"
                                                    alt="mla-refrencing" />
                                            </div>
                                        </div>
                                        <div class="serv-head">MLA Referencing</div>
                                    </a></span>
                            </div>
                            <div class="slide">

                                <span><a href="grammar-checker">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/images/grammar-check.png"
                                                    alt="Tool 5" />
                                            </div>
                                        </div>
                                        <div class="serv-head">GRAMMAR CHECKER</div>
                                    </a></span>

                            </div>
                            <div class="slide">

                                <span><a href="factoring-calculator">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/icons/pp-factoring.png"
                                                    alt="factoring calculator" />
                                            </div>
                                        </div>
                                        <div class="serv-head">FACTORING CALCULATOR</div>
                                    </a></span>

                            </div>
                            <div class="slide">

                                <span><a href="chemical-equation-checker">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/icons/pp-chemical.png"
                                                    alt="chemical equation" />
                                            </div>
                                        </div>
                                        <div class="serv-head">Chemical Equation</div>
                                    </a></span>
                            </div>
                            <div class="slide">

                                <span><a  href="gpa-calculator">
                                        <div class="service-block">
                                            <div class="service-block-sub"><img
                                                    src="<?php bloginfo('template_directory'); ?>/icons/pp-gpa-calculator.png"
                                                    alt="gpa calculator" />
                                            </div>
                                        </div>
                                        <div class="serv-head">GPA Calculator</div>
                                    </a></span>
                            </div>


                            <!--<div class="slide">-->

                            <!--    <span><a data-toggle="tab" href="https://paperperk.com/free-tool/essay-writer">-->
                            <!--            <div class="service-block">-->
                            <!--                <div class="service-block-sub"><img src="https://paperperk.com/wp-content/themes/theme/images/essay-writer-pp.png" alt="Tool 6" />-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="serv-head">ESSAY WRITER</div>-->
                            <!--        </a></span>-->

                            <!--</div>-->

                            <!--<div class="slide">-->

                            <!--    <span><a data-toggle="tab" href="#biblio">-->
                            <!--            <div class="service-block">-->
                            <!--                <div class="service-block-sub"><img src="https://paperperk.com/wp-content/themes/theme/icons/topic-generator.png" alt="Tool 7" />-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="serv-head">TOPIC GENERATOR</div>-->
                            <!--        </a></span>-->

                            <!--</div>-->

                        </section>

                    </ul>

                </div>

            </div>
            <script>
                var targetUrl = "apa-referencing.html";
                console.error(targetUrl)
                // Get all elements with the class "slide"
                var slides = document.querySelectorAll('.slide');

                // Loop through the slides and check their URLs
                for (var i = 0; i < slides.length; i++) {
                    var slide = slides[i];
                    var link = slide.querySelector('a');
                    // console.log(link)

                    // Check if the link exists and its href matches the target URL
                    if (link && link.getAttribute('href') === targetUrl) {
                        // Hide the slide
                        console.log(targetUrl)
                        //   slide.classList.add('slide-none');
                        // slide.classList.remove('slide');
                    }
                }
            </script>










        </div>
    </div>


    <!-- FAQs -->

    <div class="container padding-tb-3">

        <div class="row mb-3" style=" margin-bottom: 20px; ">

            <div class="col-md-12">

                <h2>FAQs about AI Free Essay Writer</h2>

            </div>

        </div>

        <div class="row">

            <div class="glossymenu">

                <div class="col-md-10 col-md-offset-1">

                    <a class="menuitem submenuheader" href="#">Can your tool guarantee a good grade?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>While our tool can help improve writing quality and organization, ensuring a good grade relies on multiple factors like prompt understanding, strong arguments, and clear expression. We encourage users to revise and tune the generated content to personalize it to reflect their unique voice.</p>

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">Is your tool safe and secure?</a>

                    <div class="submenu">

                        <div class="p-faq">

                            <p>We prioritize user data security. All information entered into the tool remains confidential and is not shared with any third parties. We also employ strict measures to prevent unauthorized access and data breaches.</p>

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">What types of essays can your tool generate?</a>

                    <div class="submenu">

                        <div class="p-faq">

                            <p>Our tool assists various essay types, including argumentative, expository, narrative, and persuasive essays. Please specify the type and topic for the best results.</p>

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">Can I choose the writing style and tone?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>While some tools offer style and tone options, our current version focuses on providing a clear and informative structure. You can use it like an essay extender too without compromising on tone. We are, however, working on future updates with more customization features.</p>

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">Does your tool provide references and citations?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>While the tool may incorporate relevant information, it currently does not automatically generate citations. We recommend users consult our style guides and available citation/referencing generator tools for accurate citation formatting. So feel free to check our other tools for this.</p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>




    <div class="container-fluid gradient-bg-content padding-tb-3 sec-essay-content">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h2 class="section-head center">Pick All The Best Qualities of AI Essay Helper</h2>

                </div>

            </div>

            <!--Vertical Tabs-->

            <div class="row margin-t-2">
                <div role="tabpanel">
                    <div class="col-sm-4">
                        <div class="ex1 height-auto">

                            <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                                <li role="presentation" class="brand-nav active"><a href="#tab1" data-toggle="tab">How does this Tool work?</a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab2" data-toggle="tab">AI Essay
                                        Writer Free for Quality and Speed
                                    </a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab3" data-toggle="tab">AI Essay
                                        Generator for Original Essay From Scratch</a></li>

                                <li role="presentation" class="brand-nav"><a href="#tab4" data-toggle="tab">No
                                        Plagiarism Issues With Free AI Essay Writer</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="ex2 height-custom">

                            <div class="tab-content no-padding no-margin">

                                <div class="tab-pane fade in active" id="tab1">

                                    <h3>
                                        <div class="blue-header">How does this Tool work?
                                        </div>
                                    </h3>


                                    <ol>
                                        <li>First, you need to add your essay's main topic, prompt, or idea. </li>
                                        <li>Select your academic level (Undergraduate, Graduate, Postgraduate, or
                                            others) after this. </li>
                                        <li>The most important thing is to select word counts. We suggest you get your
                                            essay in chunks; however, you have no word limit from 50-500. </li>
                                        <li>Once done with the first 3 steps, give a command and generate. </li>

                                    </ol>

                                    <p>We are providing a 500-word essay example on “how to write an essay” for you!
                                    </p>

                                    <img src="<?php bloginfo('template_directory'); ?>/images/essay-ai-ss.webp" width="680" alt="essay-ai-ss">

                                    <p>If you notice the result, you must observe the word count in each section and the
                                        professional outline from start to finish. It's outstanding, right?
                                    </p>

                                    <em> <b>Now go ahead and give your best shot! </b></em>


                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <h3>
                                        <div class="blue-header">AI Essay Writer Free for Quality and Speed
                                        </div>
                                    </h3>

                                    <p>Want a quality essay fast? Then this is what you need. This premium tool uses
                                        smart AI to whip up impressive essays in no time. Never worry about time
                                        pressure or writer's block again! This tool takes the hard work out of crafting
                                        the first draft and gives you more time to bring your own ideas to the table.
                                        The best part? It's all free!
                                    </p>

                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3>
                                        <div class="blue-header">AI Essay Generator for Original Essay From Scratch
                                        </div>
                                    </h3>
                                    <p>If you need an essay, this tool can build one for you - all from nothing. Also, if you have already completed your essay and still some word count left then better use this as an essay expander. It uses smart AI to craft unique, informed essays on any topic you throw at it. It's the perfect tool to whip up an essay that's all your own without copying. The AI paper writer free makes writing easy for students, teachers, professionals, and anyone who needs to put their ideas down in writing.</p>
                                </div>

                                <div class="tab-pane" id="tab4">
                                    <h3>
                                        <div class="blue-header">No Plagiarism Issues With Free AI Essay Writer
                                        </div>
                                    </h3>
                                    <p>Forget about plagiarism worries when you use the free AI paper writer. This tool
                                        uses artificial intelligence to generate 100% original essays. You can focus on
                                        making your essay engaging and smart because you know the AI has the originality
                                        part covered. Trust the expert essay writers to create a unique piece every
                                        time. Learning and writing can be fun when you let AI do the heavy lifting!

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



    <div class="container-fluid counter-bg-2">

        <div class="container">

            <div class="row order-offer">
                <h2 class="white">
                    AI Essay Writer to Wipe Out Problems</h2>

                <p class="white ">Now all your concerning questions, thoughts, prompts are handled by a single writing tool of paperperk.com. It is a masterpiece of artificial intelligence that is meant to resolve all your queries. So go ahead, give it a command and enjoy!</p>
                <div class="white-btn"><a href="https://order.paperperk.com/">Order Now</a></div>

            </div>

        </div>

    </div>
    
    
    <?php get_footer('tools'); ?>
     <script>
        $(document).ready(function () {
            $('.reviews-slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                dots: true,
                autoplaySpeed: 3000,

                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1 // Adjusted slidesToShow for 768px breakpoint
                        }
                    },
                    {
                        breakpoint: 520,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    <script>
            // Add blur event listeners for input fields
           let stopTyping = false;
            document.getElementById('name').addEventListener('blur', validateTitle);
            document.getElementById('academic-level').addEventListener('blur', validateAcademicLevel);
            document.getElementById('total-words').addEventListener('blur', validateWordCount);
           let stopContainer=document.querySelector('.stop-btn-container');
           document.getElementById('stopButton').addEventListener('click', function () {
                stopTyping = true;
            });

            document.getElementById('essay-generator-form').addEventListener('submit', function (event) {
                event.preventDefault();
		     document.getElementById('generated-content-placeholder').innerHTML = "";
                // Validate the form
                stopTyping = false;
                if (!validateForm()) {
                    return;
                }
               document.querySelector('.generating-text').innerText  = "Generating Your Essay";
                // Simulate delay with setTimeout
                setTimeout(function () {
                    // Get values from form fields
                    var topic = document.getElementById('name').value;
                    var academicLevel = document.getElementById('academic-level').value;
                    var wordCount = document.getElementById('total-words').value;

                    var generatedContent = generateEssay(topic, academicLevel, wordCount);
//                          console.log(generatedContent);
// 						  return;
//                     // Hide loading animation and show default animation
//                     document.getElementById('form-onload-anim').style.display = 'none';
//                     document.getElementById('form-default-anim').style.display = 'block';

                    // Display the generated content
//                     document.getElementById('generated-content-placeholder').innerHTML = generatedContent.data;
                }, 300); // 300 milliseconds delay (0.3 seconds)
            });

            // Function to generate essay content
            function generateEssay(topic, academicLevel, wordCount) {
				
				 // Hide default animation and show loading animation
                

                // Display Lottie loading animation
                var loadingAnimation = lottie.loadAnimation({
                    container: document.getElementById('form-onload-anim'),
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: document.getElementById('form-onload-anim').getAttribute('data-animation'),
                });
				$.ajax({
    type: "POST",
    url: "https://admins.writersplanet.net/generate-ai-essay",  // Include the protocol (http or https)
	cache: false,
    async: true,
    data: {
        topic: topic,
        academic_level: academicLevel,
        word_count: wordCount,
    },
    beforeSend: function () {
        document.getElementById('form-default-anim').style.display = 'none';
        document.getElementById('form-onload-anim').style.display = 'block';
        document.getElementById("lead-loader").style.display = 'block';
        document.querySelector(".btn-generate-essay").disabled = true;
         document.querySelector(".btn-text").innerText  = 'Generating Essay';
    },
    complete: function () {
        document.getElementById('form-default-anim').style.display = 'none';
        document.getElementById('form-onload-anim').style.display = 'none';
        document.getElementById("lead-loader").style.display = 'none';
        document.querySelector(".btn-generate-essay").disabled = false;
        document.querySelector(".btn-text").innerText  = 'Generate Essay';
    },
    success: function (response) {
		
        let data = JSON.parse(response);
		if(data.data !==''){
			let essayText = data.data;
			document.querySelector('.generating-text').innerText  = "";
			document.getElementById('copytextButton').style.display = 'block';
			  stopContainer.classList.toggle('hidden')
			typeEffect(essayText, 0, function () {
// 				document.getElementById('generated-content-placeholder').innerHTML = essayText;
            // Optional: Add any additional actions after the typing effect completes
                
        });
		
		}else{
		document.getElementById('generated-content-placeholder').innerHTML = "Eroor";
		}
// 		console.log(data.data);
// 						  return;
		
        return data;
    },
});   
            }
function typeEffect(text, i, fnCallback) {
    if (!stopTyping && i < text.length) {
        document.getElementById('generated-content-placeholder').innerHTML = text.substring(0, i + 1);
        setTimeout(function () {
            typeEffect(text, i + 1, fnCallback);
        }, 15); // Adjust the typing speed (milliseconds)
    } else if (typeof fnCallback === 'function') {
        setTimeout(fnCallback, 1000); // Delay before calling the callback function
        stopContainer.classList.toggle('hidden')
         stopTyping = false;
    }
}

            // Form validation function
            function validateForm() {
                var isValid = true;

                // Validate title field
                if (!validateTitle()) {
                    isValid = false;
                }

                // Validate academic level
                if (!validateAcademicLevel()) {
                    isValid = false;
                }

                // Validate word count
                if (!validateWordCount()) {
                    isValid = false;
                }

                return isValid;
            }

            // Validation functions for each field
            function validateTitle() {
                var topic = document.getElementById('name').value;
                var nameError = document.getElementById('name-error');
                nameError.innerHTML = '';

//                 if (!topic.trim() || !/^[a-zA-Z]+(\s[a-zA-Z]+)?$/.test(topic)) {
//                     nameError.innerHTML = 'Please enter at least one word containing only characters in the title field.';
//                     return false;
//                 }

                return true;
            }

            function validateAcademicLevel() {
                var academicLevel = document.getElementById('academic-level').value;
                var academicLevelError = document.getElementById('academic-level-error');
                academicLevelError.innerHTML = '';

                if (academicLevel === 'default') {
                    academicLevelError.innerHTML = 'Please select an academic level.';
                    return false;
                }

                return true;
            }

            function validateWordCount() {
                var wordCount = document.getElementById('total-words').value;
                var totalWordsError = document.getElementById('total-words-error');
                totalWordsError.innerHTML = '';

                if (wordCount < 50 || wordCount > 500) {
                    totalWordsError.innerHTML = 'Please enter a word count between 50 and 500.';
                    return false;
                }

                return true;
            }
            
            let contentPlaceholder =  document.getElementById('generated-content-placeholder')
            let copyButton = document.getElementById('copytextButton');
            let tooltip = document.getElementById('tooltip');;
            copyButton.addEventListener('click', () => {
                // Create a range to select the text content
                let range = document.createRange();
                range.selectNodeContents(contentPlaceholder);
                // Get the selection
                let selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);
                document.execCommand('copy');
                selection.removeAllRanges();
                tooltip.style.display = 'block';
                setTimeout(() => {
                    tooltip.style.display = 'none';
                }, 2000);
            });
        </script>
    
    
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js"></script>
 
 
        <script>
            window.addEventListener('load', (event) => {
                let animationContainers = document.querySelectorAll('.lottie-container');
                let animationfilePath = "https://paperperk.com/wp-content/themes/theme/animations/"
                animationContainers.forEach((container) => {
                    let animationName = container.getAttribute('data-animation');
                    let animationPath = animationfilePath + animationName + ".json";

                    const animationData = {
                        container: container,
                        renderer: "svg",
                        loop: true,
                        autoplay: true,
                        path: animationPath,
                    };

                    lottie.loadAnimation(animationData);
                });
            });
        </script>