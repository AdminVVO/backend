$(document).ready(function () {
    // animate modal top
    function animateMdls() {
        $("html, body").animate({
            scrollTop: $("body").offset().top
        }, 0);

        $(".page-category").css({ 'overflow': 'hidden' });
    }

    // calendar - click en < info
    $(document).on("click", ".click_info_calendar_tb", function () {
        $(this).parents(".tbody-list-doller").find(".right_bk_show").addClass("active-info");
        $(".js__reserContInfoCalendar").removeClass("dn");
        $(".js__dollerContInfoCalendar").addClass("dn");
    });

    $(document).on("click", ".click_icon_calendar_tb", function () {
        $(this).parents(".tbody-list-doller").find(".right_bk_show").removeClass("active-info");
    });

    $(document).on("click", ".click__doller_info_calendar_tb", function() {
        $(this).parents(".tbody-list-doller").find(".right_bk_show").addClass("active-info");
        $(".js__reserContInfoCalendar").addClass("dn");
        $(".js__dollerContInfoCalendar").removeClass("dn");
    });

    $(".click-list-calendar, .click_behind_calendar").on("click", function () {
        $(this).parents(".section_calendar_admin").toggleClass("is-calendar-open");
    });

    // calendar individual - click a cada bloque button border
    $("._tb-reservations ._17oofu3").on("click", function () {
        $(this).parents(".section_calendar_indv_admin").addClass("is-main-info-open");
        $(".showInfoSlectDays").removeClass("dn");
        $(".hideInfoSlectDays").addClass("dn");
        $(this).parents().find("._tb-reservations").find("._19r7tqhd").removeClass("_19r7tqhd").addClass("_17oofu3");
        $(this).removeClass("_17oofu3").addClass("_19r7tqhd");
    });

    $(".click-hide-inf-indv").on("click", function () {
        $(this).parents(".section_calendar_indv_admin").removeClass("is-main-info-open");
        $(".showInfoSlectDays").addClass("dn");
        $(".hideInfoSlectDays").removeClass("dn")
        $(this).parents().find("._tb-reservations").find("._19r7tqhd").removeClass("_19r7tqhd").addClass("_17oofu3");
    });

    // calendar individual - click en Add custom settings
    $(".click-modals-show").on("click", function () {
        animateMdls();
        $(".container_ci_nw_cs").css({ 'display': 'block' });
    });

    // calendar individual - click en private note add >
    $(document).on("click", ".click_add_private_note_cl", function() {
        animateMdls();
        $(".container_popup_ntpve").css({ 'display': 'block' });
    });
});

// junior
$(document).ready(moreCalendarAnuncios);
function moreCalendarAnuncios() {
    var obj = $(this).find(".view-jq-ancho");
    $.each(obj, function(index) {
        let btns = $(this).parents().find(".view-jq-ancho").eq(index).find("button").length;

        if (btns >= 2) {
            $(this).parents().find(".view-jq-ancho").eq(index).find("button").css({ 'padding': '8px' }).find("span").css({ 'font-size': '12px' });
        }
    });

    // -- height --
    var objHeight = $(this).find(".teusdpg").find("tr");
    $.each(objHeight, function(value, element) {
        let valor = $(this).parents().find(".teusdpg").find("tr").eq(value).val();
        let altura = $(element).eq(valor).height();

        $(this).parents().find(".telgcal").find("tr .check_click").eq(value).height(altura);
        // console.log(value + " : " + altura);
    });
}

// calendar.php scroll
$(document).ready(scrollCalendarTable);
function scrollCalendarTable() {
    // calendar scroll
    $(function () {
        let head = $("#calendar-options-nav .calendar_scroll");
        let opt = $("#calendar-options-column .calendar_scroll");
        let cont = $("#calendar-options-contents .calendar_scroll");
        var headTimeout, optTimeout, contTimeout;

        head.on("scroll", function() {
            if (contTimeout) {
                return;
            };

            if (headTimeout) {
                clearTimeout(headTimeout);
            };

            headTimeout = setTimeout(function () {
                if (headTimeout) {
                    clearTimeout(headTimeout);
                    headTimeout = null;
                }
            }, 50);
            cont.scrollLeft($(this).scrollLeft());
        });

        opt.on("scroll", function() {
            if (contTimeout) {
                return;
            };

            if (optTimeout) {
                clearTimeout(optTimeout);
            };

            optTimeout = setTimeout(function () {
                if (optTimeout) {
                    clearTimeout(optTimeout);
                    optTimeout = null;
                }
            }, 50);
            cont.scrollTop($(this).scrollTop());
        });

        cont.on("scroll", function() {
            if (optTimeout || headTimeout) {
                return;
            };

            if (contTimeout) {
                clearTimeout(contTimeout);
            };

            contTimeout = setTimeout(function () {
                if (contTimeout) {
                    clearTimeout(contTimeout);
                    contTimeout = null;
                }
            }, 50);
            head.scrollLeft($(this).scrollLeft());
            opt.scrollTop($(this).scrollTop());
        });
    });
}

// click function active etc
$(document).ready(function () {
    $(".telgcal tr").on("click", function () {
        var index_list = $(this).index();

        // $(this).siblings("tr.active").removeClass("active");
        // $(this).addClass("active");

        $(this).parents().find(".telgcal").parents().find(".teusdpg").find("tr.active_br_blue_table").removeClass("active_br_blue_table");
        $(this).parents().find(".telgcal").parents().find(".teusdpg").find("tr").eq(index_list).addClass("active_br_blue_table");
    });

    $(".tehdbtn th").on("click", function () {
        $(this).siblings("th.active_blue_tb").removeClass("active_blue_tb");
        $(this).addClass("active_blue_tb");
    })
});