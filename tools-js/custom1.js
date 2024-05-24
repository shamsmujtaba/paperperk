const images = document.querySelectorAll('img[data-src]');

const loadImg = (image) => {
  image.src = image.dataset.src;
  image.removeAttribute('data-src');
};

const imgObserver = new IntersectionObserver((entries, imgObserver) => {
  entries.forEach(entry => {
    if (!entry.isIntersecting) {
      return;
    } else {
      loadImg(entry.target);
      imgObserver.unobserve(entry.target);
    }
  });
});

images.forEach(image => {
  imgObserver.observe(image);
});

ddaccordion.init({
    headerclass: "submenuheader",
    contentclass: "submenu",
    revealtype: "click",
    mouseoverdelay: 200,
    collapseprev: !0,
    defaultexpanded: [],
    onemustopen: !1,
    animatedefault: !1,
    persiststate: !0,
    toggleclass: ["", ""],
    togglehtml: [
        "suffix",
        "<img src='https://paperperk.com/wp-content/themes/theme/icons/plus-icon.png' class='statusicon' alt='plus' />",
        "<img src='https://paperperk.com/wp-content/themes/theme/icons/plus-icon.png' alt='minus' class='statusicon' />",
    ],
    animatespeed: "fast",
    oninit: function (e, s) {},
    onopenclose: function (e, s, t, a) {},
});

function fetchNoOfPages() {
    $.ajax({
        method: "GET",
        url: "https://paperperk.com/wp-content/themes/theme/functions.php",
        data: { pages: "" },
        dataType: "text",
        success: function (e) {
            $("#no_of_pages").html(e), $("#no_of_pages").removeAttr("onmouseover");
        },
    });
}
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
function Timer(e, t) {
    var o,
        s,
        n = e;
    setInterval(function () {
        (o = parseInt((n / 3600) % 24, 10)),
            (minutes = parseInt((n / 60) % 60, 10)),
            (s = parseInt(n % 60, 10)),
            (o = o < 10 ? "0" + o : o),
            (minutes = minutes < 10 ? "0" + minutes : minutes),
            (s = s < 10 ? "0" + s : s),
            // (document.getElementById("day").innerHTML = "0"),
            // (document.getElementById("hour").innerHTML = o),
            // (document.getElementById("minute").innerHTML = minutes),
            // (document.getElementById("second").innerHTML = s),
            --n;
    }, 1e3);
}
$(".toc .panel-heading").mouseenter(function () {
    $(".toc .panel-collapse").fadeIn();
}),
    $(".toc .panel-collapse").mouseleave(function () {
        $(".toc .panel-collapse").fadeOut();
    }),
    
    $(document).ready(function () {
        $(".customer-logos").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: !0,
            autoplaySpeed: 3e3,
            arrows: !1,
            dots: !1,
            pauseOnHover: !0,
            responsive: [
                { breakpoint: 768, settings: { slidesToShow: 3 } },
                { breakpoint: 520, settings: { slidesToShow: 1 } },
            ],
        });
    }),
    
    $(document).ready(function () {
        $(".testimonials").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: !0,
            autoplaySpeed: 3e3,
            arrows: !1,
            dots: !1,
            pauseOnHover: !0,
            responsive: [
                { breakpoint: 991, settings: { slidesToShow: 2 } },
                { breakpoint: 520, settings: { slidesToShow: 1 } },
            ],
        });
    }),
    $(document).ready(function () {
        $(".ordersteps").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: !0,
            autoplaySpeed: 16e3,
            arrows: !1,
            dots: !0,
            pauseOnHover: !0,
            responsive: [
                { breakpoint: 768, settings: { slidesToShow: 3 } },
                { breakpoint: 520, settings: { slidesToShow: 1 } },
            ],
        });
    }),
    $(document).ready(function () {
        $(".writers-home").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: !0,
            autoplaySpeed: 4e3,
            arrows: !1,
            dots: !1,
            pauseOnHover: !0,
            responsive: [
                { breakpoint: 768, settings: { slidesToShow: 3 } },
                { breakpoint: 520, settings: { slidesToShow: 1 } },
            ],
        });
    }),
    $(document).ready(function () {
        $(".rev-box-nw-hd").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: !0,
            autoplaySpeed: 3e3,
            arrows: !1,
            dots: !1,
            pauseOnHover: !0,
            responsive: [
                { breakpoint: 768, settings: { slidesToShow: 3 } },
                { breakpoint: 520, settings: { slidesToShow: 1 } },
            ],
        });
    }),
    setInterval(function e() {
        var t = new Date(),
            o = 24 - t.getHours(),
            s = 60 - t.getMinutes();
        1 == (s + "").length && (s = "0" + s);
        var n = 60 - t.getSeconds();
        1 == (n + "").length && (n = "0" + n), jQuery("#the-final-countdown p").html(o + '<span style="font-size:18px;">Hrs</span> ' + s + '<span style="font-size:18px;">Mins</span> ' + n + '<span style="font-size:18px;">Secs</span> ');
    }, 1e3),
    $('[data-toggle="slide-collapse"]').on("click", function () {
        ($navMenuCont = $($(this).data("target"))).animate({ width: "toggle" }, 350), $(".menu-overlay").fadeIn(500);
    }),
    $(".menu-overlay").click(function (e) {
        $(".navbar-toggle").trigger("click"), $(".menu-overlay").fadeOut(500);
    }),
    jQuery(function (e) {
        Timer(86400);
    });
var a = 0;
// $(window).scroll(function () {
//     var e = $("#counter").offset().top - window.innerHeight;
//     0 == a &&
//         $(window).scrollTop() > e &&
//         ($(".counter-value").each(function () {
//             var e = $(this),
//                 t = e.attr("data-count");
//             $({ countNum: e.text() }).animate(
//                 { countNum: t },
//                 {
//                     duration: 2e3,
//                     easing: "swing",
//                     step: function () {
//                         e.text(Math.floor(this.countNum));
//                     },
//                     complete: function () {
//                         e.text(this.countNum);
//                     },
//                 }
//             );
//         }),
//         (a = 1));
// }),
    (window.onscroll = function () {
        // myFunction();
    });
// var header = document.getElementById("myHeader"),
//     sticky = header.offsetTop;
function myFunction() {
    window.pageYOffset > sticky ? header.classList.add("sticky") : header.classList.remove("sticky");
}
$(function () {
    $(".abb").slice(0, 6).show(),
        $("#load").click(function (e) {
            e.preventDefault(), $(".abb:hidden").slice(0, 6).show(), 0 == $(".abb:hidden").length && (event.target.style.display = "none");
        });
});



$(document).ready(function () {
    $('.others').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});

 