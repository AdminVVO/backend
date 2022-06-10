$(document).ready(function() {
    // internal.php
    $(".carousel_bedroom").owlCarousel({
        nav: true,
        dots: false,
        margin: 25,
        // mouseDrag: true,
        autoWidth: true
    });

    // lenguage
    $(".leng_btn_nav").owlCarousel({
        nav: true,
        dots: false,
        // mouseDrag: true,
        autoWidth: true,
        navText: [
            '<i class="fas fa-angle-left"></i>',
            '<i class="fas fa-angle-right"></i>'
        ],
        navContainer: ".vvo_owl_navleng"
    });

    // interna.php
    $(".playwith_btn_nav").owlCarousel({
        nav: true,
        dots: false,
        // mouseDrag: true,
        autoWidth: true,
        navText: [
            '<i class="fas fa-angle-left"></i>',
            '<i class="fas fa-angle-right"></i>'
        ],
        navContainer: ".vvo_owl_navplaywith"
    });

    // home.php
    var sliderNavLink = $(".carousel_btn_nav");
    sliderNavLink.owlCarousel({
        nav: true,
        dots: false,
        // mouseDrag: true,
        autoWidth: true,
        navText: [
            '<i class="fas fa-angle-left"></i>',
            '<i class="fas fa-angle-right"></i>'
        ],
        navContainer: ".vvo_owl_nav"
    });

    // search.php
    $(".vvo_carousel_search").owlCarousel({
        loop: false,
        nav: true,
        rewind: true,
        // mouseDrag: false,
        autoWidth: false,
        responsive: {
            0: {
                margin: 25,
                items: 1
            },

            610: {
                margin: 25,
                items: 2
            },

            970: {
                margin: 25,
                items: 3
            },

            1200: {
                margin: 25,
                items: 4
            },

            1550: {
                margin: 35,
                items: 5
            },

            1900: {
                margin: 35,
                items: 6
            },

            2230: {
                margin: 35,
                items: 7
            }
        }
    });
    
    // $(".js__nextbtn-nav").on("click", function() {
    //     sliderNavLink.trigger("next.owl.carousel");
    // });

    // $(".js__prevbtn-nav").on("click", function() {
    //     sliderNavLink.trigger("prev.owl.carousel");
    // });
});