$(window).load(function(){ 
    // Preloader 
    $('#loader').fadeOut('slow');
    $('.spinner').fadeOut('slow'); 
}); 



// Portfolio Items
var Container = $('.container');
Container.imagesLoaded(function () {
    var portfolio = $('.gallery-menu');
    portfolio.on('click', 'button', function () {
        $(this).addClass('active').siblings().removeClass('active');
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    var $grid = $('.gallery-list').isotope({
        itemSelector: '.gallery-grid'
    });

});

// Wow Animation Library
new WOW().init();



// Faq Question
document.addEventListener("DOMContentLoaded", function () {
    const faqQuestions = document.querySelectorAll(".faq-question");

    faqQuestions.forEach((question) => {
      question.addEventListener("click", () => {
        const answer = question.nextElementSibling; // Get the answer div

        if (answer.style.display === "block") {
          answer.style.display = "none";
          question.querySelector(".toggle").textContent = "+";
          question.classList.remove("active"); // Remove the active class
        } else {
          answer.style.display = "block";
          answer.style.color = "#002F69";

          question.querySelector(".toggle").textContent = "-";
          question.classList.add("active"); // Add the active class
        }
      });
    });
  });


  /* ==============================================
  	 Main-Slider
  	=============================================== */
$(document).ready(function () {
  var owl = $("#owl-slider");

  owl.owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    singleItem: true,
    transitionStyle: "fade",
  });
});

/* ==============================================
  	  WOW Javascripts 
  	=============================================== */

new WOW().init();

/* ==============================================
  	  Navbar-Fixed-Top
  	=============================================== */

$(window).bind("scroll", function () {
  var navHeight = $(window).height() - 100;
  if ($(window).scrollTop() > navHeight) {
    $(".navbar").addClass("on");
  } else {
    $(".navbar").removeClass("on");
  }
});

/* ========================================================================
     On click menu item animate to the section
   ========================================================================== */
$(".mobilenav li, .back-to-top").on("click", function () {
  var target = $(this).data("rel");
  var $target = $(target);
  $("html, body").stop().animate(
    {
      scrollTop: $target.offset().top,
    },
    900,
    "swing"
  );
});
