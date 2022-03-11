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


// TABLA OPTIONS ...
const $puntos = $('._menu-options');
const $puntosHeader = $('._puntos3');
const $puntos_pastguest = $('._menu-options_pastguest');
const $bef_places = $('.content_show_modal_left');

// admin-reservations.php
$(document).mouseup(e => {
    if (!$puntos.is(e.target) && $puntos.has(e.target).length === 0) {
        $puntos.removeClass('is-active');
    }
});

$(document).mouseup(e => {
    if (!$puntosHeader.is(e.target) && $puntosHeader.has(e.target).length === 0) {
        $puntosHeader.removeClass('is-active');
    }
});

$(document).mouseup(e => {
    if (!$bef_places.is(e.target) && $bef_places.has(e.target).length === 0) {
        $bef_places.removeClass('is-active');
    }
});

// admin-reservation-completed.php
$(document).mouseup(e => {
    if (!$puntos_pastguest.is(e.target) && $puntos_pastguest.has(e.target).length === 0) {
        $puntos_pastguest.removeClass('is-active');
    }
});

// HEADER MENU CLICK
$("._menu_options").on("click", function() {
    // $("._puntos3.is-active").removeClass("is-active");
    $(this).parent("._puntos3").toggleClass("is-active");
})






$(".click_guest").on("click", function() {
    let toggleClass = $(this).parent($bef_places).hasClass('is-active') ? true : false;
    $($bef_places).removeClass("is-active");

    if(!toggleClass) {
        $(this).parent($bef_places).toggleClass("is-active");
    }
});