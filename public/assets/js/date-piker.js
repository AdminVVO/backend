$(document).ready(iniciar);

function iniciar() {
    $('.date-v-modals').datepicker({
        dateFormat: "dd/mm/yy",
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

$('.date-v-modals').on('input', function (evt) { 
    let v = this.value,
        l = v.length,
        d,
        b;
    if (
        l === 1 && /^[0-3]/.test(v) || // D
        l === 2 && /^0[1-9]|[12]\d|3[01]$/.test(v) || // DD
        l === 3 && /^\/$/.test(v[2]) || // DD/
        l === 4 && /^[0-1]$/.test(v[3]) || // DD/M
        l === 5 && /^0[1-9]|1[0-2]$/.test(v[3]+''+v[4]) || // DD/MM
        l === 6 && /^\/$/.test(v[5]) || // DD/MM/
        l === 7 && /^[12]$/.test(v[6]) || // DD/MM/Y
        l === 8 && /^\d$/.test(v[7]) || // DD/MM/YY
        l === 9 && /^\d$/.test(v[8]) || // DD/MM/YYY
        l === 10 && /^\d$/.test(v[9]) // DD/MM/YYYY
    ) {
    
        // Control fecha valida
        d = v.split(/\//);
        if (l === 10) {
            b = (new Date(d[2], d[1] - 1, d[0])).toISOString().substr(0,10).split('-')
        }
        
        // Meses con 3* dias
        if (l === 5 && v[0] === '3' &&
            (d[1] === '02' ||
            (v[1] === '1' && ['04','06','09','11'].indexOf(d[1]) !== -1)
        )) {
            //Error, el mes no tiene 3* dias
        }
        // Año bisiesto
        else if (l === 10 && d[0] === '29' && d[1] === '02' && b[2] != d[0]) {
            //Error, el año no es bisiesto, febrero no puede tener 29 dias
        } else {
            return;
        }
    }

    this.value = v.substr(0, l - 1);
});