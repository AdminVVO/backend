$(document).ready(function() {
    // escribir el input y aparesca el signo / para fechas
    $(".date-v-modals").mask("9999/99/99");

    $(".mask__cardnumber").mask("0000 0000 0000 0000 0000");
    $(".mask__mmyy").mask("00 / 00");
});