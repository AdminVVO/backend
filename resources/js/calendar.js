$(document).ready(function() {
    // animate modal top
    function animateMdls() {
        $("html, body").animate({
            scrollTop: $("body").offset().top
        }, 0);

        $(".page-category").css({'overflow': 'hidden'});
    }

    // calendar - click en < info
    $(".click_info_calendar_tb").on("click", function() {
        $(this).parents(".tbody-list-doller").find(".right_bk_show").toggleClass("active-info");
    });

    $(".click-list-calendar, .click_behind_calendar").on("click", function() {
        $(this).parents(".section_calendar_admin").toggleClass("is-calendar-open");
    });

    // calendar individual - click a cada bloque button border
    $("._tb-reservations ._17oofu3").on("click", function() {
        $(this).parents("._tb-reservations").find("._19r7tqhd").removeClass("_19r7tqhd").addClass("_17oofu3");
        $(this).removeClass("_17oofu3").addClass("_19r7tqhd");
    });

    $("._tb-reservations ._17oofu3, .click-hide-inf-indv").on("click", function() {
        $(this).parents(".section_calendar_indv_admin").toggleClass("is-main-info-open");
    });

    // calendar individual - click en Add custom settings
    $(".click-modals-show").on("click", function(){
        animateMdls();
        $(".container_ci_nw_cs").css({'display': 'block'});
    });

    // calendar individual - click en private note add >
    $(".click_add_private_note_cl").on("click", function(){
        animateMdls();
        $(".container_popup_ntpve").css({'display': 'block'});
    });
});