$(".book-f_header .menuGuest").addClass("menuGuestHeader");
$(".book-f_header .menuGuest").removeClass("menuGuest");

const $menuGuestHeader = $('.book-f_header');

$(document).mouseup(e => {
if (!$menuGuestHeader.is(e.target) && $menuGuestHeader.has(e.target).length === 0) {
        $menuGuestHeader.removeClass('is-active');
    }
});

$('.menuGuestHeader').on('click', () => {
    $menuGuestHeader.toggleClass('is-active');
});

// HEADER FIX
window.onscroll = function() {
    const docScrollTop = document.documentElement.scrollTop;
    
    if (window.innerWidth > 768) {
        if(docScrollTop > 100) {
            document.querySelector("header").classList.add("fixed");
        } else {
            document.querySelector("header").classList.remove("fixed");
        }
    }
};



$(document).ready(function() { 
    $(".daterangepicker").removeClass("fixed");
    
    $(window).scroll(function() {
        if ($(this).width() > 1450) {
            if ($(this).scrollTop() > 710 ){
                $(".daterangepicker").addClass("fixed");
                $(".book-form").appendTo("._location-he header ._mv-places");
                $("._mv-places").css({'opacity': '1', 'visibility': 'visible'});
            } else {
                $(".daterangepicker").removeClass("fixed");
                $(".book-form").appendTo(".section-places .block_places");
                $("._mv-places").css({'opacity': '0', 'visibility': 'hidden'});
            }
        }
    });

    // CSS - max-width: 1505px;
    $(window).bind("resize", function () {
        if ($(this).width() < 1450) {
            $(".book-form").appendTo(".section-places .block_places");
            $('.daterangepicker').removeClass('fixed');
        }
    })
});

$("._location-he header ._mv-places ._remove").remove();