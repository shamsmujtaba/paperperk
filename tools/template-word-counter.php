<?php
/* Template Name: Word Counter  */
get_header('tools');
?>
</div>
<style>
    .fa-repeat:before {
    content: "\f01e";
}
.word-counter-icon{
color:#03c1ff;
font-size: 20px;
margin-left:20px;
margin-bottom: 10px;
cursor: pointer;
}
.tipCopy {
    position: absolute;
    background-color: #03a84e;
    color: #fff;
    padding: 5px;
    border-radius: 5px;
    display: none;
    top: -20px;
    }
</style>
 <div class="container-fluid padding-tb-3">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h1 class="center margin-b-1 ">Free Word Counter Tool</h1>
                    <p class="text-center margin-b-2 ">Calculate word count, characters count of your text. It's Free!


                    </p>
                </div>
            </div>

            <div class="container-fluid div-no-padding">
                <div class="form-outer-container form-mt-30">

                    <div class="row">
                        <div class="col-md-12 word-counter-icon-container">
                        <span class="fa fa-undo word-counter-icon " id="undoButton" aria-hidden="true"></span>
                        <span class="fa fa-repeat word-counter-icon" id="redoButton"  aria-hidden="true"></span>
                        <span class="fa fa-clone word-counter-icon btn-clone " id="copyButton"   aria-hidden="true"></span>
                        <span class="fa fa-times word-counter-icon" id="clearButton" aria-hidden="true"></span>
                            

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">

                            <form>
                                <div class="form-group form-mt-10">
                                    <div id="tooltip" class="tipCopy">Text Copied!</div>
                                    <textarea id="word-count-content-area" class="form-control form-mb-20"
                                        placeholder="Start typing or copy-paste the text..."
                                        onfocus="this.placeholder=''"
                                        onblur="this.placeholder='Start typing or copy-paste the text...'"
                                        rows="10"></textarea>

                                </div>

                            </form>

                        </div>
                    </div>



                    <div class="row">

                        <div class="col-md-4">
                            <div class="count-card-pink">
                                <img src="<?php bloginfo('template_directory'); ?>/images/words-white.png" class="count-card-img" alt="count-card">
                                <div class="card-body">
                                    <h5 class="count-card-text-sm">Words</h5>
                                    <p class="count-card-text-big card-text-white" id="word-count">0</p>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="count-card-white text-primary">
                                <img src="<?php bloginfo('template_directory'); ?>/images/characters-icon-pp.png" class="count-card-img" alt="icon-1">
                                <div class="card-body">
                                    <h5 class="count-card-text-sm">Characters</h5>
                                    <p class="count-card-text-big card-text-pink" id="char-count">0</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="count-card-pink">
                                <img src="<?php bloginfo('template_directory'); ?>/images/page-white.png" class="count-card-img" alt="count-card2">
                                <div class="card-body">
                                    <h5 class="count-card-text-sm">Page</h5>
                                    <p class="count-card-text-big card-text-white">0</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
    
    
    <div class="container-fluid background-light">
    <div class="container padding-tb-3 mobile-bn-padding">

        <div class="row headline">

            <div class="col-md-12">

                <h2 class="margin-b-1">Don't Limit Yourself - Discover More Tools To Elevate Your Work Today</h2>

                <p class="text-center">Say goodbye to mediocre working style with our online <a href="<?= get_bloginfo('wpurl') ?>/free-tool">free tools</a> - jam-packed with features designed to help you elevate your work. Upgrade your skills today. </p>

            </div>

        </div>

        <?php get_template_part('includes/section', 'othertools') ?>

    </div>
</div>
    
    <div class="container-fluid background-light padding-tb-3">

        <div class="container">

           

            <!--Vertical Tabs-->

            <div class="row margin-t-2">
                <div role="tabpanel">
                    <div class="col-sm-4">
                        <div class="ex1">

                            <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                                <li role="presentation" class="brand-nav active"><a href="#tab1"
                                        data-toggle="tab">Say Goodbye to the Writer's Obstacle and Hello to Writer's PERK!</a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab2" data-toggle="tab">All the Words, None of the Hassle All Around Wrapped Up in Word Counter Tool!</a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab3" data-toggle="tab">Check Your Word's Health in Seconds!</a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab4" data-toggle="tab">Use Authoritative Tool to Write like a Professional!</a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab5" data-toggle="tab">Get Precise. Get Personal as Your Words are Important</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="ex2">

                            <div class="tab-content no-padding no-margin">

                                <div class="tab-pane fade in active" id="tab1">

                                    <div class="blue-header">Say Goodbye to the Writer's Obstacle and Hello to Writer's PERK!</div>


                                    <p>You've got a lot on your mind&mdash;from what to wear today to the next big thing you're going to do. But when it comes time to write, you don't have time for all that checking and editing in a busy schedule. You just want a tool that gets the job done and doesn't mess around.</p>
<p>That's why we created Paper Perk's Word Counter Tool; that's so simple and intuitive that it feels like magic!</p>
<p>Tell us, are you sick of being judged by the number of words in your content?</p>
<p>We feel ya.</p>
<p>Here we're all about helping you make the most of your time so that you can get back to doing what's important: creating content that real people actually want to read and share with their friends. That's why this tool is built&mdash;so that you can measure how long or short your writing is, how many unique words are in it, how many syllables there are, and more!</p>
<p>Because when you're focused on what really matters (like writing an article that will get shared by millions), who cares if there isn't a paragraph break between every sentence?</p>
<p>Who says change isn't good? Word counts, syllables, line spacing&hellip; it adds up to better grades. And you don't have to lug around a dictionary.</p>
<p>The handiest little writing assistant you can find on the web. Use it to check if your social media posts are picture-perfect, spice up your resume, or give your 5th grader an edge in the classroom. Don't be surprised if you start using it all day long!</p>
<p>Go ahead by keeping your social gaming and writing engaging through the metrics of our authorized counting tool.</p>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="blue-header">All the Words, None of the Hassle All Around Wrapped Up in Word Counter Tool!</div>

                                    <p>Let's face it. Writers are hoarders. They need to stop hoarding and start counting.</p>
<p>How many times have you written a document only to realize that it was way too long?</p>
<p>There's nothing worse than getting to the end of your paper and realizing that it's way too long. Even if you're just writing an essay for class, you know what we are talking about. You put so much time into writing a great paper, and then you find out that it's way too long.</p>
<p>Well, now there's a solution! Paper Perk has created a word counter tool that will help you keep track of how many characters are in each sentence of your document. This makes it easy for you to make sure your documents aren't too long or too short. Also, get ready to prepare your social media posts with the word counter tool.</p>
<p>Need to write a paper, but you're not sure that it's up to your instructor's standards? Word Counter will tell you if you're passing or failing. You don't have to spend every night analyzing your own writing or hoping that a beta reader will do it for you.&nbsp;</p>
<p>We do that for you. Your paragraphs, sentences, and documents will be measured, compared, and analyzed according to the best-selling books in your genre.</p>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <div class="blue-header">Check Your Word's Health in Seconds!</div>

                                    <p>At Paper Perk, we know you work hard. Have you ever sat at your desk and thought, "I've written so much; I must be making progress"? Do we hate to break it to you...but are you writing more than an average grader?</p>
<p>You're a writer. You know that words are your currency. They're also your stock in trade, your tools, and the tools you use to build relationships with your readers. You use words to express yourself, connect with people, and share your voice with the world.</p>
<p>But sometimes, it can be hard to figure out if what you're writing is good enough&mdash;and even harder to know whether or not it's the right amount of words.</p>
<p>That's where Paper Perk comes in! We provide all kinds of tools to help you get the most out of your words and make sure that each one counts as much as possible.&nbsp;</p>
<p>Our Word Counter Tool lets you check line spacing, syllables, syllable/word ratio, the total number of words in a paragraph, average sentence length, and more&mdash;all so that you can make sure everything is just as good as it needs to be before it goes public.</p>
<p>Do you realize how much money you could save by editing your content before you publish it? And that's not even taking the time you'll save into account. Do the math. It's an investment.</p>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <div class="blue-header">Use Authoritative Tool to Write like a Professional!
                                    </div>

                                    <p>Looking for a way to boost your writing?</p>
<p>Have you tried Paper Perk's Magical Word Counter Tool yet?</p>
<p>It is a simple, easy-to-use word counter tool that's perfect for bloggers, fiction writers, and even students. Just type in your text, and it will show you all of the important stats about your writing, so you can make sure it's up to snuff.</p>
<p>Here's some of what it can do for you:</p>
<ul>
<li>Paragraph length (in words)</li>
<li>Sentence length (in words)</li>
<li>Check line spacing (in ems or pixels)</li>
<li>Social media word count length (in characters)</li>
<li>Unique words count</li>
<li>The shortest sentence in your document (in words)</li>
<li>The longest sentence in your document (in words)</li>
<li>Average words length per page</li>
<li>Pages/Syllables/Lines/Reading time/Speaking time/Handwritten time/Reading level and whatnot!&nbsp;</li>
</ul>
<p>No longer do you have to worry about your writing being TOO long or too short, AND we'll even help you cut all the bloat from your social media posts. Fear not. This tool likes to handle all kinds of word overages.</p>
<p>Most papers are written at a very easy reading level. But professors aren't smart for no reason. You're smart. You know that you want to write your papers at a more difficult-to-read level. A good paper should read at or above the average reading level of the class.&nbsp;</p>
<p>And this tool helps you do it with minimal effort! Every paper gets an F in awesomeness unless it's written at our suggested grade level or above! Try it right now, and watch your next grade.</p>
                                </div>
                                
                                <div class="tab-pane" id="tab5">
                                    <div class="blue-header">Get Precise. Get Personal as Your Words are Important
                                    </div>

                                    <p>Are you struggling to meet your word count? Do you feel like you're writing a novel, but it's not quite long enough? Are you in need of a little help from the pros? Then Paper Perk' 's Word Counter tool is for you!</p>
<p>Knocked up a Word Document or PowerPoint? It's time for a scan. Get plugged into <a href="<?= get_bloginfo('wpurl') ?>">Paper Perk</a>, and get the confidence you need to be impressive.</p>
<p>Our tool will analyze the content of your document and give you an accurate reading of how many words are in there. We can even tell you how long it will take to read aloud! You'll know exactly when it's time to call it quits so that your content is just right.</p>
<p>It's great for business professionals or experts who want to learn from their peers and be inspired by others. For example, you might find it helpful to know the average sentence length of a Wall Street Journal article or a New York Times blog post. Sometimes we'd want to mimic that style or write at the same level for added credibility.</p>
<p>If you're reading this, it means you want to keep writing &mdash; with less of frustrating parts. We can help with the most accurate word and list counters for your documents.</p>
<p>Now resume writing and start publishing social media posts.&nbsp;</p>
<p>You've got a lot to say, and you want it all to be worth reading, right? So start with a word counter tool to cut through the clutter and set yourself apart.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--Vertical Tabs-->

        </div>

    </div>
<script>
   const textarea = document.getElementById('word-count-content-area');
    const wordCount = document.getElementById('word-count');
    const charCount = document.getElementById('char-count');
    const copyButton = document.getElementById('copyButton');
    const clearButton = document.getElementById('clearButton');
    const undoButton = document.getElementById('undoButton');
    const redoButton = document.getElementById('redoButton');
    const tooltip = document.getElementById('tooltip');
    
    const textHistory = [];
    let currentIndex = -1;
    textarea.addEventListener('input', () => {
    console.log('text area')
    saveText();
    
  const text = textarea.value;
  const words = text.split(/\s+/).filter(Boolean);
  const characters = text.replace(/\s/g, '').length;
 wordCount.innerHTML = `Words: ${words.length}`;
 charCount.innerHTML = `Characters: ${characters}`;



    });

  copyButton.addEventListener('click', () => {
    if (textarea.value.trim() === '') {
        // If there's no text, display an error message in a div with a red background
        tooltip.style.display = 'block';
        tooltip.style.backgroundColor = 'red';
        tooltip.textContent = 'No text to copy';
        setTimeout(() => {
            tooltip.style.display = 'none';
        }, 2000);
    } else {
        // If there's text, proceed with copying
        // Clear any previous error message
        tooltip.style.display = 'none';
        
        // Select the text in the textarea and copy it to the clipboard
        textarea.select();
        document.execCommand('copy');
        
        // Clear the text from the textarea
        textarea.value = '';
        
        // Show a success message
        tooltip.style.display = 'block';
        tooltip.style.backgroundColor = 'green'; // You can change the color
        tooltip.textContent = 'Text copied to clipboard';
        
        setTimeout(() => {
            tooltip.style.display = 'none';
        }, 2000);
        
        saveText();
    }
});




    clearButton.addEventListener('click', () => {
        textarea.select()
        textarea.value = ''  
    })
    function saveText() {
        textHistory.push(textarea.value);
        currentIndex++;
    }
    // Function to update the textarea with the specified text
    function setText(text) {
        textarea.value = text;
    }
    undoButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                setText(textHistory[currentIndex]);
            }
        });

    redoButton.addEventListener('click', () => {
        if (currentIndex < textHistory.length - 1) {
            currentIndex++;
            setText(textHistory[currentIndex]);
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css" rel="stylesheet">
<script href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
<script href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css"></script>





 <?php get_footer('tools'); ?>