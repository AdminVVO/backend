$(document).ready(function() {
    // messages - type a message debera valida texto
    $(".w-input-textarea-msg").keyup(function() {
        if ($(this).val().trim() === "") {
            $(this).parents(".input-type-msg").find(".click_envio_chat").prop('disabled', true);
        } else {
            $(this).parents(".input-type-msg").find(".click_envio_chat").prop('disabled', false);
        }
        
        // var value = $(this).val().length;

        // if (value > 0) {
        //     // $(this).parents(".input-type-msg").find(".click_envio_chat").prop('disabled', false);
        //     $(this).parents(".input-type-msg").find(".click_envio_chat i").removeClass("_i-celest24").addClass("_i-gris24");
        // } else {
        //     // $(this).parents(".input-type-msg").find(".click_envio_chat").prop('disabled', true);
        //     $(this).parents(".input-type-msg").find(".click_envio_chat i").addClass("_i-celest24").removeClass("_i-gris24");
        // }
    });

    // input con icono
    $(".ipt_ic").keyup(function() {
        var value = $(this).val().length;

        if (value > 0) {
            $(this).parents(".js_ipt-icon").find(".js_ics").css({'color': '#7D7D7D'});
        } else {
            $(this).parents(".js_ipt-icon").find(".js_ics").css({'color': '#E3EDF3'});
        }
    });
});