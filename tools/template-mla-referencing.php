<?php
/* Template Name: MLA Referencing  */
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

                <h1 class="center margin-b-1 ">Use Free MLA Referencing Generator and Relax</h1>
                <p class="text-center">Did you spend your entire weekend buried in stacks of books? Or stuck in the web of online articles – all for that perfect citation? With just a few clicks, this tool handles the tricky business of proper citations, so that you can focus more on the essence of your research. Because, at the end of the day, your insights matter more than missing commas, right?</p>
                
                <h2 class="center margin-b-1">Free MLA Format Creator For All Sources</h2>
                <p class="text-center">Are pesky formatting rules taking the fun out of your research? Discouraged about how amazing research content gets overshadowed by chaotic citations? We hear you! That’s why we created a tool that's tuned to work with all sources. Bring all your citation woes and watch them disappear as this smart tool formats them into a seamless MLA style. Now take a deep breath and let’s make your research shine, shall we? </p>

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
          <li class="nav-item ml-2"><a class="nav-link" data-toggle="tab" href="#newspaper">Newspaper</a></li>
        </ul>

        <div class="col-centered">
          <div class="tab-content" id= "tab-div">
            <div id="website" class="tab-pane my-container active ">
              <div class="container form-outer-container p-10">
                  <form action="" class="row">
                    <div class="col-md-12 mt-3">
                      <h5 class="text-info fw-normal form-mb-10">Authors</h5>
                    </div>
                    
                    <div class="col-md-5 form-mb-20">
                      <label for="web-last" class="form-mb-10">Last Name:</label>
                      <input type="text" class="form-control border border-primary my-form-control" name="web-last" id="web-last" placeholder="Sherman">
                    </div>
                    <div class="col-md-5 form-mb-20">
                      <label for="web-first" class="form-mb-10"> First Name:</label>
                      <input type="text" class="form-control border border-primary my-form-control" name = 'web-first' id="web-first" placeholder="Jane">
                    </div>
                    <div class="col-md-12 mt-5">
                      <h5 class="text-info fw-normal">General info</h5>
                    </div>
                    <div class="col-md-6 form-mb-20">
                         <label for="web-title" class="form-mb-10">Title of webpage (Enter the title of the webpage)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= 'web-title' id="web-title" placeholder="software developments in the 21st Century">
                  
                    </div>
                    <div class="col-md-6 form-mb-20">
                         <label for="web-name" class="form-mb-10">Name of website (Enter the title of the webpage)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= 'web-name' id="web-name" placeholder="Computer Software today">
                  
                    </div>
                    <div class="col-md-6 mt-3 form-mb-20">
                       <label for="web-year" class="form-mb-10">Year of Publication (Enter the year of website publication)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= "web-year" id="web-year" placeholder="2009">
                    </div>
                    <div class="col-md-6 mt-3 form-mb-20">
                       <label for="web-format" class="form-mb-10">format (Enter the document format)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= "web-format" id="web-format" placeholder="Web/Print">
                    </div>
                    <div class="col-md-6 mt-3 form-mb-20">
                       <label for="web-access-date" class="form-mb-10">Access date (Enter the Access Date)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= "web-access-date" id="web-access-date" placeholder="12 September 2023">
                    </div>
                    <div class="col-md-6 mt-3 form-mb-20">
                       <label for="" class="form-mb-10">URL/web address (Enter the full URL of the website)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= "web-url" id="web-url" placeholder="https://abcd.com/">
                    </div>
                    <div class="col-md-12 text-center my-5">
                      <button type="button" onclick="websiteRefrence(this, 1)" class="btn btn-primary btn-generate-cit text-uppercase p-2 rounded btn-font fw-normal">Generate Website Reference</button>
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
                  
                  <div class="col-md-3 form-mb-20">
                    <label for="book-last" class="form-mb-10">Last Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name="book-last" id="book-last" placeholder="Sherman">
                  </div>
                  <div class="col-md-3 form-mb-20">
                    <label for="book-first" class="form-mb-10"> First Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name = 'book-first' id="book-first" placeholder="Jane">
                  </div>
                  <div class="col-md-3 form-mb-20">
                    <label for="book-middel" class="form-mb-10"> Middel Name:</label>
                    <input type="text" class="form-control border border-primary my-form-control" name = 'book-middel' id="book-middel" placeholder="K">
                  </div>
                  <div class="col-md-12 mt-5">
                    <h5 class="text-info fw-normal">General info</h5>
                  </div>
                  <div class="col-md-12 form-mb-20">
                       <label for="book-title" class="form-mb-10">Book Title (Enter the title of the book)*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name= 'book-title' id="book-title" placeholder="The disputed GAZA Strip">
                
                  </div>
                  <div class="col-md-6 mt-3 form-mb-20">
                     <label for="" class="form-mb-10">Year of Publication (Enter the article publication):*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name "book-year" id="book-year" placeholder="2009">
                  </div>
                  <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Publisher:*</label>
                    <input type="text" class="form-control border border-primary my-form-control" id="book-publisher" placeholder="Wiley">
                  </div>

                  <div class="col-md-6 mt-3 form-mb-20">
                    <label for="book-place" class="form-mb-10">Place of Publication:</label>
                    <input type="text" class="form-control border border-primary my-form-control" id="book-place" id="book-place" placeholder="London">
                  </div>
                  <div class="col-md-6 mt-3 form-mb-20">
                    <label for="" class="form-mb-10">Pages (Enter the Pages Range):*</label>
                    <input type="text" class="form-control border border-primary my-form-control" id="book-pages" placeholder="29">
                  </div>
                  <div class="col-md-6 mt-3 form-mb-20">
                     <label for="" class="form-mb-10">format (Enter the document format):*</label>
                    <input type="text" class="form-control border border-primary my-form-control" name "book-format" id="book-format" placeholder="Web/Print">
                  </div>
                  <div class="col-md-12 text-center my-5">
                    <button type="button" onclick="bookRefrence(this, 1)" class="btn btn-primary btn-generate-cit text-uppercase p-2 rounded btn-font fw-normal">Generate Book Reference</button>
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
                    
                    <div class="col-md-3 form-mb-20">
                      <label for="" class="form-mb-10">Last Name:</label>
                      <input type="text" class="form-control border border-primary my-form-control" name="journal-last" id="journal-last" placeholder="Sherman">
                    </div>
                    <div class="col-md-3 form-mb-20">
                      <label for="" class="form-mb-10"> First Name:</label>
                      <input type="text" class="form-control border border-primary my-form-control" name = 'journal-first' id="journal-first" placeholder="Jane">
                    </div>
                    <div class="col-md-3 form-mb-20">
                      <label for="" class="form-mb-10"> Middle Name:</label>
                      <input type="text" class="form-control border border-primary my-form-control" name = 'journal-middle' id="journal-middle" placeholder="K">
                    </div>
                    <div class="col-md-12 mt-5">
                      <h5 class="text-info fw-normal">General info</h5>
                    </div>
                    <div class="col-md-12 form-mb-20">
                         <label for="" class="form-mb-10">Article Title (Enter the article title of the journal)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= 'journal-artical' id="journal-artical" placeholder="Name Of Journal">
                  
                    </div>
                    <div class="col-md-12 form-mb-20">
                         <label for="" class="form-mb-10">Journal Title (Enter the title of the journal)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= 'journal-title' id="journal-title" placeholder="Name Of Journal">
                  
                    </div>
                    <div class="col-md-6 mt-3 form-mb-20">
                       <label for="" class="form-mb-10">Year of Publication (Enter the article publication):*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= "journal-year" id="journal-year" placeholder="2009">
                    </div>
                     <div class="col-md-6 mt-3 form-mb-20">
                       <label for="" class="form-mb-10">Volume (Enter the volume no.)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name= "journal-volume" id="journal-volume" placeholder="8">
                    </div>
                    <div class="col-md-6 mt-3 form-mb-20">
                      <label for="" class="form-mb-10">Issue Number (Enter the issue no.):*</label>
                      <input type="text" class="form-control border border-primary my-form-control" id="journal-issue-number" placeholder="32">
                    </div>
            
                    <div class="col-md-6 mt-3 form-mb-20">
                      <label for="" class="form-mb-10">Pages (Enter the page numbers)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" id="journal-pages" placeholder="15-30">
                    </div>
                    <div class="col-md-6 mt-3 form-mb-20">
                      <label for="journal-format" class="form-mb-10">format (Enter the document format)*</label>
                      <input type="text" class="form-control border border-primary my-form-control" name="journal-format" id="journal-format" placeholder="15-30">
                    </div>
            
                    
            
                    <div class="col-md-12 text-center my-5">
                      <button type="button" onclick="journalRefrence(this, id)" class="btn btn-primary btn-generate-cit text-uppercase p-2 rounded btn-font fw-normal">Generate Journal Reference</button>
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
          <img src="<?php bloginfo('template_directory'); ?>/images/loader.gif" alt="" class="w-25">
        </div>
        <div class="col-md-12 bg-paper-color" style="display: none;" id="detail-list">
        </div>
      </div>
    </div>
  </div>


<div class="container padding-b-3">

    <div class="row">

        <div class="col-md-12">

            <h2 class="margin-b-2 mt-0">How Does Our Citation Free Tools Work?
            </h2>
        </div>

    </div>

    <div class="row p-6">

        <div class="mb-2">

            <p class="text-center">Raise the bar for your academic work with our <a href="https://paperperk.com/">Paper Writing Service</a>, make missed citations a thing of the past, and experience the seamless integration of sources with a free MLA citing tool!</p>

        </div>

    </div>

    <div class="row padding-t-2">

        <div class="col-md-4 col-xs-4">

            <div class="big-num"> 01</div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="big-num">02</div>

        </div>

        <div class="col-md-4 col-xs-4">

            <div class="big-num">03</div>

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
                        <h4 class="step-heading">Select</h4>
                    </div>

                    <p>Firstly, you have to choose your desired citation style from many options!</p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3  col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/scan-icon.png" alt="step-image-size2" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading">Input</h4>
                    </div>

                    <p>Enter your source information. We handle all – articles, books, websites etc!</p>
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 col-xs-3  step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/report-icon.png" alt="step-image-size3" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading">Generate</h4>
                    </div>
                    <p>Hit that button and watch effortless, accurate, and perfectly formatted citations.</p>

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

                <h2 class="margin-b-1">Bless Your Work With Latest and Free AI Tools</h2>

                <p class="text-center">Our treasure trove of free AI tools is waiting for you. Here you&rsquo;ll get the <a href="https://paperperk.com/free-tool">free tool</a> options for simple tasks to complex challenges. So let these cutting-edge, user-friendly solutions help take your work to new heights. Still reading? It&rsquo;s time to explore now!</p>

            </div>

        </div>

        <?php get_template_part('includes/section', 'othertools') ?>

    </div>
</div>


<!-- FAQs -->

<div class="container padding-tb-3">

    <div class="row headline">

        <div class="col-md-12">

            <h2>FAQs - Answers Regarding Free Citation Builder MLA</h2>

        </div>

    </div>

    <div class="row">

        <div class="glossymenu">

            <div class="col-md-10 col-md-offset-1">

                <a class="menuitem submenuheader" href="#">How to do MLA style referencing?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>MLA referencing involves citing sources in author-page format. Include the author's last name and the page number in parentheses within the text. Then, create a Works Cited page with full bibliographic information.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">What is the best citation generator for MLA?</a>

                <div class="submenu">

                    <div class="p-faq">

                        <p>There are many excellent generators, but our recommendations include MyBib, Citation Machine, and Scribbr. These tools create accurate MLA citations effortlessly and swiftly.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">What are MLA referencing style examples?</a>

                <div class="submenu">

                    <div class="p-faq">

                       <p>An in-text citation: (Smith 15)<br />The Works Cited entry: Smith, John. <em>The Art of Writing</em>. Pearson, 2019.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">What is an MLA generator?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>An MLA generator is a tool that automatically generates MLA citations for various sources, ensuring adherence to the guidelines and easing the citation process.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">What are MLA basics?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>MLA basics involve using 1-inch margins, double-spacing, 12-pt Times New Roman font, and header with page numbers. In-text citations include author-page style, and a Works Cited page lists all sources.</p>

                    </div>

                </div>
                
                <a class="menuitem submenuheader" href="#">What font is MLA format?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>MLA format recommends the use of 12-pt Times New Roman font throughout your paper to maintain readability and consistency.</p>

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

                <h2 class="section-head center">Doing Your Citations Is Our Tool’s Duty</h2>

                <div>
                    <p class="text-center">Our duty isn't just to generate citations. It's about more than that. It's about painting the perfect picture of your research journey, highlighting the milestones, capturing the essence, and leaving an indelible impression.</p>
                        <h3 class="text-center">MLA Title Generator</h3>
                        <p class="text-center">Need the perfect title that encompasses the spirit and precision of your research? Our title generator in MLA style is like the master choreographer, bringing rhythm and harmony to your thoughts. It steps beyond just generating a title, it crafts a stellar banner under which all your research ideas rally.</p>
                        <h3 class="text-center">MLA Format Calculator</h3>
                        <p class="text-center">Ah! The MLA formatting tool! That is making your calculations fly sky high. Formatting is not a challenge anymore. Our tool is like a veteran performer under the spotlight, spreading peace in tense situations , effortlessly pulling off every act of research, and leaving the student utterly awestruck.</p>
                        <h3 class="text-center">Citing a Website MLA Generator</h3>
                        <p class="text-center">Citing websites by yourself can be confusing and time-consuming, but here it&rsquo;s a matter of seconds, transforming your source's URL and other relevant information into a citation, totally adjusted to the MLA format. You no longer need to stress over getting the punctuation right or agonize about the ordering of the information. So whether it's a blog post, an article, or an online book you are citing, enter the URL, and watch as our generator quickly creates an MLA citation fit for your paper.</p>
                        <h3 class="text-center">MLA Quote Citation Generator</h3>
                        <p class="text-center">And here comes the super-skilled, our MLA quotation referencing function! Your quotes deserve more than bland citations. It plays with words like an award-winning screenwriter, carving out memorable citations that enhances the power of your quoted text.</p>
                        <h3 class="text-center">MLA Citation Machine Free for All Sources</h3>
                        <p class="text-center">But wait, there&rsquo;s more! Meet the all-rounder functionality&mdash;that's versatile and free for all sources. Like a renowned research article author, it brings out the best in every source, infusing life into your paper. We are committed to delivering a research article that's well referenced, well narrated, and well received.</p>               
                </div>

            </div>

        </div>

        <!--Vertical Tabs-->

        <div class="row margin-t-2">
            <div role="tabpanel">
                <div class="col-sm-4">
                    <div class="ex1">

                        <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                            <li role="presentation" class="brand-nav active"><a href="#tab1" data-toggle="tab">How Does Citation Creator MLA Works?</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab2" data-toggle="tab">Why MLA Calculator Important for Citations?</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab3" data-toggle="tab">Is it In-Text Or MLA Works Cited Page Generator?</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab4" data-toggle="tab">Should You Consider It MLA 8 or MLA 9 Citation Free Tool?</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab5" data-toggle="tab">Is this MLA Citation Machine Free For Anyone?</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="ex2">

                        <div class="tab-content no-padding no-margin">

                            <div class="tab-pane fade in active" id="tab1">

                                <h3><div class="blue-header">How Does Citation Creator MLA Works?</div></h3>


                               <style>
  table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
</style>

                        <p>Our Citation Creator for MLA referencing is a helpful tool for your writing. It's like a helpful friend who makes references for you swiftly and rightly. Let's see how it works in simple steps.</p>
                        <h3>Step One: Reach us</h3>
                        <p>Go above to use our tool. No need for any sign-up or password.</p>
                        <h3>Step Two: Share your source details</h3>
                        <p>Inform us about your source&mdash;it could be a book, an article, a website, or anything else you're using for your paper. You just need to fill in some information about it.</p>
                        <h3>Step Three: Get your citation</h3>
                        <p>After giving all the details, click on the button named "Generate." Here's your magic moment&mdash;you have the citation in a blink!</p>
                            <table>
  <tbody>
    <tr>
      <td><strong>What you get from us</strong></td>
      <td><strong>What it means for you</strong></td>
    </tr>
    <tr>
      <td><strong>Quick service</strong></td>
      <td>Save time with a simple click.</td>
    </tr>
    <tr>
      <td><strong>Top quality</strong></td>
      <td>We make sure your citation is accurate.</td>
    </tr>
    <tr>
      <td><strong>Free access</strong></td>
      <td>Our tool is handy and it costs you nothing!</td>
    </tr>
  </tbody>
</table>
                            <br>
                            <p>Isn't it simple? Come, let's start together on this journey of easy referencing!</p>

                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <h3><div class="blue-header">Why MLA Calculator Important for Citations?</div></h3>

                                <p>Referencing is key to good writing. But how do you do it in the best way? Enter the MLA Citation Calculator. It makes sure every reference you create meets the rules of MLA style. So, all your references look polished and professional. Remember, right referencing keeps your work safe from errors and even theft accusations.</p>
                                    <h3>Super Simple to Use</h3>
                                    <p>You don't have to be a whiz to use this easy tool. Put in the details of the source, then press "generate." Bingo! Your citation is ready. The process is so simple, isn't it?</p>
                                    <h3>Support for All Sources</h3>
                                    <p>No matter your source &ndash; whether it's a book, a website, or something else &ndash; the MLA Calculator is ready for it. Different sources are no problem for our handy tool.</p>
                                    <h3>Time Saver</h3>
                                    <p>Got many references to create? Fear not. With the speed of our MLA Calculator, you'll have more time for studying or other work.</p>
                                    <p>So you see, the MLA Citation Calculator is more than just a tool&mdash;it's your companion in the world of top-notch writing. Let's get started!</p>
                            </div>
                            <div class="tab-pane" id="tab3">
                               <h3> <div class="blue-header">Is it In-Text Or MLA Works Cited Page Generator?</div></h3>

                               <style>
  table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
</style>

                        <p>Great news! Our tool serves as both an in-text citation creator and an MLA works cited book, page, article, etc. Let's softly take a step by step journey to understand better how these two work hand in hand.</p>
                        <h3>In-Text Citations</h3>
                        <p>In-text citations are like little signposts in your paper. They point your reader to where you found each piece of information. Quick and easy, right? But this is where our tool steps in to simplify things further. Just input the details about your source, then click "Generate". You'll get an in-text citation ready to be part of your paper.</p>
                        <h3>Works Cited Page</h3>
                        <p>Consider the works cited generator as a detailed map at the end of your journey, listing all the sources you visited along the way. It's a bit more complex, but do not worry. With our generator, creating a works cited article, website, book, or page is a breeze. Just like with in-text citations, the process is simple and straightforward.</p>
                        <p>Now, to make things even clearer, let's display the difference in the table below:</p>
                        <table>
  <tbody>
    <tr>
      <td><strong>MLA Style</strong></td>
      <td><strong>What Is It?</strong></td>
      <td><strong>How Our Tool Helps</strong></td>
    </tr>
    <tr>
      <td><strong>In-Text Citation</strong></td>
      <td>Small pointers inside your paper showing where the information comes from.</td>
      <td>Creates accurate in-text citations in seconds.</td>
    </tr>
    <tr>
      <td><strong>Works Cited Page</strong></td>
      <td>Detailed list of all the sources you used, located at the end of your work.</td>
      <td>Makes a complete Works Cited page in a few clicks.</td>
    </tr>
  </tbody>
</table>
                        <br>
                        <p>So, ready to create in-text references and comprehensive works cited stuff with smiles instead of sweat? Our user-friendly AI references generator tool is here for you, eager to convert referencing into an enjoyable process. Just simple, clear, and effective.</p>

                            </div>
                            <div class="tab-pane" id="tab4">
                                <h3><div class="blue-header">Should You Consider It MLA 8 or MLA 9 Citation Free Tool?
                                </div></h3>

                                <style>
  table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
</style>

                            <p><strong>Oh, The Choices!</strong></p>
                            <p>Caught between MLA 8 and MLA 9? Don't worry, we have your back! Our handy tool says, why pick one when you can have both? Our free citation tool is like a super-smart friend who knows both MLA 8 and MLA 9. It's here to help, no matter which one you choose.</p>
                            <h3>Never Out of Date&nbsp;</h3>
                            <p>They say knowledge is power, and our tool is super powerful. It knows all about MLA 8 and adores MLA 9. So, no matter which edition you need today&mdash;or tomorrow&mdash;our tool will be by your side. It keeps up to date so you don't have to. That means no more long nights learning new rules!</p>
                            <h3>Fluent in MLA Speak</h3>
                            <p>MLA 8 or MLA 9? Our tool speaks both! It creates citations that fit right into your paper, smoothly and accurately. Whether it's creating an in-text citation or a whole Works Cited page, it's just a click away.</p>
                            <table>
  <tbody>
    <tr>
      <td><strong>MLA Edition</strong></td>
      <td><strong>What does it mean?</strong></td>
      <td><strong>How our tool helps</strong></td>
    </tr>
    <tr>
      <td><strong>MLA 8</strong></td>
      <td>Older rules for research writing</td>
      <td>Creates perfect citations that fit these rules</td>
    </tr>
    <tr>
      <td><strong>MLA 9</strong></td>
      <td>Newest rules for research writing</td>
      <td>Stays updated, creates spot-on citations</td>
    </tr>
  </tbody>
</table>
                            
                            <h3>To Be One Step Ahead</h3>
                            <p>Welcome the change by stepping into the future with confidence, knowing your citations will always be ahead of the game. Today, it's MLA 8, tomorrow, it could be MLA 9 or even MLA 10. As the rules evolve, so does our tool. Always there, always ready, always accurate.</p>
                            <p>With our citation builder MLA, making the perfect citation has become as easy as pie. It doesn't just help you, it takes you by the hand and leads you through the exciting journey of referencing. So, why wait? Start now and enjoy the ride!</p>

                            </div>
                            
                            <div class="tab-pane" id="tab5">
                                <h3><div class="blue-header">Is this MLA Citation Machine Free For Anyone?</div></h3>

                                <style>
  table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: left;
  }
</style>

                                <p><strong>Open to All!</strong></p>
                                <p>No hurdles, no restrictions. All you need is an internet connection and you can tap into the citation genius of our MLA citation tool. It’s like a friendly guide helping you sail through the citation sea.</p>
                            <table>
  <tbody>
    <tr>
      <td><strong>MLA Citation Machine</strong></td>
      <td><strong>Benefit</strong></td>
    </tr>
    <tr>
      <td>Free of Charge</td>
      <td>It doesn't cost a penny to use</td>
    </tr>
    <tr>
      <td>Open Access</td>
      <td>It's available to everyone with internet</td>
    </tr>
  </tbody>
</table>
                            <h3>Honor the Work of Others</h3>
                            <p>Our tool helps you respect other's work by making citations easy, so their contribution is never overlooked.</p>
                            <h3>Absolutely, It’s Free!</h3>
                            <p>Citations made fun and welcoming! Our MLA format creator opens its arms for everyone: students, researchers, and educators. And the cherry on top? It’s forever free!</p>
                            <h3>All Sources Welcome</h3>
                            <p>Feel this: referencing websites, books, journals, newspapers, and more with just a few clicks. Yes, you read that right! Our citation generator is an all-rounder, adapting to all sources like a chameleon.</p>
                            <h3>You have the power to&hellip;</h3>
                            <p>✅ Create perfect Website citations<br />✅ Craft accurate Book references<br />✅ Master Journal citations swiftly<br />✅ And ace Newspaper citations with ease</p>
                            <h3>Hassle-free and User-friendly</h3>
                            <p>Leave behind the struggles of manual citations, and adopt the expertise of our tool. It goes beyond just clicking a button, becoming a trusted companion in your citation journey.</p>
                            <h3>You Deserve the Best</h3>
                            <p>So why settle for a mere citation tool when you can have the master of all sources? We’re here to make your work shine, breathe life into your research, and add value to every moment.</p>
                            <p>So, are you ready to shine? Let's grab the future with our hands and make citations a walk in the park! Our free and user-friendly MLA citation calculator is here for you, embracing all the sources, and turning your work into a masterpiece. Take the plunge and experience the difference!</p>
                            <h3>So, Is It For You?</h3>
                            <p>The clear answer is yes! This machine is indeed free for anyone to use. So go ahead, let yourself be amazed by the simplicity and ease our MLA references generator brings to your writing process.</p>

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
            <h2 class="white">Enter Source, Copy MLA Citation, and Paste in Your Research Work!</h2>

            <p class="white">Ready to make those citation struggles vanish? You're just three steps away! In a blink of an eye, you're ready to strut down the citation avenue with confidence. Say goodbye to manual citation hassles and let our citation free MLA tool handle the behind-the-scenes while you shine in the spotlight! </p>
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
      
    let web_last = $('#web-last').val();
    let web_first = $('#web-first').val();
    let web_title = $('#web-title').val();
    let web_name = $('#web-name').val();
    let public_year = $('#web-year').val();
    let web_format = $('#web-format').val();
    let web_access_date = $('#web-access-date').val();
    let web_url = $('#web-url').val();
     let refrence = '';
    refrence += '<h3>Example References For Website</h3>'
    refrence += '<h6>Example References For Website</h6>'
    refrence += `<p>${web_last}, ${web_first} "${web_title}." ${web_name}. ${web_format} ${web_access_date}. ${public_year}. ${web_url}.</p>`
    refrence += `<h6>Example In-Text Citation for a Website.</h6>`
    refrence += `<p>(${web_last}).</p>`

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
    let book_middel = $('#book-middel').val();
    let book_title = $('#book-title').val();
    let public_year = $('#book-year').val();
    let book_publisher = $('#book-publisher').val();
    let book_place = $('#book-place').val();
    let book_pages = $('#book-pages').val();
    let book_format = $('#book-format').val();
    let refrence = '';
    refrence += '<h3>Example References For Book</h3>'
    refrence += '<h6>Example References For Book</h6>'
    refrence += `<p>${book_last}, ${book_first} ${book_middel.charAt(0)} "${book_title}". ${book_place}: ${book_publisher}, ${public_year}. ${book_pages}. ${book_format} </p>`
    refrence += `<h6>Example In-Text Citation for a Book.</h6>`
    refrence += `<p>(${book_last}).</p>`


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
    let journal_middle = $('#journal-middle').val();
    let journal_artical = $('#journal-artical').val();
    let journal_title = $('#journal-title').val();
    let journal_volume = $('#journal-volume').val();
    let public_year = $('#journal-year').val();
    let issue_number = $('#journal-issue-number').val();
    let journal_url = $('#journal-url').val();
    let journal_pages = $('#journal-pages').val();
    let journal_format = $('#journal-format').val();
    let  refrence='';
    refrence += '<h3>Example References For Journal</h3>'
    refrence += '<h6>Example References For Journal</h6>'
    refrence += `<p>${journal_last}, ${journal_first} ${journal_middle.charAt(0)} "${journal_artical}". ${journal_title}. ${journal_volume}. ${issue_number}. ${public_year}: ${journal_pages}. </p>`
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
    refrence += `<h6>Example In-Text Citation for a Newspaper.</h6>`
    refrence += `<p>(${newspaper_last} ${public_year})</p>`

    console.log($('#detail-list'))
    $('#detail-list').html(refrence);
    $('#detail-list').show(3000);
  }
</script>

<?php get_footer('tools'); ?>




