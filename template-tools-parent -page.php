<?php
/* Template Name: Tools Parent Page */
include('header.php');
?>

    <div class="hero-bg d-flex justify-content-center align-items-center">

        <h1 class="heading-big mb-3 text-white">Free Tools</h1>

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
    </div>
    <style>
    .card-bg {
            border-radius: 0em;
    }
    </style>

    <!-- ----------------Heading section---------------- -->

    <div id="tools-main-heading">

        <div class="container write-a-paper-section-tb-padding">

            <div class="row">

                <div class="col-md-9 d-flex align-items-center justify-content-end">

                    <div>

                        <div class="section-sub-head">Online Free Tools</div>

                        <h2 class="mb-4">You Need to Go from Good to Great</h2>

                    </div>

                </div>

                <div class="col-md-3">

                    <img src="<?php bloginfo('template_directory'); ?>/animations/writing-pen.gif" alt="writing-pen" class="anim-width" >
                </div>

            </div>

            <p class="text-center">Fed up with recurring academic writing mistakes, formatting slip-ups, and calculation errors? Worry no more. Our free tool hub has all the AI-empowered tools you will ever need on your way to perfection in your writing. Why wait? Get your hands on them WHILE they are up for grabs!</p>
        </div>

    </div>

  <div class="cards-container">
    <!-- -----------------Section - Academic------------------- -->

    <div id="academic-section" class="section-bg-color">

        <div class="container write-a-paper-section-tb-padding">

            <h2 class="text-center mb-5"> Our Free Tools to Refine Your Academic Writings</h2>

            <div class="container mt-3 ">

                <div class="row ">
                     <div class="card-bg"></div>
                    <div class="col-md-4">

                        <div class="tools-card move-card " data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/icons/spell-checker.png" alt="spell-check" class="tools-icon"  >

                            </div>

                            <div class="card-body ">


                               <a href="<?= get_bloginfo('wpurl') ?>/free-tool/spell-checker"> <h3 class="tools-card-title text-uppercase text-center"> SPELL CHECKER</h3></a>

                                <p class="card-text text-center">Do you know you can still lose grades because of misspelled words even if your paper has every unique idea and cogent argument? Use our advanced spell checker never to let that happen to you.</p>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3"><img src="<?php bloginfo('template_directory'); ?>/images/Harvard referencing.png"
                                    alt="Harvard referencing" class="tools-icon"  ></div>

                            <div class="card-body">

                                <a href="<?= get_bloginfo('wpurl') ?>/free-tool/harvard-referencing"><h3 class="tools-card-title text-uppercase text-center">HARVARD REFERENCING</h3></a>

                                <p class="card-text text-center">Referencing manually is a dull, tedious, and time-consuming task, right? Don’t worry, with our AI-driven Harvard referencing tool, we make citing sources ridiculously easy. Use it Now and give your paper the Harvard look for free.</p>

                            </div>

                        </div>

                    </div>

                     <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                          <div class="tools-icon-container mb-3"><img src="<?php bloginfo('template_directory'); ?>/images/APA icon.png"
                                    alt="APA icon" class="tools-icon"  ></div>

                            <div class="card-body">

                               <a href="<?= get_bloginfo('wpurl') ?>/free-tool/apa-referencing"> <h3 class="tools-card-title text-uppercase text-center">APA Referencing</h3></a>

                                <p class="card-text text-center">Why waste hours and hours writing author names, book titles, and publishing houses manually when you have our free academic tools for automatic referencing? Value your time now and leave APA referencing issues to our free tool.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mt-4">

                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/images/mla-referencing.png" alt="grammer-check" class="tools-icon"  >

                            </div>

                            <div class="card-body">

                               <a href="<?= get_bloginfo('wpurl') ?>/free-tool/mla-referencing"> <h3 class="tools-card-title text-uppercase text-center">MLA REFERNCING</h3></a>

                                <p class="card-text text-center">Are you tired of struggling with the complexities and costs associated with other online MLA referencing tools? What we provide is a user-friendly MLA referencing generator that delivers fast and accurate results. Our expertise lies in offering this tool to assist you in your academic endeavors. Best of all, it's available to all students completely free of charge.</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/images/grammar.png" alt="grammer-check" class="tools-icon" >

                            </div>

                            <div class="card-body">

                               <a href="<?= get_bloginfo('wpurl') ?>/free-tool/grammar-checker"> <h3 class="tools-card-title text-uppercase text-center">Grammar Checker</h3></a>

                                <p class="card-text text-center">Say goodbye to unnecessary stress and awkward moments, thanks to the very first free grammar checker designed exclusively for students, complete with premium features! Now no one can question your grammatical skills when you have an advanced grammar reviewer tool by your side at no cost.</p>
                            </div>

                        </div>

                    </div>
                  
                     <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/images/chicago-referencing-pp.png" alt="chicago-referencing" class="tools-icon" >

                            </div>

                            <div class="card-body">

                               <a href="<?= get_bloginfo('wpurl') ?>/free-tool/chicago-referencing"> <h3 class="tools-card-title text-uppercase text-center">Chicago Referencing</h3></a>

                                <p class="card-text text-center">Never stress about citations! Use our Chicago referencing tool without spending a single penny. It's easy and quick. So, save time and avoid your mistakes. You only need to enter your info, click 'generate', and your citation is ready. It is perfect for students and professionals alike. Try it now!</p>
                            </div>

                        </div>

                    </div>
                
                    
                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/images/apa-referencing.png" alt="apa-referencing" class="tools-icon">-->

                    <!--        </div>-->

                    <!--        <div class="card-body">-->

                    <!--           <a href="<?= get_bloginfo('wpurl') ?>/free-tool/apa-referencing"> <h3 class="tools-card-title text-uppercase text-center">APA REFERENCING</h3></a>-->

                    <!--            <p class="card-text text-center">Your search for a free, fast, accurate, and versatile APA reference generator ends right here. With our free AI tools for research paper writing, we help you do accurate APA style referencing in seconds.</p>-->
                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/dissertation-editor.png" alt="grammer-check" class="tools-icon">-->

                    <!--        </div>-->
                    <!--        <div class="card-body">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">DISSERTATION EDITORS</h3>-->

                    <!--            <p class="card-text text-center">Use our dissertation editor tool to edit and proofread-->
                    <!--                your thesis and dissertation. Top your class and awestruck your classmates with your-->
                    <!--                work.-->
                    <!--            </p>-->

                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/bibliography-calculator.png" alt="grammer-check" class="tools-icon">-->

                    <!--        </div>-->

                    <!--        <div class="card-body">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">BIBLIOGRAPHY MAKER</h3>-->

                    <!--            <p class="card-text text-center">Don’t know how to cite your paper? Use our bibliography-->
                    <!--                maker tool and cite your essay and academic papers with a popular citation style.-->
                    <!--            </p>-->

                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                </div>
                

            </div>

        </div>

    </div>


  
    <!-- --------------------Section - Writer Tool------------------- -->
    <div id="writer-tool">

        <div class="container write-a-paper-section-tb-padding">

            <h2 class="text-center mb-4"> Free AI Tools Online That Help Analyze Your Papers</h2>

            <div class="container mt-5 ">

                <div class="row">
                         <div class="card-bg"></div>
                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/essay-writer.png" alt="grammer-check" class="tools-icon">-->

                    <!--        </div>-->

                    <!--        <div class="tools-card-body ">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">ESSAY WRITER</h3>-->

                    <!--            <p class="card-text text-center">Is your deadline approaching, and you haven't started-->
                    <!--                your essay yet? Don't worry. Use our essay writing tool and complete your work-->
                    <!--                quickly without delay.-->
                    <!--            </p>-->

                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/paraphrasing.png" alt="grammer-check" class="tools-icon">-->

                    <!--        </div>-->

                    <!--        <div class="tools-card-body">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">PARAPHRASING TOOL</h3>-->

                    <!--            <p class="card-text text-center px-2">Are you running out of ideas? Your luck’s about to-->
                    <!--                change. Copy and paste the text on our paraphrasing tool and get a new article.-->
                    <!--            </p>-->

                    <!--        </div>-->

                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/icons/word-counter.png" alt="word-counter" class="tools-icon">

                            </div>

                            <div class="tools-card-body">

                              <a href="<?= get_bloginfo('wpurl') ?>/free-tool/word-counter">  <h3 class="tools-card-title text-uppercase text-center">WORD COUNTER</h3></a>

                                <p class="card-text text-center">Looking for an online tool that helps keep line spacing, syllables, number of words in a paragraph, average sentence length, and word limit in check? Our word counter does it all for free. Use it now to ensure your paper does not exceed the required length and gets more reads.</p>
                            </div>

                        </div>

                    </div>
                    
                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/icons/thesis-generator.png" alt="word-counter" class="tools-icon">

                            </div>

                            <div class="tools-card-body">

                              <a href="<?= get_bloginfo('wpurl') ?>/free-tool/thesis-statement-generator">  <h3 class="tools-card-title text-uppercase text-center">Thesis Statement Generator</h3></a>

                                <p class="card-text text-center">Say goodbye to manual citations! Our thesis statement generator streamlines academic referencing. Spend less time formatting and more time crafting with our hassle-free, efficient tool.</p>
                            </div>

                        </div>

                    </div>
                    
                    
                    
                     <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/icons/plagiarism.png" alt="plagiarism" class="tools-icon">
                            </div>

                            <div class="tools-card-body">

                               <a href="<?= get_bloginfo('wpurl') ?>/free-tool/plagiarism-checker"> <h3 class="tools-card-title text-uppercase text-center">PLAGIARISM CHECKER</h3></a>

                                <p class="card-text text-center">No matter how much effort you put into making your paper sound original, passages with accidental plagiarism will always pop up. Use our plagiarism checker that scans your paper against huge databases to ensure every plagiarised sentence gets removed from your paper.</p>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="row mt-4">

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/proofreading.png" alt="grammer-check" class="tools-icon">-->

                    <!--        </div>-->

                    <!--        <div class="tools-card-body">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">PROOFREADING</h3>-->

                    <!--            <p class="card-text text-center">Want an expert proofreader to go through your essay?-->
                    <!--                You’ve got it. Just let our proofreading tool do that for you. Free of cost.</p>-->

                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/topic-generator.png" alt="grammer-check" class="tools-icon">-->

                    <!--        </div>-->

                    <!--        <div class="tools-card-body">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">TOPIC GENERATOR</h3>-->

                    <!--            <p class="card-text text-center">Get a stellar and mesmerizing topic for your assignment-->
                    <!--                and paper in seconds. Use our topic generator tool for generating creative topics-->
                    <!--                for free.</p>-->

                    <!--        </div>-->

                    <!--    </div>-->
                    <!--</div>-->

                   
                </div>

            </div>

        </div>

    </div>


    <!-- ------------------ Section - Calculating Tool-------------------- -->
    <div id="calculating-tool" class="section-bg-color">

        <div class="container write-a-paper-section-tb-padding">

            <h2 class="text-center mb-5">Our Free AI Tools Online That Make Calculation Easy</h2>

            <div class="container mt-3 ">
                    
                <div class="row">
                         <div class="card-bg"></div>
                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/gpa-calculator.png" class="tools-icon">-->

                    <!--        </div>-->
                    <!--        <div class="tools-card-body ">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">GPA CALCULATOR</h3>-->

                    <!--            <p class="card-text text-center">Reduce stress by using this simple GPA calculator and-->
                    <!--                keep yourself updated on your academic performance. It's simple, effective and-->
                    <!--                useful for students.-->

                    <!--            </p>-->
                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/factr-calculator.png" alt="grammer-check" class="tools-icon">-->
                    <!--        </div>-->

                    <!--        <div class="tools-card-body">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">PROBABILITY CALCULATOR</h3>-->

                    <!--            <p class="card-text text-center">If you are tired of calculating and gathering-->
                    <!--                statistics, use our probability calculator and get the results within a few seconds,-->
                    <!--                free of cost.-->
                    <!--            </p>-->

                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/algebra calculator.png" alt="grammer-check" class="tools-icon">-->
                    <!--        </div>-->

                    <!--        <div class="tools-card-body">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">ALGEBRA CALCULATOR</h3>-->

                    <!--            <p class="card-text text-center">There’s no need to ask for help solving complex algebra-->
                    <!--                equations when you can already avail our sophisticated and top-notch Algebra-->
                    <!--                Calculator for free.-->
                    <!--            </p>-->

                    <!--        </div>-->

                    <!--    </div>-->

                    <!--</div>-->

                </div>

                <div class="row mt-4">

                    <!--<div class="col-md-4">-->

                    <!--    <div class="tools-card">-->

                    <!--        <div class="tools-icon-container mb-3">-->

                    <!--            <img src="<?php bloginfo('template_directory'); ?>/icons/integral-calculator.png" alt="grammer-check" class="tools-icon">-->
                    <!--        </div>-->

                    <!--        <div class="tools-card-body ">-->

                    <!--            <h3 class="tools-card-title text-uppercase text-center">INTEGRAL CALCULATOR</h3>-->

                    <!--            <p class="card-text text-center">Forget the pain of doing manual calculations and use-->
                    <!--                our free integral calculator. We assure you will get addicted to its easy,-->
                    <!--                supportive functions.-->
                    <!--            </p>-->

                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/icons/factr-calculator.png" alt="factr-calculator" class="tools-icon"  >
                            </div>

                            <div class="tools-card-body">

                              <a href="<?= get_bloginfo('wpurl') ?>/free-tool/factoring-calculator">  <h3 class="tools-card-title text-uppercase text-center">FACTORING CALCULATOR</h3></a>

                                <p class="card-text text-center">Our factorization calculator helps you break down complex algebraic expressions such as binomials, trinomials, and quadratic polynomials into smaller factors with detailed steps. Use it Now for free and get accurate results in seconds.
</p>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/icons/chemical-equation.png" alt="chemical-equation" class="tools-icon">
                            </div>

                            <div class="tools-card-body">

                              <a href="<?= get_bloginfo('wpurl') ?>/free-tool/chemical-equation-checker">  <h3 class="tools-card-title text-uppercase text-center">Chemical Equation Checker</h3></a>

                                <p class="card-text text-center">Balancing chemical equations is a frustrating and tiring task with higher chances of mistakes unless you have free AI tools online. We balance your chemical equation with our AI tool free, fast, and with proper super and subscripts.</p>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="tools-card move-card" data-hover-color="#03c1ff" data-card-initial>

                            <div class="tools-icon-container mb-3">

                                <img src="<?php bloginfo('template_directory'); ?>/icons/gpa-calculator.png" class="tools-icon" alt="gpa-calculator">
                            </div>

                            <div class="tools-card-body">

                                 <a href="<?= get_bloginfo('wpurl') ?>/free-tool/gpa-calculator"><h3 class="tools-card-title text-uppercase text-center">GPA CALCULATOR
                                </h3> </a>

                                <p class="card-text text-center">Reduce stress by using this simple GPA calculator and
                                    keep yourself updated on your academic performance. It's simple, effective and
                                    useful for students.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
    <!-- ---------------------------------Section - CTA----------------------------------------->

    <div class="container-fluid cta-order-now bg-blue write-a-paper-section-tb-padding">

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                     <div id="anim-updt" class="lottie-container" data-animation="anim-updt"></div>
                    <!--<img src="<?php bloginfo('template_directory'); ?>/images/ezgif.com-gif-to-webp.webp" alt="anim-updt" class="mobile-width-100">-->

                </div>

                <div class="col-md-8 d-flex align-items-center justify-content-center">

                    <div class="px-3 mobile-center">

                        <div class="section-sub-head text-yellow text-start">Best Online Free Tools</div>

                        <h2 class="text-start mobile-heading-center text-white">That Will Make Your Life Easy</h2>

                        <p class="text-white mt-3">Have you been searching Google for a hub that offers all the research paper writing tools free? You are at the right place. Not only our prices for <a class="linkwhite" href="https://paperperk.com/">custom paper writing service</a> are highly affordable, but we also offer a number of free tools to help students at every step of their academic journey.</p>
                    <p class="text-white mt-3">So whether you need suggestions, assessment, or formatting help for your assignments, want real-time feedback for your recent research paper, or want to balance equations and factorize polynomials, you have our free AI tools at your back. Why wait? Get the tools you need and open the door to success in your academic life.</p>

                        <a class="btn btn-custom btn-yellow btn-shadow mt-3" href="https://order.paperperk.com">Get Help Now</a>

                    </div>

                </div>

            </div>

        </div>

    </div>
    

    <!-- ----------------------------Section-11 Frequently Asked Questions----------------------------- -->

    <div class="container-fluid write-a-paper-section-tb-padding" id="faqs-section">

        <div class="container">

            <div class="section-sub-head">Frequently Asked Questions</div>

            <!--<h2 class="mb-4">Frequently Asked Questions</h2>-->


            <!-- -----Accordian----- -->

            <div class="row mt-5">

                <div class="col-md-6">

                    <div class="faq" id="accordion">

                        <div class="card faq-bg-color">

                            <div class="card-header" id="faqHeading-1">

                                <div class="mb-0 d-flex align-items-center">

                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-1"
                                        aria-expanded="true" aria-controls="faqCollapse-1">
                                            
                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon"></span>What academic writing free tools do you offer?</h5>

                                </div>

                            </div>

                            <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1"
                                data-parent="#accordion">

                                <div class="card-body">

                                    <p>We offer many academic writing tools ranging from editing and proofreading to formatting and calculating tools. Our academic writing tools such as spell checker, grammar checker, and paper checker are intended to help students and professionals take their writing skills to the next level.</p>

                                </div>

                            </div>

                        </div>

                        <div class="card faq-bg-color">

                            <div class="card-header" id="faqHeading-2">

                                <div class="mb-0 d-flex align-items-center">


                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-2"
                                        aria-expanded="false" aria-controls="faqCollapse-2">

                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon"></span>Are your free tools user-friendly?</h5>

                                </div>

                            </div>

                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2"
                                data-parent="#accordion">

                                <div class="card-body">

                                    <p>Our free AI tools are known for their user-friendly interface. Everyone from a beginner to a professional can use them with remarkable ease.</p>

                                </div>

                            </div>

                        </div>

                        <div class="card faq-bg-color">

                            <div class="card-header" id="faqHeading-3">

                                <div class="mb-0 d-flex align-items-center">

                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-3"
                                        aria-expanded="false" aria-controls="faqCollapse-3">
                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon-01"></span>Can your academic tools be used by students of advanced level?</h5>

                                </div>

                            </div>

                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3"
                                data-parent="#accordion">

                                <div class="card-body">

                                    <p>Definitely. Whether you are a school student writing coursework or a college student conducting research, you can use our free AI tools online to streamline your writing process.</p>

                                </div>

                            </div>

                        </div>
                        <div class="card faq-bg-color">

                            <div class="card-header" id="faqHeading-4">

                                <div class="mb-0 d-flex align-items-center">

                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-4"
                                        aria-expanded="false" aria-controls="faqCollapse-4">

                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon-02"> </span>What is the accuracy level of your free AI tools for research paper writing?</h5>

                                </div>

                            </div>

                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4"
                                data-parent="#accordion">

                                <div class="card-body">
                                    <p>The accuracy level of our free tools is unmatchable. They are powered by advanced artificial intelligence and have unlimited access to huge databases across the globe. Every time you use our free AI tools online, your data is scanned against relevant databases to produce the most accurate results.</p>
                                </div>

                            </div>
                        </div>


                        <div class="card faq-bg-color">

                            <div class="card-header" id="faqHeading-5">

                                <div class="mb-0 d-flex align-items-center">

                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-5"
                                        aria-expanded="false" aria-controls="faqCollapse-5">

                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon-03"></span>Do your free tools charge any hidden fee?</h5>

                                </div>

                            </div>

                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5"
                                data-parent="#accordion">

                                <div class="card-body">

                                    <p>Never. Our tools are absolutely free to use. We don’t charge you a single penny and offer unrestricted access any time of the day.</p>

                                </div>

                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-md-6">

                    <div class="faq" id="accordion">

                        <div class="card faq-bg-color">

                            <div class="card-header" id="faqHeading-6">

                                <div class="mb-0 d-flex align-items-center">

                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-6"
                                        aria-expanded="true" aria-controls="faqCollapse-6">

                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon-04"></span>Do I need to pass through registration to get access to a specific free tool?</h5>

                                </div>

                            </div>

                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>No. We don’t require you to sign up or register your account when using our tools. Moreover, we don’t distract you with pop-ups or ads while using our academic tools.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card faq-bg-color">
                            <div class="card-header" id="faqHeading-7">
                                <div class="mb-0 d-flex align-items-center">
                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-7"
                                        aria-expanded="false" aria-controls="faqCollapse-7">
                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon-05"></span>Are the tools accessible on any kind of device?</h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Definitely. You can access our tools on your mobile, laptop, desktop, or any other kind of device. Furthermore, these tools are compatible with all operating systems.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card faq-bg-color">
                            <div class="card-header" id="faqHeading-8">
                                <div class="mb-0 d-flex align-items-center">
                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-8"
                                        aria-expanded="false" aria-controls="faqCollapse-8">
                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon-06"></span>Are these tools safe to use?</h5>
                                </div>
                            </div>
                            <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Paper Perk uses secure encryption to ensure that your information does not get accessed by third parties and that your files remain private.</p>

                                </div>
                            </div>
                        </div>

                        <div class="card faq-bg-color">
                            <div class="card-header" id="faqHeading-9">
                                <div class="mb-0 d-flex align-items-center">
                                    <h5 class="faq-title" data-bs-toggle="collapse" data-bs-target="#faqCollapse-9"
                                        aria-expanded="false" aria-controls="faqCollapse-9">
                                        <span class="plus-icon"><img src="<?php bloginfo('template_directory'); ?>/icons/plus-icon.png" alt="plus-icon-07"></span>What academic calculator do you offer?</h5>
                                </div>
                            </div>
                            <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p>As of now, we are offering factoring, GPA, and chemical equations calculators with many other calculators in the process of development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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

<?php get_footer(); ?>