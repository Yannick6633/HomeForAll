(function ($) {
    'use strict';

    var $window = $(window);

    // :: Preloader Active Code
    $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // Icon Search Form Active
    var searchbtnI = $(".searchbtn i");
    var searchbtn = $(".searchbtn");

    searchbtnI.addClass('fa-search');
    searchbtn.on('click', function () {
        $("body").toggleClass('search-close');
        searchbtnI.toggleClass('fa-times');
    });

    // // :: More Filter Active Code
    $("#moreFilter").on('click', function () {
        $(".search-form-second-steps").slideToggle('1000');

        if ($(".more-filter a").hasClass("opened")) {
            $(".more-filter a").removeClass("opened");
            $(".more-filter a").text('Plus de critère');
        } else {
            $(".more-filter a").addClass("opened");
            $(".more-filter a").text('Moins de critère');
        }
    });

    // :: Nav Active Code
    if ($.fn.classyNav) {
        $('#southNav').classyNav({
            theme: 'dark'
        });
    }

    // :: Sticky Active Code
    if ($.fn.sticky) {
        $("#stickyHeader").sticky({
            topSpacing: 0
        });
    }

    // :: Tooltip Active Code
    if ($.fn.tooltip) {
        $('[data-toggle="tooltip"]').tooltip()
    }

    // :: Nice Select Active Code
    if ($.fn.niceSelect) {
        $('select').niceSelect();
    }

    // :: Owl Carousel Active Code
    if ($.fn.owlCarousel) {

        var welcomeSlide = $('.hero-slides');

        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        welcomeSlide.on('translate.owl.carousel', function () {
            var slideLayer = $("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', function () {
            var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        // Dots Showing Number
        var dot = $('.hero-slides .owl-dot');

        dot.each(function () {
            var dotnumber = $(this).index() + 1;
            if (dotnumber <= 9) {
                $(this).html('0').append(dotnumber);
            } else {
                $(this).html(dotnumber);
            }
        });



        $('.testimonials-slides-one').owlCarousel({
            items: 1,
            margin: 50,
            loop: true,
            center: true,
            nav: true,
            navText: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
        });


        $('.featured-properties-slides, .single-listings-sliders').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000,
            nav: true,
            navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>']
        });
    }

    // :: CounterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: ScrollUp Active Code
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1000,
            easingType: 'easeInOutQuart',
            scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
        });
    }

    // :: PreventDefault a Click
    $("a[href='#']").on('click', function ($) {
        $.preventDefault();
    });

    // :: wow Active Code
    if ($window.width() > 767) {
        new WOW().init();
    }

    // :: Slider Range
    $('.slider-range-price').each(function () {
        var min = jQuery(this).data('min');
        var max = jQuery(this).data('max');
        var unit = jQuery(this).data('unit');
        var value_min = jQuery(this).data('value-min');
        var value_max = jQuery(this).data('value-max');
        var t = $(this);
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [value_min, value_max],
            slide: function (event, ui) {
                var result = ui.values[0] + unit + ' - ' + ui.values[1] + unit;
                t.closest('.slider-range').find('.range').html(result);
            }
        });
    })

})(jQuery);