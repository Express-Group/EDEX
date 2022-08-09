;
(function($) {
    "use strict";

    var navbar = $('.header');
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

    navbar.affix({
        offset: {
            top: 1,
        }
    });


    navbar.on('affix.bs.affix', function() {
        if (!navbar.hasClass('affix')) {
            navbar.addClass('animated slideInDown');
        }
    });

    navbar.on('affixed-top.bs.affix', function() {
        navbar.removeClass('animated slideInDown');

    });



    $('.header .nav.navbar-nav li a').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 70
        }, 1500);
        event.preventDefault();
    });
    /*----------------------------
       Start team-slider js
    ------------------------------ */
    /*========== team-slider js ==========*/
    var team_Slider = $(".team-slider");

    function teamSlider() {
        if (team_Slider.length) {
            team_Slider.owlCarousel({
                loop: true,
                margin: 30,
                items: 3,
                dots: true,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    992: {
                        items: 3,
                    }
                }
            });
        }
    }
    teamSlider();
    /*----------------------------
       End team-slider js
    ------------------------------ */

    /*----------------------------
       Start clients-lg-slider js
    ------------------------------ */
    /*========== team-slider js ==========*/
    var logo_Slider = $(".clients-lg-slider");

    function logoSlider() {
        if (logo_Slider.length) {
            logo_Slider.owlCarousel({
                loop: true,
                margin: 0,
                items: 6,
                dots: true,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                nav: true,
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                smartSpeed: 1500,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    380: {
                        items: 3
                    },
                    600: {
                        items: 4
                    },
                    992: {
                        items: 6,
                    }
                }
            });
        }
    }
    logoSlider();
    /*----------------------------
       End clients-lg-slider js
    ------------------------------ */

    /*----------------------------
       Start testimonial_Slider js
    ------------------------------ */
    /*========== team-slider js ==========*/
    var testimonial_Slider = $(".testimonial-slider");

    function testSlider() {
        if (testimonial_Slider.length) {
            testimonial_Slider.owlCarousel({
                loop: true,
                margin: 30,
                items: 1,
                dots: true,
                autoplay: true,
                mouseDrag: true,
                touchDrag: true,
                nav: false,
                smartSpeed: 1500,
            });
        }
    }
    testSlider();
    /*----------------------------
       End testimonial_Slider js
    ------------------------------ */

    /*----------------------------
       Start counter js
    ------------------------------ */
    function counterActivator() {
        if ($('.counter').length) {
            $('.counter').counterUp({
                delay: 70,
                time: 1000
            })
        }
    }
    counterActivator();
    /*----------------------------
       End counter js
    ------------------------------ */

    /*============ typed js ==========*/
    document.addEventListener('DOMContentLoaded', function() {

        Typed.new("#typed", {
            stringsElement: document.getElementById('typed-strings'),
            typeSpeed: 80,
            startDelay: 1000,
            backDelay: 1000,
            loop: true,
            contentType: 'html', // or text
        });

    });

    function PorGallery() {
        if ($('.port-gallery').length) {
            $('#por-gallery').imagesLoaded(function() {
                // images have loaded
                // Activate isotope in container
                $("#por-gallery").isotope({
                    itemSelector: ".por-item",
                    layoutMode: 'masonry',
                });

                // Add isotope click function
                $(".work_filter li").on('click', function() {
                    $(".work_filter li").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    $("#por-gallery").isotope({
                        filter: selector
                    })
                })
            })
        }
    }
    PorGallery();



    /*------ main slider js -------*/
    function revsliderOne() {
        if ($('#slider').length) {
            $("#slider").revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",

                dottedOverlay: "none",
                delay: 8000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "off",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        style: "bullet-bar",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 50,
                        space: 15,
                        tmp: ''
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "pause",
                    visible_area: "100%",
                    presize: false
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [570, 550, 550, 350],
                lazyType: "none",
                spinner: "spinner3",
                stopLoop: "off",
                shuffle: "off",
                autoHeight: "off",
                fullScreenAutoWidth: "off",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "0px",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }
    revsliderOne();

    /*---------parallax js-----------*/
    function parallaxActivitor() {
        if ($(window).width() > 768) {
            $(".skill-area").parallax("50%", .5);
            $('.testimonial-area').parallax("50%", 0.2);
        }
    }
    parallaxActivitor();

    /*======== nav_searchFrom  ========*/
    function searchFrom() {
        if ($(".search_dropdown").length) {
            $(".search_dropdown").on("click", function() {
                $(".searchForm").toggleClass('show');
                return false
            });
            $(".form_hide").on("click", function() {
                $(".searchForm").removeClass('show')
            });
        };
    };
    searchFrom();
    /*========End nav_searchFrom  ========*/

    /*=========animation js =========*/
    function bodyScrollAnimation() {
        var scrollAnimate = $('body').data('scroll-animation');
        if ($(window).width() > 768) {
            new WOW({
                animateClass: 'animated', // animation css class (default is animated)
                offset: 100, // distance to the element when triggering the animation (default is 0)
                mobile: false,
                duration: 1000,
            }).init()
        }
    }
    bodyScrollAnimation();

    // preloader js
    $(window).on('load', function() { // makes sure the whole site is loaded
        $('.loading').fadeOut(); // will first fade out the loading animation
        $('.sampleContainer').delay(150).fadeOut('slow'); // will fade out the white DIV that covers the website.
        $('body').delay(150).css({ 'overflow': 'visible' })
    })
})(jQuery)