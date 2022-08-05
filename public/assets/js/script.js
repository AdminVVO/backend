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

$("._header-menu .menu__text-link").on("click", function() {
    $menuBars.removeClass("is-active");
});

$('._menu-bars').on('click', () => {
    $menuBars.toggleClass('is-active');
});

$(".menu_items").on("click", function() {
    $menuBars.removeClass("is-active");
});


// TABLA OPTIONS ...
const $puntos = $('._menu-options');
const $puntosHeader = $('._puntos3');
const $puntos_pastguest = $('._menu-options_pastguest');
const $bef_places = $('.content_show_modal_left');
const $ps_abs_modal_icon_msg = $('.content_icons_type_msg');
const $btnSltContent = $(".btnSltContent");
const $btnSltNrl = $(".btnSltNrl");

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

// messages.php - icon msg
$(document).mouseup(e => {
    if (!$ps_abs_modal_icon_msg.is(e.target) && $ps_abs_modal_icon_msg.has(e.target).length === 0) {
        // $(".section_messages_user").find(".medio_msg_user").find($ps_abs_modal_icon_msg).removeClass('active-icon-msg');
        $ps_abs_modal_icon_msg.removeClass('active-icon-msg');
    }
});

// admin-reservation-completed.php
$(document).mouseup(e => {
    if (!$puntos_pastguest.is(e.target) && $puntos_pastguest.has(e.target).length === 0) {
        $puntos_pastguest.removeClass('is-active');
    }
});

// wishlist-interno.php - click select btn
$(document).mouseup(e => {
    if (!$btnSltContent.is(e.target) && $btnSltContent.has(e.target).length === 0) {
        $btnSltContent.removeClass("active");
    }
});

// listing.php - click select btn
$(document).mouseup(e => {
    if (!$btnSltNrl.is(e.target) && $btnSltNrl.has(e.target).length === 0) {
        $btnSltNrl.removeClass("active");
    }
});


// HEADER MENU CLICK
$("._menu_options").on("click", function() {
    // $("._puntos3.is-active").removeClass("is-active");
    $(this).parent("._puntos3").toggleClass("is-active");
})





$(".container_admin-host .click_afuera_modal").click(function() {
    $(this).parents($bef_places).removeClass("is-active");
});

$(".modal_content-anhost .click_x_modal").click(function() {
    $(this).parents($bef_places).removeClass("is-active");
});

$(".click_guest").on("click", function() {
    let toggleClass = $(this).parent($bef_places).hasClass('is-active') ? true : false;
    $($bef_places).removeClass("is-active");

    if (!toggleClass) {
        $(this).parent($bef_places).toggleClass("is-active");
    }
});

$(".click_icon_msg").on("click", function() {
    // $ps_abs_modal_icon_msg.toggleClass('active-icon-msg');
    let toggleClass = $(this).parent($ps_abs_modal_icon_msg).hasClass('active-icon-msg') ? true : false;
    $ps_abs_modal_icon_msg.removeClass("active-icon-msg");

    if (!toggleClass) {
        $(this).parent($ps_abs_modal_icon_msg).toggleClass("active-icon-msg");
    }
});

// wishlist-interno.php - click select btn
$(".clickSelectBtn").on("click", function() {
    let toggleClass = $(this).parent($btnSltContent).hasClass("active") ? true : false;
    $btnSltContent.removeClass("active");

    if (!toggleClass) {
        $(this).parent($btnSltContent).toggleClass("active");
    }
});

$(".xhidemdusr").on("click", function() {
    $btnSltContent.removeClass("active");
});

// listing.php - click select btn
$(".js_submenuNrml, .js_closeSubmenuGuestInterna").on("click", function() {
    let toggleClass = $(this).parent($btnSltNrl).hasClass("active") ? true : false;
    $btnSltNrl.removeClass("active");

    if (!toggleClass) {
        $(this).parent($btnSltNrl).toggleClass("active");
    }
});

// $(window).resize(function() {
//     if ($(window).width() < 758) {
//     }
//    else {
//    }
// });