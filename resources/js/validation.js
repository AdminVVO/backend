function clickEvent(first, last) {
    if (first.value.length) {
        document.getElementById(last).focus();
    }
}

// VALIDACION NUMBER INPUTS MODALS
let telNumberModal = document.querySelector('.phone-v-modals');
telNumberModal.addEventListener('keypress', (event) => {
    event.preventDefault();
    let codigoKey = event.keyCode;
    let valorKey = String.fromCharCode(codigoKey);
    // console.log(valorKey);

    let valor = parseInt(valorKey);
    // console.log(valor);

    if(valor) {
        telNumberModal.value += valor;
    }

    telNumberModal.classList.remove('error_input');
})

// let errorCodeModal = document.querySelectorAll('._input-box-number');
// // let box_enter = document.querySelector('.box_enter');
// errorCodeModal.forEach((e) => {
//     e.addEventListener('keypress', (event) => {
//         event.preventDefault();
//         let codigoKey = event.keyCode;
//         let valorKey = String.fromCharCode(codigoKey);
    
//         let valor = parseInt(valorKey);
    
//         if(valor) {
//             e.value += valor;
//             e.maxLength = 1;
//         }
//     })
// })

function solonumeros(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numeros = "0123456789";
    especiales = "8-37-38-46"; // array
    teclado_especial = false;

    for(let i in especiales) {
        if(key == especiales[i]) {
            $(".box_enter").removeClass("error_code");
            teclado_especial = true;
        }
    }

    if(numeros.indexOf(teclado) == -1 && !teclado_especial) {
        $(".box_enter").removeClass("error_code");
        return false;
    }

    $(".box_enter").removeClass("error_code");
}

let dateInputModal = document.querySelector('.date-v-modals');
dateInputModal.addEventListener('keypress', () => {
    dateInputModal.classList.remove('error_input');
})



// VALIDACION EMAILS JQUERY
$(document).ready(function() {
    let container_T_Register = $(".container-t-registro .email-modals");
    let container_W_E = $(".container-welcome-email .email-modals");

    container_T_Register.keyup(function(){
        if(validateEmailT()){
            container_T_Register.removeClass('error_input');
        } else{
            container_T_Register.addClass('error_input');
        }

        if(container_T_Register.val() == "") {
            container_T_Register.removeClass('error_input');
        }
    });

    container_W_E.keyup(function(){
        if(validateEmailW()){
            container_W_E.removeClass('error_input');
        } else{
            container_W_E.addClass('error_input');
        }

        if(container_W_E.val() == "") {
            container_W_E.removeClass('error_input');
        }
    });
});

function validateEmailT(){
    let email_t_r = $(".container-t-registro .email-modals").val();

    let pattern = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/

    if(pattern.test(email_t_r)) {
         return true;
    } else {
         return false;
    }
}

function validateEmailW(){
    let email_w_e = $(".container-welcome-email .email-modals").val();

    let pattern = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/

    if(pattern.test(email_w_e)) {
         return true;
    } else {
         return false;
    }
}



