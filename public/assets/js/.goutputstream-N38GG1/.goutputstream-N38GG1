// HEADER FIXED
window.onscroll = function() {
    const docScrollTop = document.documentElement.scrollTop;
    
    if (window.innerWidth > 768) {
        if(docScrollTop > 100) {
            document.querySelector("header").classList.add("fixed");
        }
        else {
            document.querySelector("header").classList.remove("fixed");
        }
    }
};

const $menuBars = $('._header-menu');

$(document).mouseup(e => {
if (!$menuBars.is(e.target) && $menuBars.has(e.target).length === 0) {
        $menuBars.removeClass('is-active');
    }
});

$('._menu-bars').on('click', () => {
    $menuBars.toggleClass('is-active');
});