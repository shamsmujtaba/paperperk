
    $(document).ready(function () {
      $('.university-logo-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
    


// -------------------------

// Get all elements with the class "custom-arrow-right"
var customArrowRightElements = document.querySelectorAll('.custom-arrow-right');
var customArrowLeftElements = document.querySelectorAll('.custom-arrow-left');

// Define the click event handler function
function customArrowRightClickHandler(event) {
    console.log(this);
    
    // Find the nearest sibling element with class "slick-slider"
    var slickSlider = this.parentElement.querySelector('.slick-slider');
    // console.log(slickSlider);

    // Check if a slickSlider element was found
    if (slickSlider) {
        // Trigger the "slickNext" action on the slider (assuming you have the necessary Slick slider setup)
        // You can use a different method if required, e.g., slickSlider.slickGoTo(1) to move to the next slide.
        // Make sure your Slick slider methods are correctly set up.
        $(slickSlider).slick('slickNext');
    }
}
function customArrowLeftClickHandler(event) {
    console.log(this);
    
    // Find the nearest sibling element with class "slick-slider"
    var slickSlider = this.parentElement.querySelector('.slick-slider');
    // console.log(slickSlider);

    // Check if a slickSlider element was found
    if (slickSlider) {
        // Trigger the "slickNext" action on the slider (assuming you have the necessary Slick slider setup)
        // You can use a different method if required, e.g., slickSlider.slickGoTo(1) to move to the next slide.
        // Make sure your Slick slider methods are correctly set up.
        $(slickSlider).slick('slickPrev');
    }
}

// Attach the click event handler to all "custom-arrow-right" elements
customArrowRightElements.forEach(function(element) {
    element.addEventListener('click', customArrowRightClickHandler);
});
customArrowLeftElements.forEach(function(element) {
    element.addEventListener('click', customArrowLeftClickHandler);
});



    
    setInterval(function e() {
    var t = new Date(),
    o = 24 - t.getHours(),
    s = 60 - t.getMinutes();
    1 == (s + "").length && (s = "0" + s);
    var n = 60 - t.getSeconds();
    1 == (n + "").length && (n = "0" + n), jQuery("#the-final-countdown div").html(o + '<span class="text-white fs-6" style="font-size:18px;">Hrs</span> ' + s + '<span class="text-white fs-6" style="font-size:18px;">Mins</span> ' + n + '<span class="text-white fs-6" style="font-size:18px;">Secs</span> ');
    }, 1e3);
    


    $(document).ready(function () {
      $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });


    $(document).ready(function () {
      $('.writer-services-icon-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        infinite: true, // Enable infinite loop
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });

 

 
    $(document).ready(function () {
      $('.writers-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        infinite: true, // Enable infinite loop
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 2
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 1
          }
        }]
      });
    });
    
    

//         $(function () {
            
            
//     $(".abb").slice(0, 6).show(),
//         $("#load").click(function (e) {
            
//             e.preventDefault(), $(".abb:hidden").slice(0, 6).show(), 0 == $(".abb:hidden").length && (event.target.style.display = "none");
//         });
// });

$(document).ready(function () {
    $(".abb").slice(0, 6).show();
    
    $("#load").click(function (e) {
        e.preventDefault();
        $(".abb:hidden").slice(0, 6).show();
        if ($(".abb:hidden").length === 0) {
            $("#load").hide(); // Hide the button when there are no more hidden elements.
        }
    });
});



 

  
 
    //<![CDATA[
    let toggles = document.getElementsByClassName("toggle");
    let contentDiv = document.getElementsByClassName("content");
    let icons = document.getElementsByClassName("icon");

    for (let i = 0; i < toggles.length; i++) {
      toggles[i].addEventListener("click", () => {
        if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
          contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
          toggles[i].style.color = "#0084e9";
          icons[i].classList.remove("fa-plus");
          icons[i].classList.add("fa-minus");
        } else {
          contentDiv[i].style.height = "0px";
          toggles[i].style.color = "#111130";
          icons[i].classList.remove("fa-minus");
          icons[i].classList.add("fa-plus");
        }

        for (let j = 0; j < contentDiv.length; j++) {
          if (j !== i) {
            contentDiv[j].style.height = 0;
            toggles[j].style.color = "#111130";
            icons[j].classList.remove("fa-minus");
            icons[j].classList.add("fa-plus");
          }
        }
      });
    }
//]]>


function fetchDocumentType() {
    $.ajax({
        method: "GET",
        url: "https://paperperk.com/wp-content/themes/theme/functions.php",
        data: { documentType: "" },
        dataType: "text",
        success: function (e) {
            $("#documentType").html(e), $("#documentType").removeAttr("onmouseover");
        },
    });
}


function fetchNoOfPages() {
    $.ajax({
        method: "GET",
        url: "https://paperperk.com/wp-content/themes/theme/functions.php",
        data: { pages: "" },
        dataType: "text",
        success: function (e) {
            $("#pages").html(e), $("#no_of_pages").removeAttr("onmouseover");
        },
    });
}
 
 
 
 function fetchHours() {
    $.ajax({
        method: "GET",
        url: "https://paperperk.com/wp-content/themes/theme/functions.php",
        data: { hours: "" },
        dataType: "text",
        success: function (e) {
            $("#my-hours").html(e), $("#my-hours").removeAttr("onmouseover");
        },
    });
}

 $('.faq-title').click(function() {
  // Close all other open FAQs
  $('.collapse.show').collapse('hide');
});

// -----------Card Hover Effect-----------------------

 // -------------Cards---------------
    let cardContainers = document.querySelectorAll('.cards-container');
    cardContainers.forEach(cardContainer => {
            var cardBg = cardContainer.querySelector(".card-bg");
            let cards = cardContainer.querySelectorAll(".move-card");
            let cardInitial = cardContainer.querySelector('[data-card-initial]');
    
                cards.forEach((card) => {
                    card.addEventListener("mouseover", ()=>{
                        setCardVariables(card, cardContainer, cardBg)
                    });
                });
    
            cardContainer.addEventListener("mouseout", () => {
                setCardVariables(cardInitial, cardContainer, cardBg)
            });
            setCardVariables(cardInitial, cardContainer, cardBg)
            window.addEventListener("resize", () => {
                setCardVariables(document.querySelector('.card:hover', cardContainer, cardBg) || cardInitial);
                });
    });

function setCardVariables(card, cardContainer, cardBg) {
	let hoverColor = card.getAttribute("data-hover-color") || "blue";
	let cardRect = card.getBoundingClientRect();
	let containerRect = cardContainer.getBoundingClientRect();

	let top = cardRect.top - containerRect.top + "px";
	let left = cardRect.left - containerRect.left + "px";
	let width = cardRect.width + "px";
	let height = cardRect.height + "px";

	cardBg.style.setProperty("--card-bg-top", top);
	cardBg.style.setProperty("--card-bg-left", left);
	cardBg.style.setProperty("--card-bg-width", width);
	cardBg.style.setProperty("--card-bg-height", height);
	cardBg.style.setProperty("--card-bg-color", hoverColor);
}
