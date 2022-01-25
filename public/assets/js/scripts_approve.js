function clickEvent(first, last) {
    if (first.value.length) {
        document.getElementById(last).focus();
    }
}

function solonumeros(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numeros = "0123456789";
    especiales = "8-37-38-46";
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

$(document).ready(function() {
    $('.nav-leng ul li .btn-a').click(function(){
       $('.btn-a').removeClass("activ");
       $(this).addClass("activ");
    });

    $('.currency-click').click(function() {
        $('.content_hidden_currency').css({'display': 'block'});
        $('._lgcth').css({'display': 'none'});
    })

    $('.leng-click').click(function() {
        $('.content_hidden_currency').css({'display': 'none'});
        $('._lgcth').css({'display': 'block'});
    })

    $('.content_leng-choose .flex_content .btn_leng').click(function(){
       $('.btn_leng').removeClass("active");
       $(this).addClass("active");
    });

    $('.content_hidden_currency .flex_content .btn_choose').click(function(){
       $('.btn_choose').removeClass("active");
       $(this).addClass("active");
    });
});
