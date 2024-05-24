<?php
/* Template Name: GPA Calculater  */
get_header('tools');
?>
</div>
    <div class="container-fluid padding-tb-3">

        <div class="container div-no-padding">

            <div class="row">

                <div class="col-md-12">

                    <h1 class="center margin-b-1 ">Trace Your Academic Performance with Free GPA Calculator</h1>
                    <p class="text-center margin-b-2 ">Interested in knowing how well or not-so-well have you been performing in your academic life? You have found the right tool. With our accurate GPA calculator, we help you keep track of your academic progress free, fast, and with ridiculous ease.

                    </p>

<h2>College GPA Calculator: Calculating GPA Made Simple, Fast, and Easy!</h2>
<p>Have you been looking here, there, and everywhere to calculate your GPA free, fast, and with pinpoint accuracy? Your search ends right here. We offer our accurate GPA calculator to help you figure out your weighted and unweighted GPA without paying a penny.</p>

                </div>

            </div>

            <!-- GPA Calculator -->
            <div class="container-fluid padding-lr-2">
             <div class="row">

                <div class="col-md-12">

                    <div class="row">
                        <div class="col-md-12">
                            <h3>CGPA Calculator</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="gpa-calculator__container">
                                <div class="gpa-calculator__wrapper">
                                    <ul class="gpa-calculator__main-ul">
                                       
                                    </ul>
                                   <div class="gpa-calculator__add-semester">
                                        <button class="gpa-calculator__add-course__button" id="add-next-semester" onclick="addSemister(1)">Add Next Semester</button>
                                        <div class="gpa-calculator__semester-result"><span>Your CGPA:</span>
                                            <span class="cgpa-calculator__result" style="color: rgb(87, 87, 87);">0.00</span>
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
    <div class="container padding-b-3">

        <div class="row">

            <div class="col-md-12">
                
             

                <h2 class="margin-b-2"> The Three Steps to Getting Accurate GPA Calculation
 </h2>
            </div>

        </div>

        <div class="row p-6">

            <div class="mb-2">

                <p class="text-center">Getting a good GPA is hard, and so is calculating it accurately on many run-of-the-mill GPA calculators, right? With our easy GPA calculator, we make the process of calculating your  GPA accurately as easy as a walk in the park. All it takes are the three simple steps below </p>

            </div>

        </div>

        <div class="row padding-t-2">

            <div class="col-md-4 col-xs-4">

                <div class="big-num">Step 1</div>

            </div>

            <div class="col-md-4 col-xs-4">

                <div class="big-num">Step 2</div>

            </div>

            <div class="col-md-4 col-xs-4">

                <div class="big-num"> Step 3</div>

            </div>

        </div>

        <div class="row steps-dot">

            <div class="col-md-4 col-xs-4">

                <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps dot" /></div>

            </div>

            <div class="col-md-4 col-xs-4">

                <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps dot" /></div>

            </div>

            <div class="col-md-4 col-xs-4">

                <div class="dot"><img src="<?php bloginfo('template_directory'); ?>/images/steps-dot.png" alt="steps dot" /></div>

            </div>

        </div>

        <div class="row padding-t-2">

            <div class="col-md-4">

                <div class="row">

                    <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/enter-eq.png" alt="steps" /></div>

                    <div class="col-md-9 col-xs-9">

                        <div>
                            <h4 class="step-heading">Enter the Subject and Grade
</h4>
                        </div>

                        <p>Enter the name of the subject and the letter grade you got in it.
</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="row">

                    <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/click-to.png" alt="step-image" /></div>

                    <div class="col-md-9 col-xs-9">

                        <div>
                            <h4 class="step-heading">                        
                                
                                <div class="steps-head"> Enter Credit Hours and Optional
</div>


                            </h4>
                        </div>

                        <p>Enter the credit hours you availed and optional subjects (If any) and get the GPA calculation process going.
</p>
                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="row">

                    <div class="col-md-3 col-xs-3 step-img"><img class="step-image-size" src="<?php bloginfo('template_directory'); ?>/images/balanced-e.png" alt="get-answer" /></div>

                    <div class="col-md-9 col-xs-9">

                        <div>
                            <h4 class="step-heading">Get the Calculated GPA
                            </h4>
                        </div>
                        <p>Get your hands on the GPA report at the bottom of the subject list.</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Other Tools -->
    <div class="container-fluid section-bg-color">
        <div class="container padding-tb-3">

            <div class="row headline">

                <div class="col-md-12">
                    

                    <h2 class="margin-b-1">Our AI-powered Tools Help You Every Step of Your Academic Journey</h2>

                    <p class="text-center">When it comes to reducing the stress in your academic life, we have your back with our <a href="<?= get_bloginfo('wpurl') ?>">paper writing service</a> and AI-boosted free tools. Don’t go anywhere else and get the most out of our free tools NOW.</p>

                </div>

            </div>

            <?php get_template_part('includes/section', 'othertools') ?>

        </div>
    </div>


    <!-- FAQs -->

    <div class="container padding-tb-3">

        <div class="row headline">

            <div class="col-md-12">
                
                <div class="section-sub-head">Frequently Asked Questions
</div>


            </div>

        </div>

        <div class="row">

            <div class="glossymenu">

                <div class="col-md-10 col-md-offset-1">

                    <a class="menuitem submenuheader" href="#">What is the difference between cumulative GPA and term GPA?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>The primary difference between cumulative and term GPA is that term GPA refers to a student’s grades in a specific semester while the cumulative GPA is the overall grade point average of all the grades you have earned in all your semesters and courses throughout your academic career.
</p>

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">What is the best and most accurate GPA calculator?</a>

                    <div class="submenu">

                        <div class="p-faq">

                            <p>Though many websites are providing online college GPA calculators, most of these calculators either lack one thing or the other. Based on students’ feedback, Paper Perk’s GPA online calculator is by far the best thanks to its accurate result and user-friendly interface. </p>

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">Does your GPA tester help me find out if I am eligible for certain scholarships?</a>

                    <div class="submenu">

                        <div class="p-faq">

                            <p>Definitely. Our easy GPA calculator helps you find out if you are eligible for a certain scholarship. It helps you calculate your CGPA free. Once you found your CGPA, you can compare it with the eligibility criteria set by the institution for academic scholarship.
</p>

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">How can I raise my GPA?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>You can raise your GPA significantly by taking regular classes, participating in curricular activities, studying harder and smarter, and submitting your assignments well before the deadlines. If you somehow cannot find to do assignments on your own or meet the deadlines, go for online coursework help and don’t risk your grades. </p>
                            

                        </div>

                    </div>

                    <a class="menuitem submenuheader" href="#">What is a good GPA to get into top universities?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>Usually, a GPA somewhere between 3.0 to 3.5 will be good to get you into most schools, colleges, and universities. Prestigious institutions, however, require you to have a GPA higher than 3.5. </p>

                        </div>

                    </div>
                    
                    <a class="menuitem submenuheader" href="#">What is the difference between a weighted and unweighted GPA?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>The major difference between weighted and unweighted GPAs is that one takes the difficulty level of your course into account while the other does not. An unweighted GPA is the average of your grades and credits without considering how difficult or how easy the subject is. </p>
<p>Weighted GPA, on the other hand, still is the average of your grades and credits but it also regards the difficulty level of the subject. For example, If you earn an A in an easy class will be considered 4.0 while an A in an advanced class will be graded as 5.0. With our GPA unweighted calculator, you can figure out your unweighted as well as weighted GPA for free.
.</p>

                        </div>

                    </div>
                    
                     <a class="menuitem submenuheader" href="#">Is your GPA calculator free?</a>

                    <div class="submenu">

                        <div class="p-faq">
                            <p>Our online college GPA calculator, with all its unique features, is absolutely free to use and needs no sign-ups or registrations whatsoever.</p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </div>




    <div class="container-fluid section-bg-color padding-tb-3">

        <div class="container">

            <div class="row">

                <div class="col-md-12">



                    <h2 class="section-head center">What Is GPA and Why Is It So Important?</h2>

                    <div>
                        <p class="text-center">GPA, or more precisely, grade point average, is a system used to trace your academic performance. Your GPA indicates whether you have been a good student or not a so-good one.  If you are looking for a scholarship or hoping to get into a prestigious institution, your GPA is what decides whether you stand the chance of getting admission or a scholarship. Here are the whys and hows you should be keeping track of your GPA.</p>
                    </div>

                    

                </div>

            </div>

            <!--Vertical Tabs-->

            <div class="row margin-t-2">
                <div role="tabpanel">
                    <div class="col-sm-4">
                        <div class="ex1">

                            <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                                <li role="presentation" class="brand-nav active"><a href="#tab1"
                                        data-toggle="tab">Our Advanced GPA Calculator: What Sets It Apart</a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab2" data-toggle="tab">Why Use Our GPA Unweighted Calculator</a></li>
                                <li role="presentation" class="brand-nav"><a href="#tab3" data-toggle="tab">Why Use Our GPA Unweighted Calculator</a></li>
                                <!--<li role="presentation" class="brand-nav"><a href="#tab4" data-toggle="tab"> Paper Perk's Auto-Balancer for Quick and Accurate Chemistry Equations</a></li>-->
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="ex2">

                            <div class="tab-content no-padding no-margin">

                                <div class="tab-pane fade in active" id="tab1">

                                    <h3><div class="blue-header">Our Advanced GPA Calculator: What Sets It Apart</div></h3>


                                    <p>Wondering what features make our online college GPA calculator different and more suitable to use than others? Here are a few major features that make it stand out.</p>
<h3>Fast and Furious</h3>
<p>With everything else happening so rapidly in your life at college, why should the process of GPA calculations be time-consuming? Our GPA unweighted calculator helps you figure out your GPA in seconds and lets you focus on your exams and assignments happening so quickly and unpredictably.</p>
<h3>Zero Charges</h3>
<p>Yes, you heard that right. Not only do we let you calculate your GPA with our GPA tester for free, but we also provide a collection of <a href="https://paperperk.com/free-tool">free tools</a> that help you every step of your academic journey and charge nothing on the way.</p>
<h3>Convenient to Use</h3>
<p>Thanks to its user-friendly interface, our GPA calculator is easy to use. Even if you are using it for the first time, it won&rsquo;t take you more than a quarter of a minute to understand its interface. It&rsquo;s that simple.</p>
<h3>Commendable Compatibility</h3>
<p>Our GPA online calculator can be used on all types of devices. Whether you want to use on it your mobile, laptop, or desktop, it will function smoothly because it is compatible with all operating systems like Android, IOS, MacOS, Linux, and Windows.</p>
<h3>Accurate Calculations</h3>
<p>When you are calculating your GPA, what is the one thing that matters the most? Yes, it is the accuracy of the calculator. We understand this and have programmed our AI-powered GPA calculator to provide accurate results.</p>
<h3>No Distractions</h3>
<p>One thing you can be sure about while using our easy GPA calculator is that you won&rsquo;t get distracted by annoying pop-ups and unwanted ads. That is a promise.</p>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <h3><div class="blue-header">Why Use Our GPA Unweighted Calculator</div></h3>

                                    <p>We can give a hundred reasons you should be tracing your GPA with our accurate GPA calculator, but here are the most important ones.</p>
<h3>Identifying Room for Improvement&nbsp;</h3>
<p>Keeping track of your GPA enables you to know what subjects you are good at and what subjects you need to improve in. With our versatile GPA calculator, you can precisely trace how well or not-so-well you have been performing in your subjects and where you need to make improvements.&nbsp;</p>
<h3>&nbsp;Finding Out Your Eligibility for Scholarships&nbsp;</h3>
<p>Our accurate GPA calculator helps you find out whether you are eligible for scholarships offered by different universities. By calculating your GPA you will be able to know exactly how many more points you need to add to your GPA to meet the GPA criteria for your desired scholarships.&nbsp;</p>
<h3>Monitoring Overall Academic Progress</h3>
<p>Using an online college GPA calculator helps you keep an eye on your overall academic performance. This way you can identify what cost you grades in your last semester and look for ways to overcome those mistakes in your next semester.</p>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3><div class="blue-header">How to Use Our Accurate GPA Calculator</div></h3>

                                   <p>You might be thinking that a GPA calculator as sophisticated as ours will be pretty hard to work on. But that just is not the case. It works in a pretty simple way. Here&rsquo;s how you can get it to work for you:</p>
<h3>Step 1: Enter the Subject Name</h3>
<p>In the very first column on the left side, enter the name of the subject.</p>
<h3><br />Step 2: Enter the Grades You Earned</h3>
<p>In the second column, add the grades you were given in the subject.</p>
<h3>Step 3: Enter the Credit Hours</h3>
<p>In the third column, add the credit hours you availed for the subject.</p>
<h3>Step 4: Add Another Subject (If Needed)</h3>
<p>Add another subject in case you need it and repeat the above steps for the newly-added subject.</p>
<h3>Step 5: Add Another Semester (If Needed)</h3>
<p>If you are looking for a calculation of your cumulative GPA in more than one semester, add another semester and repeat the steps in the first semester.</p>
<h3>Step 6: Get Accurate Results</h3>
<p>Look at the bottom right. Our easy GPA calculator has processed all your input and produced the results.</p>
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
                <h2 class="white">Exploring New Possibilities with Accurate Online College GPA Calculator</h2>

                <p class="white ">Not getting good grades is bad, but not tracking them is worse. And we help in reversing both. Use our GPA tester to find out which subjects need your attention more than ever to boost your GPA. For how much? For nothing. It’s totally yours to use without paying a penny.
</p>
                <div class="white-btn"><a href="https://order.paperperk.com/">Order Now</a></div>

            </div>

        </div>

    </div>
    
    <script>
    // Define the credit values for each grade
const gradeValues = {
    "A+": 4.0,
    "A": 3.75,
    "A-": 3.50,
    "B+": 3.25,
    "B": 3.0,
    "B-": 2.75,
    "C+": 2.50,
    "C": 2.25,
    "D": 2.0,
    "F": 0.0
};
// ---------------

function CourseList(i, j) {
    s=i;
    i= i+'0'+j
    listItem = document.createElement("li");
    listItem.className = "gpa-calculator__course-li course-"+i+"";
    let inputElement = document.createElement("input");
    inputElement.type = "text";
    inputElement.name = "course-name";
    inputElement.value = "";
    inputElement.id = "course-name";
    // inputElement.className = "gpa-calculator__course-name gpa-calculator__input";
    inputElement.placeholder = "Subject Name";
    listItem.appendChild(inputElement);

    let selectElement = document.createElement("select");
    // selectElement.className = "gpa-calculator__grate grades-0";
    selectElement.name = "grade";
    selectElement.id = "grade-"+i+"";
    selectElement.setAttribute("onchange", "gradeselected(" + i + ");");


    let values = ["", "4.0", "3.75", "3.50", "3.25", "3.0", "2.75", "2.50", "2.25", "2.0", "0.0"];
    let grades = ["Grade", "A+","A", "A-", "B+","B", "B-", "C+", "C", "D", "F"];
    grades.forEach(function(grade,index){
        let option = document.createElement("option");
        option.value = values[index];
        option.text = grade;
        selectElement.appendChild(option);
    })
       
    listItem.appendChild(selectElement);

    let creditsInput = document.createElement("input");
    creditsInput.type = "number";
    creditsInput.name = "credits";
    creditsInput.step = "1";
    creditsInput.min = "0";
    creditsInput.max = "5";
    creditsInput.id = "credits-"+i+"";
    creditsInput.value = "";
    // creditsInput.className = "gpa-calculator__credits credits-0 gpa-calculator__input";
    creditsInput.placeholder = "Credits";
    creditsInput.disabled = true;
    creditsInput.style.cursor = "not-allowed";
    creditsInput.setAttribute("onchange", "updateCGPA("+s+");");
    listItem.appendChild(creditsInput);

     // Create a button element
     let removeButton = document.createElement("button");
     removeButton.className = "gpa-calculator__remove-item courses-"+i+"";
     removeButton.setAttribute("onclick", "removeCourseList(" + i + ");");

     listItem.appendChild(removeButton);
     let courseUl = document.getElementById("semester-"+s+"");
     courseUl.appendChild(listItem);
}
// CourseList(1, 0)
function removeCourseList(i) {
    let listItem = document.getElementsByClassName("course-"+i+"")[0];
    listItem.remove();
}
function addCourse(i, j) {
    let addcoursebtn = document.getElementById("add-course-"+i+"");
    CourseList(i, j)
    addcoursebtn.setAttribute("onclick", "addCourse(" + i + ", "+ ++j +");")

}
function addSemister(i){
    let listItem = document.createElement("li");
    listItem.className = "gpa-calculator__main-li semester-"+ i +"";

    let divItem = document.createElement("div");
    divItem.className = "gpa-calculator__heading";
    let pItem = document.createElement("p");
    pItem.className = "gpa-calculator__header-text";
    pItem.textContent = "semester "+(i);
    let removeButton = document.createElement("button");
    removeButton.className = "gpa-calculator__remove-all delete-"+i;
    removeButton.setAttribute("onclick", "removeSemister(" + i + ");");


    let ulItem = document.createElement("ul");
    ulItem.className = "gpa-calculator__course-ul";
    ulItem.id = "semester-"+ i +"";


    let gpacoursediv =  document.createElement("div");
    gpacoursediv.className =  "gpa-calculator__add-course-semester";
    let gparesultdiv =  document.createElement("div");
    gparesultdiv.className =  "gpa-calculator__semester-result";
    let sspan= document.createElement("span");
    sspan.textContent= "semester "+i+" GPA: ";
    let gspan= document.createElement("span");
    gspan.className =  "gpa-calculator__semester-cgpa cgpa-semister-"+i+"";
    gspan.textContent= "0.00";
    gparesultdiv.appendChild(sspan);
    gparesultdiv.appendChild(gspan);
    gpacoursediv.appendChild(gparesultdiv);

    let addcoursediv =  document.createElement("div");
    addcoursediv.className =  "gpa-calculator__add-course";
    let addcoursebtn =  document.createElement("button");
    addcoursebtn.className =  "gpa-calculator__add-course__button";
    addcoursebtn.id = "add-course-"+ i +"";
    addcoursebtn.setAttribute("onclick", "addCourse(" + i + ", 3);");
    addcoursebtn.textContent= "Add Subject";
    addcoursediv.appendChild(addcoursebtn);
    gpacoursediv.appendChild(addcoursediv);

    



    divItem.appendChild(pItem);
    divItem.appendChild(removeButton);
    listItem.appendChild(divItem);
    listItem.appendChild(ulItem);
    listItem.appendChild(gpacoursediv);
    let semisterUl = document.getElementsByClassName("gpa-calculator__main-ul")[0];
    semisterUl.appendChild(listItem);
    CourseList(i, 0);
    CourseList(i, 1);
    CourseList(i, 2);
    let addsemisterbtn = document.getElementById("add-next-semester");
    addsemisterbtn.setAttribute("onclick", "addSemister(" + ++i + ");")

}
addSemister(1)
function removeSemister(i) {
    let listItem = document.getElementsByClassName("semester-"+i+"")[0];
    listItem.remove();
}
function gradeselected(i) {
    let creditsInput = document.getElementById("credits-"+i+"");
    creditsInput.disabled = false;
    creditsInput.style.cursor = 'text';
    if (creditsInput.value.trim() != "") {
        updateCGPA(i);
    }
}
let totalgpa=0;
function updateCGPA(i) {
    let semister = document.getElementById("semester-"+i+"");
    let courseListItems = semister.querySelectorAll(".gpa-calculator__course-li");
    let totalGradePoints = 0;
    let totalCredits = 0;
    courseListItems.forEach(function (courseListItem) {
        let courseGPA = calculateCourseGPA(courseListItem);
        // Add the course GPA to the total grade points
        totalGradePoints += courseGPA;

        // Find the credits input element within the list item
        let creditsInput = courseListItem.querySelector("input[type='number']");
        let courseCredits = parseFloat(creditsInput.value);

        // Add the course credits to the total credits
        totalCredits += courseCredits;
    });
    let gpa = totalCredits > 0 ? (totalGradePoints / totalCredits).toFixed(2) : 0.0;
    // alert("CGPA: " + cgpa);
    gpa_span =  document.getElementsByClassName("cgpa-semister-"+i+"")[0];
    
    gpa_span.textContent =gpa;
    overAllCGPA()
}
function overAllCGPA() {
    cgpa_span =  document.getElementsByClassName("cgpa-calculator__result")[0];
    semisterlistItems =  document.querySelectorAll(".gpa-calculator__main-li");
    let totalGradePoints = 0;
    let totalCredits = 0;
    semisterlistItems.forEach(function (semisterlistItem){
        let gpa = calculateSemisterGPA(semisterlistItem)
        let courseCredits=0;
        let creditsInputs = semisterlistItem.querySelectorAll("input[type='number']");
        creditsInputs.forEach(function(creditsInput){
            courseCredits += parseFloat(creditsInput.value);
            
        })
        totalGradePoints += gpa*courseCredits;
        totalCredits += courseCredits;
    });
    let overallCGPA = totalCredits > 0 ? (totalGradePoints / totalCredits).toFixed(2) : 0.0;
    cgpa_span.textContent =  overallCGPA;
}
function calculateSemisterGPA(semisterlistItem){
    let courseListItems = semisterlistItem.querySelectorAll(".gpa-calculator__course-li");
    let totalGradePoints = 0;
    let totalCredits = 0;
    courseListItems.forEach(function (courseListItem) {
        let courseGPA = calculateCourseGPA(courseListItem);
        // Add the course GPA to the total grade points
        totalGradePoints += courseGPA;

        // Find the credits input element within the list item
        let creditsInput = courseListItem.querySelector("input[type='number']");
        let courseCredits = parseFloat(creditsInput.value);

        // Add the course credits to the total credits
        totalCredits += courseCredits;
    });
    let gpa = totalCredits > 0 ? (totalGradePoints / totalCredits).toFixed(2) : 0.0;
    return gpa

}
// Function to calculate the GPA for a single course
function calculateCourseGPA(courseListItem) {
    // Find the grade select element and credits input element within the list item
    let gradeSelect = courseListItem.querySelector("select");
    
    let creditsInput = courseListItem.querySelector("input[type='number']");

    // Get the selected grade and credits value
    let selectedGrade = gradeSelect.value;
    let courseCredits = parseFloat(creditsInput.value);
    // Check if the selected grade is valid and credits are greater than 0
    if (!isNaN(courseCredits) && courseCredits > 0) {
        // Calculate and return the GPA for the course
        return selectedGrade * courseCredits;
    }
    // Return 0 if the data is invalid
    return 0;
}


</script>
    <?php get_footer('tools'); ?>