$(document).ready(function() {
    // internal.php
    $(".carousel_bedroom").owlCarousel({
        nav: true,
        dots: false,
        margin: 25,
        mouseDrag: true,
        autoWidth: true
    });

    // lenguage
    $(".leng_btn_nav").owlCarousel({
        nav: true,
        dots: false,
        mouseDrag: true,
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
        mouseDrag: true,
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
        mouseDrag: true,
        autoWidth: true,
        navText: [
            '<i class="fas fa-angle-left"></i>',
            '<i class="fas fa-angle-right"></i>'
        ],
        navContainer: ".vvo_owl_nav"
    });
    
    // $(".js__nextbtn-nav").on("click", function() {
    //     sliderNavLink.trigger("next.owl.carousel");
    // });

    // $(".js__prevbtn-nav").on("click", function() {
    //     sliderNavLink.trigger("prev.owl.carousel");
    // });
});