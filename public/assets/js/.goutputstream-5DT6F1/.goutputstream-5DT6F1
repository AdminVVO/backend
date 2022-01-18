const $menu = $('.block_places');

$(document).mouseup(e => {
if (!$menu.is(e.target) && $menu.has(e.target).length === 0) {
        $menu.removeClass('is-active');
    }
});

$('.menuGuest').on('click', () => {
    $menu.toggleClass('is-active');
});