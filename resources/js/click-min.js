$(document).ready(function() {
    // remove class dandole click alguna opcion del modal popup
    $(".menu_home-content .menu_home-content-items ul li").on("click", function() {
        $("._header-menu").removeClass("is-active");
    });

    // active click - add payments paypal opt2 1
    $("._dggtcgcggrg ._brinfimg").on("click", function() {
        $(this).parents("._dggtcgcggrg").find("._brinfimg.active").removeClass("active");
        $(this).addClass("active");
    });

    // click - add payments paypal opt2 1
    $(".showW9").on("click", function() {
        $(this).parents().find(".substituteW9").show();
        $(this).parents().find(".substituteW8").hide();
        $(this).parents().find(".substituteW8BEN").hide();
    });

    $(".showW8").on("click", function() {
        $(this).parents().find(".substituteW8").show();
        $(this).parents().find(".substituteW9").hide();
        $(this).parents().find(".substituteW8BEN").hide();
    });

    $(".showW8BEN").on("click", function() {
        $(this).parents().find(".substituteW8BEN").show();
        $(this).parents().find(".substituteW9").hide();
        $(this).parents().find(".substituteW8").hide();
    });
});