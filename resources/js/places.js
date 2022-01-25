const $menu = $('.book-f_home');

$(document).mouseup(e => {
if (!$menu.is(e.target) && $menu.has(e.target).length === 0) {
        $menu.removeClass('is-active');
    }
});

$('.section-places .menuGuest').on('click', () => {
    $menu.toggleClass('is-active');
});

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

        if(docScrollTop > 710 ){
            document.querySelector(".section-places").classList.add("fix");
            $(".daterangepicker").addClass("fixed");
        } else {
            document.querySelector(".section-places").classList.remove("fix");
            $(".daterangepicker").removeClass("fixed");
        }
    }
};