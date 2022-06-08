$(document).ready(function() {
    $(".carousel_bedroom").owlCarousel({
        nav: true,
        dots: false,
        margin: 25,
        mouseDrag: true,
        autoWidth: true
    });

    var sliderNavLink = $(".carousel_btn_nav");
    sliderNavLink.owlCarousel({
        nav: true,
        dots: false,
        mouseDrag: true,
        autoWidth: true,
        navText: [
            '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path></g></svg>',
            '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path></g></svg>'
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