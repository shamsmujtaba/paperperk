<?php
/* Template Name: Spell Checker */
get_header('tools');
?>




<div class="container-fluid padding-tb-3">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h1 class="center margin-b-1 ">The Secret to Professional Writing: Our Free Spell Checker</h1>
                <p class="text-center margin-b-2 ">Want to make a great first impression with your writing? Use our free spelling tool to eliminate any errors and impress your readers!
                </p>
                
                <h2 class="center margin-b-1 ">Write Like a Pro: Perfect Your Spelling with Paper Perk</h2>
                <p class="text-center margin-b-2 ">With just a few clicks, you can eliminate any spelling errors and take your writing from amateur to professional. 
                </p>
                <p class="text-center margin-b-2 ">Impress your readers with flawless writing and stand out from the competition. Our spelling checker is fast, easy, and free, so why wait? Start writing like a Pro!
                </p>

            </div>

        </div>

        <!-- Spelling Checker -->
        <div class="container-fluid padding-lr-2 div-no-padding">
            <div class="form-outer-container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="mt-3 form-mb-20">
                            <h3>Enter the text you want to get checked</h3>
                        </div>

                        <form>
                            <div class="form-group form-mt-10">
                                <textarea class="form-control" rows="10" id="spell-check-content-area"></textarea>
                            </div>

                            <div class="btn-outer-div padding-t-1">

                                <div class="col-md-5">

                                    <!--<label class="btn btn-default">-->
                                    <!--    Upload File <input type="file" id="fileupload" hidden onchange="fileUpload()">-->
                                    <!--</label>-->

                                </div>

                                <div class="col-md-7">
                                    <input class=" plag-check-btn " type="button" value="Check" onclick="spellCheck()">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid" id="show-div">
    <div class="container p-5">
        <div class="row bg-white p-5 rounded shadow">
            <div class="col-md-12 text-center" style="display: none">
               
            </div>

            <div class="col-md-12 mt-3" style="display: none;" id="bibli-div">
                <p id="bibliography">
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container padding-b-3">

    <div class="row">

        <div class="col-md-12">

            <h2 class="margin-b-2">How Does Our Spelling Tool Works?</h2>
        </div>

    </div>

    <div class="row p-6">

        <div class="mb-2">

            <p class="text-center">Spell Checker is YOUR personal proofreader, available 24/7, who always takes your side. Consider it as a fiercely loyal friend who'll catch all of your mistakes so you can look like a pro. Your writing life just became easier and more professional as it makes your writing mistakes disappear!</p>

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
                        <h4 class="step-heading">Upload</h4>
                    </div>

                    <p>Ready to improve your writing? Upload your document now and let us do the rest!</p>

                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/scan-icon.png" alt="step-image-size2" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading">Scan</h4>
                    </div>

                    <p>Scan your document for spelling errors and take your writing to the next level!</p>
                </div>

            </div>

        </div>

        <div class="col-md-4">

            <div class="row">

                <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/report-icon.png" alt="step-image-size3" /></div>

                <div class="col-md-9 col-xs-9">

                    <div>
                        <h4 class="step-heading">Download </h4>
                    </div>
                    <p>Download your polished document of flawless and impressive writing!</p>

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

                <h2 class="margin-b-1">Take Your Work to the Next Level - Explore Our Other Tools Today</h2>

                <p class="text-center">Our suite of tools and resources can help you do just that. Don't wait any longer – achieve your goals and reach new heights with our range of top-tier tools and resources. Take the first step towards success now!</p>

            </div>

        </div>

         <?php get_template_part('includes/section', 'othertools') ?>

    </div>
</div>


<!-- FAQs -->

<div class="container padding-tb-3">

    <div class="row headline">

        <div class="col-md-12">

            <h2>FAQs - Don't Let Spelling Errors Distract from Your Brilliance</h2>

        </div>

    </div>

    <div class="row">

        <div class="glossymenu">

            <div class="col-md-10 col-md-offset-1">

                <a class="menuitem submenuheader" href="#">How does the spell checking service work?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Our spell checking service uses advanced algorithms to scan your document for spelling errors. Simply upload your document, and our service will do the rest.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">Is the spell checking service free to use?</a>

                <div class="submenu">

                    <div class="p-faq">

                        <p>Yes, our spell checking service is completely free to use.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">How long does it take to scan a document for spelling errors?</a>

                <div class="submenu">

                    <div class="p-faq">

                        <p>The time it takes to scan a document depends on the length of the document. However, our service is designed to be fast and efficient, so it should only take a few seconds to scan most documents.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">Can the spell checking service be used for all types of documents?
</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Yes, our spell checking service can be used for all types of documents, including essays, articles, reports, and more.</p>

                    </div>

                </div>

                <a class="menuitem submenuheader" href="#">What languages does the spell checking service support?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Currently, our spell checking service only supports English. However, we are constantly working to expand our language support.</p>

                    </div>

                </div>
                
                <a class="menuitem submenuheader" href="#">Will my document be saved or shared with anyone else?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>No, we do not save or share any documents that are uploaded to our spell checking service. Your privacy is our top priority.
</p>

                    </div>

                </div>
                
                <a class="menuitem submenuheader" href="#">Can I download the corrected document?</a>

                <div class="submenu">

                    <div class="p-faq">
                        <p>Yes, once the spell checking process is complete, you can download the corrected document in the same format as the original document.
</p>

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

                <h2 class="section-head center">Catch Every Mistake: Use Our Free Online Spell Checker</h2>

                <div>
                    <p class="text-center">At <a href="<?= get_bloginfo('wpurl') ?>"> Paper Perk</a>, we understand the importance of correct spelling and grammar in making your ideas shine. 

                    </p>
                </div>

                <div class="text-center">
                    <p >Our online spell checker is a completely free tool that helps you find errors in your text box, Google Docs, Microsoft Word or more. 
                    </p>
                    
                     <p >Feel free to ensure that every word is spelled correctly, every sentence is in the right context, and every word choice is perfect. 
                    </p>
                    <h3>Accurate and Efficient</h3>
                    <p>Our tool uses advanced algorithms to accurately and efficiently scan your document for spelling errors.</p>
                    <h3>Easy-to-Use</h3>
                    <p>Our tool is designed to be user-friendly, with a simple and intuitive interface that makes it easy to upload, scan, and download your documents.</p>
                    <h3>Comprehensive</h3>
                    <p>Our tool not only scans for spelling errors, but also checks for grammar and punctuation mistakes, ensuring that your document is error-free.</p>
                    <h3>Free and Secure</h3>
                    <p>Our tool is completely free to use, and we take your privacy and security seriously. We do not save or share any documents that are uploaded to our tool.</p>
                </div>

            </div>

        </div>

        <!--Vertical Tabs-->

        <div class="row margin-t-2">
            <div role="tabpanel">
                <div class="col-sm-4">
                    <div class="ex1">

                        <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                            <li role="presentation" class="brand-nav active"><a href="#tab1" data-toggle="tab">Write With Confidence and Avoid Repetition Using Our Intuitive Tool</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab2" data-toggle="tab">Double Check Your Writing with Our Free Online Spell Checker
</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab3" data-toggle="tab">Get Your Point Across Clearly: Use Our Free Spell Checker</a></li>
                            <li role="presentation" class="brand-nav"><a href="#tab4" data-toggle="tab">Never Let Spelling Mistakes Hold You Back Again</a></li>
                            
                             <li role="presentation" class="brand-nav"><a href="#tab5" data-toggle="tab">Impress Your Professor, Boss and Clients with Flawless Writing</a></li>
                             
                             
                        </ul>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="ex2">

                        <div class="tab-content no-padding no-margin">

                            <div class="tab-pane fade in active" id="tab1">
                                <div class="blue-header">Write With Confidence and Avoid Repetition Using Our Intuitive Tool</div>

                                <p>Are you sick and tired of your spelling errors? We are. That's why we ended our headaches by creating the Paper Perk&rsquo;s free set of tools. When you're done typing up a sentence, just click on the magic icon and avoid those pesky grammar and punctuation problems!</p>
<p>Be confident in your writing. Our spell checker will catch your errors and help you see where you need to improve.</p>
<p>You'll never miss a mistake again. If you're like most people, your eyes just glaze over when you see the word "spelling". But not anymore! This tool automatically fixes every single mistake in whatever you write.&nbsp;</p>
<p>It's like having a team of professional editors working round-the-clock for zero dollars a month, completely for free. No strings attached. TOTALLY FREE!</p>
<p>And because we're not just a simple editor&mdash;we're also a collaboration tool that will help ensure that everyone involved in the process knows exactly what needs to be changed. So whether you're an English major or a high school student trying to revise for an essay contest, we can help!</p>
                            </div>
                            <div class="tab-pane fade" id="tab2">
                                <div class="blue-header">Double Check Your Writing with Our Free Online Spell Checker</div>

                                <p>Do you ever wish you could find a way to make your writing stand out?</p>
<p>You've come to the right place. Paper Perk is here to help you polish up your writing and make it super notch! We offer a free spelling corrector tool that will help you catch all of those pesky errors that can be so distracting from what really matters&mdash;your ideas!</p>
<p>Our simple online tool lets you check for spelling mistakes, punctuation errors, and subject-verb agreement issues in seconds. Just pop open your favorite document and browser to click on the box.&nbsp;</p>
<p>It's completely free and easy to use, allowing you to double check all of your work no matter where you are or what device you use.&nbsp;</p>
<p>But wait&mdash;there's more! We also offer <a href= "<?= get_bloginfo('wpurl') ?>/free-tool"> other tools</a> too that will help you avoid repetition, choose the right word for the job, ensure your sentences are in the right order, and solve your academic queries.&nbsp;</p>
<p>All of this is done with a few simple clicks so that you can spend less time correcting mistakes and more time focusing on what really matters: your ideas.</p>
                            </div>
                            <div class="tab-pane" id="tab3">
                                <div class="blue-header">Get Your Point Across Clearly: Use Our Free Spell Checker</div>

                                <p>Are you tired of all the mistakes in your writing?</p>
<p>We've got a solution for you! Paper Perk is proud to offer a FREE checker tool that will help you find and correct any mistakes in your writing.</p>
<p>You can use this checker on any document written in Microsoft Word, Google Docs, or even a text box on the internet. Simply type in your text box and click. The tool will then highlight words it thinks are spelled incorrectly, and offer suggestions for how to fix them. It's that easy!</p>
<p>When you're done, don't forget to hit "download" so you don't use those same mistakes again!</p>
<p>This tool won't just help you save time; it's also great for improving your writing skills by letting you learn from your mistakes and develop better grammar habits.</p>
                            </div>
                            <div class="tab-pane" id="tab4">
                                <div class="blue-header">Never Let Spelling Mistakes Hold You Back Again
                                </div>

                                <p>You're a smart cookie, but sometimes you just can't seem to get it right.</p>
<p>What's the problem? You're not alone. We all make mistakes&mdash;even smart people like yourself. But what if there was an easy way for you to find and correct those mistakes? There is!</p>
<p>Introducing our free spelling checker tool will help you spot your errors and make sure your writing is as clear and precise as possible. Just type in your text box, click to start scanning,' and voila! You'll have a highlighted set of any mistakes that were made, along with suggestions for how to fix them. It's really that easy!</p>
<p>The best part? It works on any browser, so it's easy to use anywhere and anytime. Plus, it'll save you a ton of time when it comes to writing entire documents or just making sure that your sentences are grammatically correct.</p>
                            </div>
                            
                             <div class="tab-pane" id="tab5">
                                <div class="blue-header">Impress Your Professor, Boss and Clients with Flawless Writing
                                </div>

                                <p>Spell checkers are a must-have for anyone who wants their ideas to shine through without getting bogged down by grammar mistakes or punctuation errors. Paper Perk is perfect for students, writers&mdash;and basically anyone who wants to make sure their work looks as good as possible before sending it off into the world.</p>
<p>You can use our tool to make sure that every word you write is correct and spelled correctly. Or if you just want to double check some of the words you used in your previous writing assignment, this tool can help with that too!</p>
<p>And yes, it's true that spelling checkers do not affect the quality of your writing. But they can make your writing more professional and error-free! In fact, studies show that using one can help students improve their writing skills by as much as 40%!</p>
<p>So go ahead and try us out today&mdash;you'll be glad you did!</p>
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
            <h2 class="white">Never Let Spelling Mistakes Ruin Your Writing Again</h2>

            <p class="white ">So, you wanna be a writer? Or score best grades in assignments? Yeah, we know. But before you start your assignments, screenplay or that novel you've been meaning to get around to for years, did you know your spelling and grammar might be holding you back? We're here to change that. Over 1 billion people make these mistakes. Our free spell and grammar checker will save you and your grades or clients lots of time. </p>
            <div class="white-btn"><a href="https://order.paperperk.com/">Order Now</a></div>

        </div>

    </div>

</div>

<!-- FAQs -->
<script>
    function spellCheck() {

        let text = $('#spell-check-content-area').val();
        $.ajax({
            method: "POST",
            url: "<?php bloginfo('template_directory'); ?>/functions.php",
            data: {
                text: text
            },
            dataType: "text",
            beforeSend: function() {
                $('#loader').show();
                $('#bibli-div').hide();
            },
            complete: function() {
                $('#loader').hide();
                $('#bibli-div').show();
                $('html,body').animate({
                        scrollTop: $("#show-div").offset().top
                    },
                    'slow');
            },
            success: function(response) {
                $('#bibliography').html(response);
            },
        });
    }

    function fileUpload() {
        let formData = new FormData();
        let fileupload = $('#fileupload');
        formData.append("file", fileupload.prop('files')[0]);
        $.ajax({
            method: 'POST',
            url: '<?php bloginfo('template_directory'); ?>/functions.php',
            data: formData,

            dataType: 'text',
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('#loader').show();
            },
            complete: function() {
                $('#loader').hide();
            },
            success: function(data) {
                 $('#spell-check-content-area').val(data);

            }

        });
    }
</script>

<script>{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [{
"@type": "Question",
"name": "How does the spell checking service work?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Our spell checking service uses advanced algorithms to scan your document for spelling errors. Simply upload your document, and our service will do the rest."
}
},{
"@type": "Question",
"name": "Is the spell checking service free to use?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, our spell checking service is completely free to use."
}
},{
"@type": "Question",
"name": "How long does it take to scan a document for spelling errors?",
"acceptedAnswer": {
"@type": "Answer",
"text": "The time it takes to scan a document depends on the length of the document. However, our service is designed to be fast and efficient, so it should only take a few seconds to scan most documents."
}
},{
"@type": "Question",
"name": "Can the spell checking service be used for all types of documents?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, our spell checking service can be used for all types of documents, including essays, articles, reports, and more."
}
},{
"@type": "Question",
"name": "What languages does the spell checking service support?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Currently, our spell checking service only supports English. However, we are constantly working to expand our language support."
}
},{
"@type": "Question",
"name": "Will my document be saved or shared with anyone else?",
"acceptedAnswer": {
"@type": "Answer",
"text": "No, we do not save or share any documents that are uploaded to our spell checking service. Your privacy is our top priority."
}
},{
"@type": "Question",
"name": "Can I download the corrected document?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, once the spell checking process is complete, you can download the corrected document in the same format as the original document."
}
}]
}</script>
<?php get_footer('tools'); ?>