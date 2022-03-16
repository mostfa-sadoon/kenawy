/*global $, alert, console*/


$(function() {

    // 'use strict';
    // //Triger Nice Scroll

    // $('html').niceScroll({
    //     cursorcolor: '#d6a545',
    //     cursorborder: "none",
    // });
    /**
     * partners Slider
     */
    AOS.init();
    window.addEventListener("load", AOS.refresh);
    // Scroll To Features

    $('.carousel .arrow i').click(function() {

        $('html, body').animate({

            scrollTop: $('.partners').offset().top

        }, 1000);
    });

    $('.hire').click(function() {

        $('html, body').animate({

            scrollTop: $('.partners').offset().top

        }, 1000);
    });

    /* Start Swiper partener slider*/

    new Swiper('.partners-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 40
            },
            480: {
                slidesPerView: 3,
                spaceBetween: 60
            },
            640: {
                slidesPerView: 4,
                spaceBetween: 80
            },
            992: {
                slidesPerView: 6,
                spaceBetween: 120
            }
        }
    });
    /* End Swiper partener slider*/

});