$(document).ready(iniciar);

function iniciar() {
    $('.date-v-modals').datepicker({
        dateFormat: "yy/mm/dd",
        autoclose: true,
        todayHighlight: true,
        selectOtherMonths: true,
        changeYear: true,
        yearRange: '-100:+0',
        autoclose: true,
        // minDate: 0, // Desactivar los dias pasados
        orientation: "button"
    });
}
