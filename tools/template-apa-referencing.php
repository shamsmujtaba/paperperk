<?php
/* Template Name: APA Referencing  */
get_header('tools');
?>
<style>
  #detail-list p {
        font-size: 12px !important;
        font-style: italic;
    }
    .error {
        border: 1px dashed #FF0000 !important;
    }
</style>
</div>

<div class="container-fluid padding-tb-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h1 class="center margin-b-1 ">Accurate Citations With Versatile APA Referencing Generator</h1>
                <p class="text-center">You have been putting all your energy into your paper to make it stand out. NOW is the time to cite references to dispel even the slightest doubts about plagiarism with our fast APA referencing tool and pull off high grades. 
                </p>
                
                <h2 class="center margin-b-1 ">Classic APA 6 Referencing Generator— Make Every Line Count!
</h2>
                <p class="text-center">You won’t let incorrect citations spoil your otherwise flawlessly crafted work, would you? Get your hands on our state-of-the-art APA 6 reference tool and make every line of your paper talk authenticity. 

                </p>
               

            </div>

        </div>

    </div>

</div>
<!-- Harvard Citation-->
<div class="container pb-1" id="refrencing">

    <div class="row">
      <div class="col-md-12 ">
        <ul class="nav nav-tabs col-centered">
          <li class="nav-item active"><a class="nav-link active" data-toggle="tab" href="#website">Website</a></li>
          <li class="nav-item ml-2"><a class="nav-link" data-toggle="tab" href="#book">Book</a></li>
          <li class="nav-item ml-2"><a class="nav-link" data-toggle="tab" href="#journal">Journal</a></li>
          <li class="nav-item ml-2"><a class="nav-link" data-toggle="tab" href="#Newspaper">Newspaper</a></li>
        </ul>

        <div class="col-centered">
          <div class="tab-content" id="tab-div">
    <div id="website" class="tab-pane my-container active ">
        <div class="container form-outer-container p-10">
            <form action="" class="row">
                <div class="col-md-12 mt-3">
                    <h5 class="text-info fw-normal form-mb-10">Authors</h5>
                </div>

                <div class="col-md-5 form-mb-20">
                    <label for="" class="form-mb-10">Last Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="website-last"
                        id="website-last" placeholder="Last name">
                </div>
                <div class="col-md-5 form-mb-20">
                    <label for="" class="form-mb-10"> First Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name='website-first'
                        id="website-first" placeholder="First name (and middle if exists)">
                </div>
                <div class="col-md-12 mt-5">
                    <h5 class="text-info fw-normal">General info</h5>
                </div>
                <div class="col-md-12 form-mb-20">
                    <label for="" class="form-mb-10">Title of webpage (Enter the title of the webpage)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name='website-title'
                        id="website-title" placeholder="Name Of Website">

                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Year of Publication (Enter the year of website
                        publication)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="website-year"
                        id="website-year" placeholder="2012">
                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">URL/web address (Enter the full URL of the website)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="website-url"
                        id="website-url" placeholder="http://www.cio.com.au/article/560586/">
                </div>
                <div class="col-md-12 text-center my-5">
                    <button type="button" onclick="websiteRefrence(this, 1)"
                        class="btn btn-primary btn-generate-cit text-uppercase p-2 rounded btn-font fw-normal">Generate
                        Website Reference</button>
                </div>
            </form>
        </div>

    </div>
    <div id="book" class="tab-pane my-container fade">
        <div class="container form-outer-container p-10">
            <form action="" class="row">
                <div class="col-md-12 mt-3">
                    <h5 class="text-info fw-normal form-mb-10">Authors</h5>
                </div>

                <div class="col-md-5 form-mb-20">
                    <label for="" class="form-mb-10">Last Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="book-last"
                        id="book-last" placeholder="Last name">
                </div>
                <div class="col-md-5 form-mb-20">
                    <label for="" class="form-mb-10"> First Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name='book-first'
                        id="book-first" placeholder="First name (and middle if exists)">
                </div>
                <div class="col-md-12 mt-5">
                    <h5 class="text-info fw-normal">General info</h5>
                </div>
                <div class="col-md-12 form-mb-20">
                    <label for="" class="form-mb-10">Book Title (Enter the title of the book)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name='book-title'
                        id="book-title" placeholder="Paste name of series here">

                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Year of Publication (Enter the article publication):*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name "book-year"
                        id="book-year" placeholder="Make it Stick">
                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Edition (Enter the Edition Number):*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name "book-edition"
                        id="book-edition" placeholder="5th">
                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Publisher:*</label>
                    <input type="text" class="form-control border border-primary my-form-control" id="book-publisher"
                        placeholder="Paste publisher name">
                </div>

                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Place of Publication:</label>
                    <input type="text" class="form-control border border-primary my-form-control" id="book-place"
                        placeholder="Ex: Amsterdam, the Netherlands">
                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Pages (Enter the Pages Range):*</label>
                    <input type="text" class="form-control border border-primary my-form-control" id="book-pages"
                        placeholder="15-30">
                </div>



                <div class="col-md-12 text-center my-5">
                    <button type="button" onclick="bookRefrence(this, 1)"
                        class="btn btn-primary btn-generate-cit text-uppercase p-2 rounded btn-font fw-normal">Generate
                        Book Reference</button>
                </div>
            </form>
        </div>
    </div>

    <div id="journal" class="tab-pane my-container fade">
        <div class="container form-outer-container p-10">
            <form action="" class="row">
                <div class="col-md-12 mt-3">
                    <h5 class="text-info fw-normal form-mb-10">Authors</h5>
                </div>

                <div class="col-md-5 form-mb-20">
                    <label for="" class="form-mb-10">Last Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="journal-last"
                        id="journal-last" placeholder="Last name">
                </div>
                <div class="col-md-5 form-mb-20">
                    <label for="" class="form-mb-10"> First Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name='journal-first'
                        id="journal-first" placeholder="First name (and middle if exists)">
                </div>
                <div class="col-md-12 mt-5">
                    <h5 class="text-info fw-normal">General info</h5>
                </div>
                <div class="col-md-12 form-mb-20">
                    <label for="" class="form-mb-10">Article Title (Enter the article title of the journal)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name='journal-artical'
                        id="journal-artical" placeholder="Name Of Journal">

                </div>
                <div class="col-md-12 form-mb-20">
                    <label for="" class="form-mb-10">Journal Title (Enter the title of the journal)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name='journal-title'
                        id="journal-title" placeholder="Name Of Journal">

                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Year of Publication (Enter the article publication):*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="journal-year"
                        id="journal-year" placeholder="2009">
                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Volume (Enter the volume no.)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="journal-volume"
                        id="journal-volume" placeholder="8">
                </div>
                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Issue Number (Enter the issue no.):*</label>
                    <input type="text" class="form-control border border-primary my-form-control"
                        id="journal-issue-number" placeholder="32">
                </div>

                <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Pages (Enter the page numbers)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" id="journal-pages"
                        placeholder="15-30">
                </div>



                <div class="col-md-12 text-center my-5">
                    <button type="button" onclick="journalRefrence(this, id)"
                        class="btn btn-primary btn-generate-cit text-uppercase p-2 rounded btn-font fw-normal">Generate
                        Journal Reference</button>
                </div>
            </form>
        </div>
    </div>
    <div id="newspaper" class="tab-pane my-container fade">

    <div class="glossymenu">

        <div class="container  form-outer-container">

            <div class="row">

                <div class="col-md-12">

                    <form action="" class="row">
                        <div class="col-md-12 mt-3">
                            <h5 class="form-heading-pink form-mb-10">Author</h5>
                        </div>

                        <div class="col-md-5 form-mb-20">
                            <label for="" class="form-mb-10">Last Name:</label>
                            <input type="text" id="newspaper-last" class="form-control border border-primary"
                                placeholder="Last name">
                        </div>
                        <div class="col-md-5 form-mb-20">
                            <label for="" class="form-mb-10">First Name:</label>
                            <input type="text" id="newspaper-first" class="form-control border border-primary"
                                placeholder="First name">
                        </div>
                        <div class="col-md-12">
                            <h5 class="form-heading-pink">General info</h5>
                        </div>
                        <div class="col-md-12 form-mb-20">
                            <label for="" class="form-mb-10">Article Title :*</label>
                            <input type="text" id="newspaper-artical" class="form-control border border-primary"
                                placeholder="Newspaper title">
                        </div>
                        <div class="col-md-12 form-mb-20">
                            <label for="" class="form-mb-10">Newspaper Title :*</label>
                            <input type="text" id="newspaper-title" class="form-control border border-primary"
                                placeholder="Newspaper title">
                        </div>
                        <div class="col-md-6 mt-3 form-mb-20">
                            <label for="" class="form-mb-10">Year of Publication :*</label>
                            <input type="text" id="newspaper-year" placeholder="2009"
                                class="form-control border border-primary">
                        </div>
                        <div class="col-md-2 mt-3 form-mb-20">
                            <label for="" class="form-mb-10">Page No:*</label>
                            <input type="text" id="newspaper-page" class="form-control border border-primary"
                                placeholder="16">
                        </div>
                        <div class="col-md-12">
                            <h5 class="form-heading-pink form-mb-20">Dates</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 form-mb-20">
                                    <label for="" class="form-mb-10">Date of Publication:</label>
                                    <input type="text" id="newspaper-pub-year" placeholder="Year"
                                        class="form-control form-mt-5 border border-primary">
                                </div>
                                <div class="col-md-4 form-mb-20">
                                    <label for="" class="invisible">Hello</label>
                                    <select name="" id="newspaper-pub-month"
                                        class="form-control border form-mt-10 border-primary">
                                        <option name="" value="">Month</option>
                                        <option name="January" value="Jan">January</option>
                                        <option name="February" value="Feb">February</option>
                                        <option name="March" value="Mar">March</option>
                                        <option name="April" value="Apr">April</option>
                                        <option name="May" value="May">May</option>
                                        <option name="June" value="Jun">June</option>
                                        <option name="July" value="Jul">July</option>
                                        <option name="August" value="Aug">August</option>
                                        <option name="September" value="Sep">September</option>
                                        <option name="October" value="Oct">October</option>
                                        <option name="November" value="Nov">November</option>
                                        <option name="December" value="Dec">December</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-mb-20">
                                    <label for="" class="invisible">Hello</label>
                                    <select id="newspaper-pub-day" name="day"
                                        class="form-control border form-mt-10 border-primary">
                                        <option>Day</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 text-center my-5">
                            <button type="button" onclick="newspaperCitation(this, 1)"
                                class="btn btn-primary btn-generate-cit text-uppercase rounded btn-font fw-normal">Generate
                                Citation</button>
                        </div>
                    </form>

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


<div class="container padding-b-3">

    <div class="row">

        <div class="col-md-12">

            <h2 class="margin-b-2 mt-0">The Three Steps That Leads To Well-Referenced Masterpiece</h2>
        </div>

    </div>

    <div class="row p-6">

        <div class="mb-2">

            <p class="text-center">No doubt, writing references manually is a stupefyingly dull and tedious task. Couple that with the chances of errors you are prone to make, and the process of citation becomes a recipe for academic disaster, right? Hold on. Our APA referencing generator has all your problems sorted. All it takes to immaculate references are the three steps below:
</p>

        </div>

    </div>

    <div class="row padding-t-2">

        <div class="col-md-4 col-xs-4">

            <div class="big-num"> Step 1: </div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="big-num">Step 2: </div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="big-num">Step 3: </div>

        </div>

    </div>

    <div class="row steps-dot">

        <div class="col-md-4 col-xs-4">

            <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps-dot1" /></div>

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
                        <h4 class="step-heading">Enter Details</h4>
                    </div>

                    <p>Fill out the form with the details required to get the process going.</p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3  col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/scan-icon.png" alt="step-image-size2" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading">Ask For References</h4>
                    </div>

                    <p>Click the GENERATE CITATION button</p>
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 col-xs-3  step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/report-icon.png" alt="step-image-size3" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading">Download Your File</h4>
                    </div>
                    <p>Get your Referenced Document
</p>

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

                <h2 class="margin-b-1">   Our AI-Powered Free Tools You Can Count On</h2>

                <p class="text-center">Apart from our Paper Writing Service, we offer free tools to help students cruise through academic distress.
</p>

            </div>

        </div>

        <?php get_template_part('includes/section', 'othertools') ?>

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

                <a class="menuitem submenuheader" href="#">Why are citations and references required when we are writing a research paper?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Citations and references are considered very important in research and dissertations. Citation allows our readers to locate the sources we have taken ideas from in case they want to learn more. It also allows us to show professionalism by giving credit for ideas to those who came up with them in the first place. It also saves us from plagiarism because we mention the original owner of the works and do not publish them with our name. Citation and references add weight to our arguments because they give the readers the message that whatever we are writing is backed by in-depth research.
</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">Is your free APA citation accurate?</a>

                <div class="submenu">

                    <div class="p-faq">

                        <p>Without a doubt. Our free 7th APA referencing generation uses databases of scholarly journals. It is programmed to produce perfectly accurate results, provided that you feed the details it requires correctly.
</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">What is the best APA 7th style referencing generator?</a>

                <div class="submenu">

                    <div class="p-faq">

                        <p>Many websites provide the 7th APA referencing generators. Based on the feedback from our users, ours is one of, if not the best, APA citation generating tools.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">What does APA in-text citation look like?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>In APA in-text citation style, we use the author's last name and the publication date of their work when we paraphrase the idea in our own words. In the case of direction quotation, we follow the same criteria except that we include the page number the idea exactly appeared on and enclose it in inverted commas. If we are citing sources that have no pages, we add the number of the paragraph.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">How do I cite an article published in a journal in APA style?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>To cite an article published in a scholarly journal, you need to write the author's name, year of publication, article title, volume and issue number of the journal, and the page numbers on which it appeared. </p>

                    </div>

                </div>
                
                <a class="menuitem submenuheader" href="#">What is the difference between in-text citations and references in APA?
</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>The main difference between in-text citations and references lies in the details you provide. In-text citations refer to the short information you provide about the author and the year of publication of the work, and in case you are quoting the exact words of an author, you include the page number as well. In references, on the other hand, you provide full details about the author, year of publication, publisher name, and page numbers. In the case of scholarly journals, you are supposed to write the article name, journal name, journal volume, and issue number.</p>

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

                <h2 class="section-head center">7 APA Reference Generator_We Are Back in Business And How!</h2>

                <div>
                    <p class="text-center">The world is advancing so fast, and so is our free APA citation generator. With its state-of-the-art design by geek developers and leading academic scholars, it is faster, more accurate, and easy to use than ever.</p>
                </div>

                <div class="text-center">
                    <h3>Never Charges More Than 0.0$</h3>
                    <p>Yes, you heard that right. Our APA citation generator never charges a penny for its round-the-clock services. 

                    </p>
                    <h3>Second To None In Accuracy</h3>
                    <p>If you have ever got your hand on our services, you already know that Our Writers value accuracy more than anything. Know that our APA 7th edition generator preserves that legacy. It is as accurate as everything else on Paper Perk.</p>
                    
                    <h3>Fast and Furious</h3>
                    <p>One of the reasons you are looking for an APA referencing tool online is because citing on your own takes time, and you have not got a lot of it. Right? Use our free APA reference generator and save your valuable time. </p>
                    <h3>No Ad, Zero Pop-Ups</h3>
                    <p>When you use our free APA citation generator, we go above and beyond to ensure you use it with nothing to distract you. That’s why you would see no ads and pop-ups while referencing your paper. 
                    </p>
                    
                    <h3>Sophisticated Yet Simple</h3>
                    <p> No doubt, our free reference tool utilizes sophisticated technology to function, yet it is simple to use.</p>
                </div>

            </div>

        </div>

        <!--Vertical Tabs-->

        <div class="row margin-t-2">
            <div role="tabpanel">
                <div class="col-sm-4">
                    <div class="ex1">

                        <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                            <li role="presentation" class="brand-nav active"><a href="#tab1" data-toggle="tab">Why Go For Our APA Referencing Generator</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab2" data-toggle="tab">APA Referencing Generator_By Whom And For Whom</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab3" data-toggle="tab">How to Get the Most Out of APA Referencing Generators</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="ex2">

                        <div class="tab-content no-padding no-margin">

                            <div class="tab-pane fade in active" id="tab1">

                                <h3><div class="blue-header">Why Go For Our APA Referencing Generator
</div></h3>


                                <p>You might wonder, with so many sites offering APA 7th style referencing tools, what makes ours stand out? Why is it that students, with so many options at their fingertips, choose ours? The answer is quite simple: They trust us based on our dedication and determination never to let any promise go unkept in our <a href="https://paperperk.com/">paper writing service</a>, no matter what.&nbsp;</p>
<h4>Versatile Referencing</h4>
<p>Whether it is a scholarly article you are eager to cite, an article in a weekly magazine on a pressing political issue, a blog on a website, or a translated version of a German essay, our APA referencing tool generates references for them all. It simply is not programmed to say NO when it comes to APA 7th referencing.</p>
<h4>Works In A Straightforward Way</h4>
<p>You don&rsquo;t need to be a degree holder in computer programming to work on our free citation generator. All it takes to generate references are the details even a school child can provide.</p>
<h4>Immaculate Citation</h4>
<p>Our free APA 6 referencing generator is good at the only thing it is designed for. Yes, you guessed it right: To generate references that are as accurate and versatile as you desire. And that is all you need from it, don&rsquo;t you?</p>
<h4>Generates Both In-text Citations and References</h4>
<p>Our APA citation generator can serve you both in case of in-text citation as well as detailed references with equal ease.</p>
<h4>Minimum Distractions</h4>
<p>With the attention span decreasing fast, it is getting harder and harder to concentrate on one thing more than ever. We make sure you are distracted by no pop-ups or ads. Get the process of generating references underway now and leave once you are done with it with no distractions whatsoever. </p>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <h3><div class="blue-header">APA Referencing Generator_By Whom And For Whom</div></h3>

                                <p>Our 7th APA reference generator is developed by skilled developers under the direction of doctoral and post-doctoral researchers for every one of you, especially for the students of psychology, sociology, anthropology, and other social sciences. But they are not the only ones who can benefit from its multi-dimensional referencing capabilities. Here is a list of potential beneficiaries of our APA referencing tool.</p>
<h4>School Students</h4>
<p>School students can use the APA 7 citation generator when they need help with references in their school assignments.</p>
<h4>College Students</h4>
<p>Our APA referencing tool is equally handy for college students who need to give references for the sources they have quoted in their college <a href="https://paperperk.com/services/term-paper-writing-service">term paper writing</a> assignment.</p>
<h4>Researchers</h4>
<p>Free APA reference generators especially benefit researchers because they cite many sources and have other more important things to do. What would have taken them hours now gets completed in minutes with our APA 7th style referencing tool.</p>
<h4>Scholarly Writers</h4>
<p>Writers publishing their research papers need to be as accurate as possible in their references. As professional as they may be, as humans, even professional writers are prone to commit mistakes. That is where our tool comes to the rescue. Our APA 6th and 7th reference generators help them minimize errors to the barest of all margins.</p>
<h4>Editors of Scholarly Journals</h4>
<p>Once the writers send articles for publication in a scholarly journal, it's the editor&rsquo;s responsibility to check the left-out mistakes in the references. With so many articles chosen to be published in a single issue of the journal, it takes a lot of time for the editor to proof-cite every article. Doesn&rsquo;t it? Hold on. With our free APA citation generator back in business, checking references is easier than ever for the editors.</p>
                            </div>
                            <div class="tab-pane" id="tab3">
                               <h3> <div class="blue-header">How to Get the Most Out of APA Referencing Generators</div></h3>
<p>APA 7th style citation tools are reinventing the way references are done. Gone are the days when students and writers would spend hours and hours citing their sources of information in their dissertations and research papers.<br />As revolutionary and facilitating as these reference generators may be in creating references, they are still prone to committing mistakes if not instructed properly. Here are the best practices to get the most out of our free APA citation tool.</p>
<h4>Make Sure You Input The Correct Details</h4>
<p>As you know, the generator receives input from the user in the form of the author&rsquo;s name, source&rsquo;s title, publication date, name of the publisher, and so on, processes it, and generates the desired references. If you feed it incorrect information, it cannot give accurate results. So, every time you use it, make sure you are feeding it the info right.</p>
<h4>Ensure You Provide the Correct Edition and Version</h4>
<p>Ensure that when you use a reference generator for edited or translated books, you include the name of the editor and translators as well. Otherwise, it becomes difficult for the tool to provide the correct references. In the case of journals, include volume and issue number as well to make sure the generator does take it for a magazine article.</p>
<h4>Fight the Urge to Copy and Paste the Generated References</h4>
<p>As much as you want to copy and paste the citations generated against the details you have provided, don&rsquo;t copy and paste mindlessly into your document. Ensure that you take a few extra seconds and cross-check it for the highly unlikely but still possible errors. If you find them, you can correct them; if not, go on and paste the references.</p>
<h4>Use Peer-Reviewed Sources</h4>
<p>Always make sure the sources you are citing in your paper are highly credible and unbiased. Our APA referencing 7th edition generator will provide citations in whatever way you want. Still, if your sources are not trustworthy, chances are your paper will not stand out from the crowd. Try citing sources that are peer-reviewed, objective and come from reputable sources. Avoid citing prejudiced, emotion-laden, ambiguous, and sponsored sources.</p>
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
Reinventing The Way APA Referencing Is Done!</h2>

            <p class="white ">Writing references is dull, monotonous, and boring. Or Was it? With us just one click away, referencing had never been this easy. Generate your citations now and end your paper on a high. Yet to get underway with it? Get in touch with our writers to write your paper from scratch.</p>
            <div class="white-btn"><a href="https://order.paperperk.com/">Order Now</a></div>

        </div>

    </div>

</div>
<script>
  function websiteRefrence(button, id) {

    $("#loader").show().delay(2000).fadeOut();
    $('html,body').animate({
        scrollTop: $("#show-div").offset().top
      },
      'slow');
      var form = button.closest('form');
      validate_form_fields(form);
    // console.log(form);
      
    let web_last = $('#website-last').val();
    let public_year = $('#website-year').val();
    let web_first = $('#website-first').val();
    let web_year = $('#website-year').val();
    let pub_month = $('#web-month').val();
    let web_url = $('#website-url').val();
    let web_title = $('#website-title').val();
     let refrence = '';
    refrence += '<h3>Example References For Website</h3>'
    refrence += '<h6>Example References For Website</h6>'
    refrence += `<p>${web_last}, ${web_first.charAt(0)}.(${public_year}) ${web_title}. Retrived from ${web_url}. </p>`
    refrence += `<h6>Example In-Text Citation for a Website.</h6>`
    refrence += `<p>(${web_last}, ${public_year}).</p>`

    $('#detail-list').html(refrence);
    $('#detail-list').show(3000);
  }
  function bookRefrence(button, id){

    $("#loader").show().delay(2000).fadeOut();
    $('html,body').animate({
        scrollTop: $("#show-div").offset().top
      },
      'slow');
      var form = button.closest('form');
      validate_form_fields(form)
    let book_last = $('#book-last').val();
    let book_first = $('#book-first').val();
    let public_year = $('#book-year').val();
    let book_title = $('#book-title').val();
    let book_edition = $('#book-edition').val();
    let book_publisher = $('#book-publisher').val();
    let book_place = $('#book-place').val();
    let book_pages = $('#book-pages').val();
    let title = $('#book-title').val();
    let refrence = '';
    refrence += '<h3>Example References For Book</h3>'
    refrence += '<h6>Example References For Book</h6>'
    refrence += `<p>${book_last}, ${book_first.charAt(0)}.(${public_year}) ${book_title}. (${book_edition}.). ${book_place}: ${book_publisher}. ${book_pages}. </p>`
    refrence += `<h6>Example In-Text Citation for a Book.</h6>`
    refrence += `<p>(${book_last}, ${public_year}).</p>`


    $('#detail-list').html(refrence);
    $('#detail-list').show(3000);
  }

  function journalRefrence(button, id) {

    $("#loader").show().delay(2000).fadeOut();
    $('html,body').animate({
        scrollTop: $("#show-div").offset().top
      },
      'slow');
      var form = button.closest('form');
      validate_form_fields(form)
    let journal_last = $('#journal-last').val();
    let journal_first = $('#journal-first').val();
    let journal_artical = $('#journal-artical').val();
    let journal_title = $('#journal-title').val();
    let journal_volume = $('#journal-volume').val();
    let public_year = $('#journal-year').val();
    let issue_number = $('#journal-issue-number').val();
    let journal_url = $('#journal-url').val();
    let journal_pages = $('#journal-pages').val();
    let  refrence='';
    refrence += '<h3>Example References For Journal</h3>'
    refrence += '<h6>Example References For Journal</h6>'
    refrence += `<p>${journal_last}, ${journal_first.charAt(0)}.(${public_year}). ${journal_artical}. ${journal_title}. ${journal_volume}(${issue_number}.). ${journal_pages}. </p>`
    refrence += `<h6>Example In-Text Citation for a Journal.</h6>`
    refrence += `<p>(${journal_last}, ${public_year}).</p>`

    

    $('#detail-list').html(refrence);
    $('#detail-list').show();

    $('#bibli-div').show(3000);
  }
  function validate_form_fields(form){
       var inputs = form.querySelectorAll('input');
        inputs.forEach(function(input) {
              if (input.value.trim() === '') {
                  input.classList.add('error');
                   $('html,body').animate({
                    scrollTop: $("#tab-div").offset().top
                  },
                  'slow');
              } else {
                  input.classList.remove('error');
              }
        })
  }

     function newspaperCitation (button, id){

    $("#loader").show().delay(2000).fadeOut();
    $('html,body').animate({
        scrollTop: $("#show-div").offset().top
      },
      'slow');
      var form = button.closest('form');
      validate_form_fields(form)
    let newspaper_last = $('#newspaper-last').val();
    let newspaper_first = $('#newspaper-last').val();
    let newspaper_artical = $('#newspaper-artical').val();
    let newspaper_title = $('#newspaper-title').val();
    let public_year = $('#newspaper-year').val();
    let newspaper_page = $('#newspaper-page').val();
    let newspaper_pub_year = $('#newspaper-pub-year').val();
    let newspaper_pub_month = $('#newspaper-pub-month').val();
    let newspaper_pub_day = $('#newspaper-pub-day').val();
    
    let refrence = '';
    refrence += '<h3>Example References For Newspaper</h3>'
    refrence += '<h6>Example References For Newspaper</h6>'
    refrence += `<p>${newspaper_last}, ${newspaper_first.charAt(0)}. (${public_year}) ${newspaper_artical}. ${newspaper_title}. ${newspaper_pub_day}-${newspaper_pub_month}.  ${newspaper_page} </p>`
    refrence += `<h6>Example In-Text Citation for a Book.</h6>`
    refrence += `<p>(${newspaper_last} ${public_year})</p>`

    console.log($('#detail-list'))
    $('#detail-list').html(refrence);
    $('#detail-list').show(3000);
  }
</script>


<?php get_footer('tools'); ?>




