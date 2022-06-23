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

    // interna - confirm and pay, click paypal
    $("._glepay").on("click", function() {
        $("._showgplay").show();
        $("._hiddencreditordebit").hide();
        $("._showpaypal").hide();
    });

    $("._creditcard").on("click", function() {
        $("._hiddencreditordebit").show();
        $("._showgplay").hide();
        $("._showpaypal").hide();
    });

    $("._paypal").on("click", function() {
        $("._showpaypal").show();
        $("._hiddencreditordebit").hide();
        $("._showgplay").hide();
    });
});