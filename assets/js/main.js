(function ($) {
  "use strict";

  /*--
        Commons Variables
    -----------------------------------*/
  var $window = $(window),
    $body = $("body");

  /*--
        Custom script to call Background
        Image & Color from html data attribute
    -----------------------------------*/
  $("[data-bg-image]").each(function () {
    var $this = $(this),
      $image = $this.data("bg-image");
    $this.css("background-image", "url(" + $image + ")");
  });
  $("[data-bg-color]").each(function () {
    var $this = $(this),
      $color = $this.data("bg-color");
    $this.css("background-color", $color);
  });

  /*---------------------------- 
        Sidebar Search Active
    -----------------------------*/
  function sidebarSearch() {
    var searchTrigger = $(".header-search-toggle"),
      endTriggersearch = $("button.search-close"),
      container = $(".main-search-active");

    searchTrigger.on("click", function () {
      container.addClass("inside");
    });

    endTriggersearch.on("click", function () {
      container.removeClass("inside");
    });
  }
  sidebarSearch();

  /*------------------------------
        Parallax Motion Animation 
    -------------------------------*/
  $(".scene").each(function () {
    new Parallax($(this)[0]);
  });

  /*--
        Header Sticky
    -----------------------------------*/
  $window.on("scroll", function () {
    if ($window.scrollTop() > 350) {
      $(".sticky-header").addClass("is-sticky");
    } else {
      $(".sticky-header").removeClass("is-sticky");
    }
  });

  /*--
        Off Canvas Function
    -----------------------------------*/
  $(".header-mobile-menu-toggle, .mobile-menu-close").on(
    "click",
    ".toggle",
    function () {
      $body.toggleClass("mobile-menu-open");
    }
  );
  $(".site-mobile-menu").on("click", ".menu-toggle", function (e) {
    e.preventDefault();
    var $this = $(this);
    if ($this.siblings(".sub-menu:visible, .mega-menu:visible").length) {
      $this
        .siblings(".sub-menu, .mega-menu")
        .slideUp()
        .parent()
        .removeClass("open")
        .find(".sub-menu, .mega-menu")
        .slideUp()
        .parent()
        .removeClass("open");
    } else {
      $this
        .siblings(".sub-menu, .mega-menu")
        .slideDown()
        .parent()
        .addClass("open")
        .siblings()
        .find(".sub-menu, .mega-menu")
        .slideUp()
        .parent()
        .removeClass("open");
    }
  });

  $(".header-search-toggle").on("click", function (e) {
    e.preventDefault();
    $(this)
      .siblings(".header-search-form, .header-search-form-2")
      .slideToggle()
      .parent()
      .toggleClass("open");
  });

  $(".header-fs-search-toggle").on("click", function () {
    $("#fullscreen-search").addClass("open");
  });
  $(".fullscreen-search-close").on("click", ".toggle", function () {
    $("#fullscreen-search").removeClass("open");
  });

  $body.on("click", function (e) {
    if (
      !$(e.target).closest(".header-search").length &&
      $window.width() < 768
    ) {
      $(".header-search-form, .header-search-form-2")
        .slideUp()
        .parent()
        .removeClass("open");
    }
    if (
      !$(e.target).closest(".site-main-mobile-menu-inner").length &&
      !$(e.target).closest(".header-mobile-menu-toggle").length
    ) {
      $body.removeClass("mobile-menu-open");
    }
  });

  /*----- 
        Animate Headline Active
    --------------------------------*/
  $(".headline-active").animatedHeadline({
    animationType: "rotate-3",
  });

  $(document).ready(function () {
    $(".intro-slider-wrap").addClass("intro-slider-wrap-0");
  });

  /* ----------------------------
        AOS Scroll Animation 
    -------------------------------*/
  AOS.init({
    offset: 80,
    duration: 1000,
    placement: top,
    once: false,
    easing: "ease-out-back",
  });

  /* ----------------------------
        Tilt Animation 
    -------------------------------*/
  $(".js-tilt").tilt({
    base: window,
    reset: !0,
    scale: 1.04,
    reverse: !1,
    max: 15,
    perspective: 3e3,
    speed: 4e3,
    glare: true,
    maxGlare: 0.5,
  });

  /* ----------------------------
        Portfolio Masonry Activation
    -------------------------------*/
  $(window).load(function () {
    $(".ag-masonary-wrapper").imagesLoaded(function () {
      // filter items on button click
      $(".messonry-button").on("click", "button", function () {
        var filterValue = $(this).attr("data-filter");
        $(this).siblings(".is-checked").removeClass("is-checked");
        $(this).addClass("is-checked");
        $grid.isotope({
          filter: filterValue,
        });
      });

      // init Isotope
      var $grid = $(".mesonry-list").isotope({
        percentPosition: true,
        transitionDuration: "0.7s",
        layoutMode: "masonry",
        masonry: {
          columnWidth: ".resizer",
        },
      });
    });
  });

  /*----------------------------------------
         SVG Inject With Vivus(After Inject) 
    ------------------------------------------*/
  SVGInject(document.querySelectorAll("img.svgInject"), {
    makeIdsUnique: true,
    afterInject: function (img, svg) {
      new Vivus(svg, {
        duration: 80,
      });
    },
  });
  /* Vivus On Hover */
  $("[data-vivus-hover]").hover(function () {
    var svg = $(this).find("svg")[0];
    new Vivus(svg, {
      duration: 50,
    });
  });

  /*-----------------------
        CounterUp JS 
    -------------------------*/
  $(".counter").counterUp({
    time: 2000,
  });

  /*--------------------------------
        Swiper Slider Activation JS 
    ----------------------------------*/

  // Home 1 Slider
  var introSlider = new Swiper(".intro-slider", {
    speed: 750,
    spaceBetween: 30,
    slidesPerView: 1,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: ".home-slider-next",
      prevEl: ".home-slider-prev",
    },
    autoplay: {
      delay: 10000,
    },
  });

  // Testimonial Slider Two
  var testimonialSlider = new Swiper(".testimonial-slider", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    centeredSlides: true,
    loop: true,
    speed: 1000,
    spaceBetween: 50,
    autoHeight: true,
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    breakpoints: {
      1499: {
        slidesPerView: 3,
      },

      991: {
        slidesPerView: 2,
      },

      767: {
        slidesPerView: 1,
      },

      575: {
        slidesPerView: 1,
      },
    },
  });

  // Brand Carousel Slider
  var brandSlider = new Swiper(".brand-carousel", {
    watchSlidesVisibility: true,
    loop: true,
    spaceBetween: 30,
    slidesPerView: 6,
    breakpoints: {
      1200: {
        slidesPerView: 6,
      },
      992: {
        slidesPerView: 5,
      },
      768: {
        slidesPerView: 5,
      },
      576: {
        slidesPerView: 4,
      },
      320: {
        slidesPerView: 2,
      },
    },
  });

  /*--
        Isotpe
    -----------------------------------*/
  var $isotopeGrid = $(".isotope-grid");
  var $isotopeFilter = $(".isotope-filter");
  $isotopeGrid.imagesLoaded(function () {
    $isotopeGrid.isotope({
      itemSelector: ".grid-item",
      masonry: {
        columnWidth: ".grid-sizer",
      },
    });
    AOS.refresh();
  });
  $isotopeFilter.on("click", "button", function () {
    var $this = $(this),
      $filterValue = $this.attr("data-filter"),
      $targetIsotop = $this.parent().data("target");
    $this.addClass("active").siblings().removeClass("active");
    $($targetIsotop).isotope({
      filter: $filterValue,
    });
  });

  /*--
        Magnific Popup
    -----------------------------------*/
  $(".video-popup").magnificPopup({
    type: "iframe",
  });

  // Background Video Active
  var sliderBG1 = new vidim(".bg-video-1", {
    src: [
      {
        type: "video/mp4",
        src: "assets/media/video/bg-video-1.mp4",
      },
    ],
    poster: "assets/media/video/cyber-security.jpg",
  });

  var sliderBG2 = new vidim(".bg-video-2", {
    src: [
      {
        type: "video/mp4",
        src: "assets/media/video/bg-video-2.mp4",
      },
    ],
    poster: "assets/media/video/cyber-security.jpg",
  });

  var sliderBG3 = new vidim(".bg-video-3", {
    src: [
      {
        type: "video/mp4",
        src: "assets/media/video/bg-video-3.mp4",
      },
    ],
    poster: "assets/media/video/cyber-security.jpg",
  });

  var sliderBG4 = new vidim(".bg-video-4", {
    src: [
      {
        type: "video/mp4",
        src: "assets/media/video/bg-video-4.mp4",
      },
    ],
    poster: "assets/media/video/cyber-security.jpg",
  });

  /*--
        Scroll Up
    -----------------------------------*/
  function scrollToTop() {
    var $scrollUp = $("#scroll-top"),
      $lastScrollTop = 0,
      $window = $(window);

    $window.on("scroll", function () {
      var st = $(this).scrollTop();
      if (st > $lastScrollTop) {
        $scrollUp.removeClass("show");
      } else {
        if ($window.scrollTop() > 200) {
          $scrollUp.addClass("show");
        } else {
          $scrollUp.removeClass("show");
        }
      }
      $lastScrollTop = st;
    });

    $scrollUp.on("click", function (evt) {
      $("html, body").animate({ scrollTop: 0 }, 600);
      evt.preventDefault();
    });
  }
  scrollToTop();

  /*-------------------------
        Ajax Contact Form 
    ---------------------------*/
  $(function () {
    // Get the form.
    var form = $("#contact-form");

    // Get the messages div.
    var formMessages = $(".form-messege");

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
      // Stop the browser from submitting the form.
      e.preventDefault();

      // Serialize the form data.
      var formData = $(form).serialize();

      // Submit the form using AJAX.
      $.ajax({
        type: "POST",
        url: $(form).attr("action"),
        data: formData,
      })
        .done(function (response) {
          // Make sure that the formMessages div has the 'success' class.
          $(formMessages).removeClass("error");
          $(formMessages).addClass("success");

          // Set the message text.
          $(formMessages).text(response);

          // Clear the form.
          $("#contact-form input,#contact-form textarea").val("");
        })
        .fail(function (data) {
          // Make sure that the formMessages div has the 'error' class.
          $(formMessages).removeClass("success");
          $(formMessages).addClass("error");

          // Set the message text.
          if (data.responseText !== "") {
            $(formMessages).text(data.responseText);
          } else {
            $(formMessages).text(
              "Oops! An error occured and your message could not be sent."
            );
          }
        });
    });
  });

  /*--
        On Load Function
    -----------------------------------*/
  $window.on("load", function () {});

  /*--
        Resize Function
    -----------------------------------*/
  $window.resize(function () {});
})(jQuery);

/*-------------------------
   Simple Social Sharing Links 
    ---------------------------*/
setShareLinks();

function socialWindow(url) {
  var left = (screen.width - 570) / 2;
  var top = (screen.height - 570) / 2;
  var params =
    "menubar=no,toolbar=no,status=no,width=570,height=570,top=" +
    top +
    ",left=" +
    left;
  // Setting 'params' to an empty string will launch
  // content in a new tab or window rather than a pop-up.
  // params = "";
  window.open(url, "NewWindow", params);
}

function setShareLinks() {
  var pageUrl = encodeURIComponent(document.URL);
  var tweet = encodeURIComponent(
    $("meta[property='og:description']").attr("content")
  );

  $(".social-share.facebook").on("click", function () {
    url = "https://www.facebook.com/sharer.php?u=" + pageUrl;
    socialWindow(url);
  });

  $(".social-share.twitter").on("click", function () {
    url = "https://twitter.com/intent/tweet?url=" + pageUrl + "&text=" + tweet;
    socialWindow(url);
  });

  $(".social-share.linkedin").on("click", function () {
    url = "https://www.linkedin.com/sharing/share-offsite/?url=" + pageUrl;
    socialWindow(url);
  });
}

/*-------------------------
        scrollTo 
    ---------------------------*/
$("#startScroll").click(function () {
  $("html,body").animate(
    {
      scrollTop: $("#scrollTo").offset().top,
    },
    "slow"
  );
});

/****************************
 *        Mouse Trail        *
 *****************************/

// dots is an array of Dot objects,
// mouse is an object used to track the X and Y position
// of the mouse, set with a mousemove event listener below
var dots = [],
  mouse = {
    x: 0,
    y: 0,
  };

// The Dot object used to scaffold the dots
var Dot = function () {
  this.x = 0;
  this.y = 0;
  this.node = (function () {
    var n = document.createElement("div");
    n.className = "trail";
    document.body.appendChild(n);
    return n;
  })();
};
// The Dot.prototype.draw() method sets the position of
// the object's <div> node
Dot.prototype.draw = function () {
  this.node.style.left = this.x + "px";
  this.node.style.top = this.y + "px";
};

// Creates the Dot objects, populates the dots array
for (var i = 0; i < 6; i++) {
  var d = new Dot();
  dots.push(d);
}

// This is the screen redraw function
function draw() {
  // Make sure the mouse position is set everytime
  // draw() is called.
  var x = mouse.x,
    y = mouse.y;

  // This loop is where all the 90s magic happens
  dots.forEach(function (dot, index, dots) {
    var nextDot = dots[index + 1] || dots[0];

    dot.x = x;
    dot.y = y;
    dot.draw();
    x += (nextDot.x - dot.x) * 0.8;
    y += (nextDot.y - dot.y) * 0.8;
  });
}

addEventListener("mousemove", function (event) {
  //event.preventDefault();
  mouse.x = event.pageX;
  mouse.y = event.pageY;
});

// animate() calls draw() then recursively calls itself
// everytime the screen repaints via requestAnimationFrame().
function animate() {
  draw();
  requestAnimationFrame(animate);
}

// And get it started by calling animate().
animate();
