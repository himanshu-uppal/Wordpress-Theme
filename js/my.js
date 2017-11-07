jQuery(document).ready(function($){
    jQuery('.slick-slider-container').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        dots: false,
        infinite: true,
        speed: 250,

        slide: 'div',
        cssEase: 'linear',
        prevArrow:'<div class="slick-prev-button"><i class="fa  fa-chevron-circle-left fa-2x" style="color:#fff"></i></div>',
        nextArrow:'<div class="slick-next-button"><i class="fa  fa-chevron-circle-right fa-2x" style="color:#fff"></i></div>'

    });

    jQuery("#search-icon").click(function(){
        jQuery(".search-field").toggle();
    });

    jQuery('.post-gallery-image').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots:false,
        infinite: true,
        speed: 300,

        slide: 'div',
        cssEase: 'linear',
        prevArrow:'<div class="slick-prev-button"><i class="fa  fa-chevron-circle-left fa-2x" style="color:#fff"></i></div>',
        nextArrow:'<div class="slick-next-button"><i class="fa  fa-chevron-circle-right fa-2x" style="color:#fff"></i></div>'

    });

    jQuery('.popular-post-sidebar-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        dots:false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 300,
        // fade: true,
        slide: 'div',
        cssEase: 'linear',
        prevArrow:'<div class="slick-prev-button"><i class="fa  fa-chevron-circle-left fa-2x" style="color:#fff"></i></div>',
        nextArrow:'<div class="slick-next-button"><i class="fa  fa-chevron-circle-right fa-2x" style="color:#fff"></i></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode:true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]

    });

    jQuery('.related-posts').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        speed: 300,
        slide: 'div',
        cssEase: 'linear',
        prevArrow:'<div class="slick-prev-button"><i class="fa  fa-chevron-circle-left fa-2x" style="color:#fff"></i></div>',
        nextArrow:'<div class="slick-next-button"><i class="fa  fa-chevron-circle-right fa-2x" style="color:#fff"></i></div>',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 960,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1

                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode:true

                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]


    });

    jQuery('.slider-container').css('visibility', 'visible');
    jQuery('.popular-post-widget').css('visibility', 'visible');
    jQuery('.related-posts').css('visibility', 'visible');
    jQuery('.post-gallery-image').css('visibility', 'visible');




    jQuery('#site-navigation #primary-menu ').slicknav();


});



