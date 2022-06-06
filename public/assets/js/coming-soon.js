$(document).ready(function() {
    // click y cambia color estilos el input
    $(document).on("focus click", ".ipt__brent input", function() {
        $(this).parents(".ipt__brent").removeClass("ipt__brent").addClass("ipt__brfocus");
    }).on("blur", ".ipt__brfocus input", function() {
        $(this).parents(".ipt__brfocus").removeClass("ipt__brfocus").addClass("ipt__brent");
    });
});0