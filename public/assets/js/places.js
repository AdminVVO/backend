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