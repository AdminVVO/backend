// HEADER FIXED
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
const $menu = $('.book-f_home');

$(document).mouseup(e => {
if (!$menu.is(e.target) && $menu.has(e.target).length === 0) {
        $menu.removeClass('is-active');
    }
});

$('.menuGuest').on('click', () => {
    $menu.toggleClass('is-active');
});

// Mostrar el header check in - check out
// $(document).ready(function() {  

//     var clone = $(".book-f_header form").clone(); 

//     $(window).scroll(function() {
//         if($(this).scrollTop() > 760 ){
//             clone.appendTo(".book-f_header");
//         } else {
//             $(".book-f_header form").remove();
//         }
//     });
//     $(".book-f_header form").remove();
// });


const $menuBars = $('._header-menu');

$(document).mouseup(e => {
if (!$menuBars.is(e.target) && $menuBars.has(e.target).length === 0) {
        $menuBars.removeClass('is-active');
    }
});

$('._menu-bars').on('click', () => {
    $menuBars.toggleClass('is-active');
});