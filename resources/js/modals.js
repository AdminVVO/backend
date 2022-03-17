// ANIMATION LOADING BTNS
// let btns_Modals = document.querySelectorAll('.btns-modals');
// btns_Modals.forEach((item)=>{
//     item.addEventListener('click', (evt)=>{
//         evt.target.classList.add('activeLoading')
//     })
// })

$(".btn-celest").append("<div class='loading-btn'></div>");
$(".btn-celest").addClass("btns-modals");

$(".btn-red").append("<div class='loading-btn_red'></div>");
$(".btn-red").addClass("btns-modals");

$(document).ready(function() {
    $('#btnLeng').click(function() {
        $('.container-leng').css({'display': 'block'});
        $('.page-category').css({'overflow': 'hidden'});
    })

    $('.x').click(function() {
        $('.container-leng').css({'display': 'none'});
        $('.page-category').css({'overflow': 'auto'});
    })

    $('.modal-lang').click(function() {
        $('.container-leng').css({'display': 'none'});
        $('.page-category').css({'overflow': 'auto'});
    })

    $('.currency-click').click(function() {
        $('.content_hidden_currency').css({'display': 'block'});
        $('._lgcth').css({'display': 'none'});
    })

    $('.leng-click').click(function() {
        $('.content_hidden_currency').css({'display': 'none'});
        $('._lgcth').css({'display': 'block'});
    })

    // --- OCULTAR SCROLL BODY ---
    // $('.').click(function() {
        // $('.page-category').css({'overflow': 'hidden'}); // ocultar
        // $('.page-category').css({'overflow': 'auto'}); // aparecer
    // })
})


// ------------- ACTIVE JQUERY -------------
$(document).ready(function() {
    $('.nav-leng ul li .btn-a').click(function(){
       $('.btn-a').removeClass("activ");
       $(this).addClass("activ");
    });

    $('.content_leng-choose .flex_content .btn_leng').click(function(){
        $('.btn_leng').removeClass("active");
        $(this).addClass("active");
    });

    $('.content_hidden_currency .flex_content .btn_choose').click(function(){
        $('.btn_choose').removeClass("active");
        $(this).addClass("active");
    });

    $(".tabs_items_group .tabs_items").on("click", function() {
        $(this).siblings(".tabs_items.active_tabs").removeClass("active_tabs");
        $(this).addClass("active_tabs");
    })

    $('.tabs_items_group > .tabs_items').click(function (e) {
        return false;
    });

    // PERSONAL INFO EDIT CANCEL FORMULARIO
    $('._cont-edit ._btnsm.edit').click(function(){
        $(this).parents("._yellow-bg").addClass("personal_edit");
    });

    $('._cont-edit ._btnsm.cancel').click(function(){
        $(this).parents("._yellow-bg").removeClass("personal_edit");
    });


    // listing-post.php - PERSONAL INFO EDIT CANCEL FORMULARIO
    $('.content_listing_details .block ._btnsm.edit').click(function(){
        $(this).parents(".block").addClass("edit_listing_post");
    });

    $(".click_cancel_listing").click(function() {
        $(this).parents(".block").removeClass("edit_listing_post");
    });

    //Limitación de caracteres con jQuery
    $(".input_cant_view").keyup(function() {
        var value = $(this).val().length;
        $(this).parents(".show_form_input ._flfpc").find(".views_num").html(value);
    });

   

    // payments & payouts
    $(".tabs_payments").click(function() {
        $("._cont-payout").css({'display': 'none'});
        $("._cont-ein").css({'display': 'none'});
        $("._cont-sf").css({'display': 'none'});
        $("._cont-gc").css({'display': 'none'});
        $("._cont-payments").css({'display': 'block'});
    })

    $(".tabs_payouts").click(function() {
        $("._cont-payments").css({'display': 'none'});
        $("._cont-ein").css({'display': 'none'});
        $("._cont-sf").css({'display': 'none'});
        $("._cont-gc").css({'display': 'none'});
        $("._cont-payout").css({'display': 'block'});
    })

    $(".tabs_taxes").click(function() {
        $("._cont-payout").css({'display': 'none'});
        $("._cont-payments").css({'display': 'none'});
        $("._cont-sf").css({'display': 'none'});
        $("._cont-gc").css({'display': 'none'});
        $("._cont-ein").css({'display': 'block'});
    })

    $(".tabs_service-fee").click(function() {
        $("._cont-payout").css({'display': 'none'});
        $("._cont-payments").css({'display': 'none'});
        $("._cont-ein").css({'display': 'none'});
        $("._cont-gc").css({'display': 'none'});
        $("._cont-sf").css({'display': 'block'});
    })

    $(".tabs_guest-contri").click(function() {
        $("._cont-payout").css({'display': 'none'});
        $("._cont-payments").css({'display': 'none'});
        $("._cont-ein").css({'display': 'none'});
        $("._cont-sf").css({'display': 'none'});
        $("._cont-gc").css({'display': 'block'});
    })


    // CREATE STEP 4 MAP
    $(".input-wrapper.show").click(function() {
        $(this).parent(".input-enter_map").toggleClass("active_inputs_map");
    });

    $(".use_current_locat").click(function() {
        $(this).parent(".input-enter_map").removeClass("active_inputs_map");
    });


    // CREATE STEP 11 QUESTIONS - click +1 more
    $(".more_icons").click(function() {
        $(".show_user_icons").css({'display': 'flex'});
        $(".usr_icons_more").css({'display': 'none'});
        $(".more_icons").css({'display': 'none'});
        $(".more_icons_show").css({'display': 'flex'});
    })


    // CREATE STEP - click en play video
    $(".play_button").click(function(){
        $("._video").trigger("play");
        $(".play_button").css({'opacity': '0', 'visibility': 'hidden'});
    });


    // TEXTAREA - muestra numeros al escribir
    $("._txtarea").keyup(function(event) {
        $(".views_num").text($(this).val().length);
    });

    // CREATE STEP10 - mx 4 caracteres
    $(".input_numberdollar").keypress(function(tecla){
        if(tecla.charCode < 48 || tecla.charCode > 57 || this.value.length === 4) {
            return false;
        }
    });

    // LISTING POST - mx 5 caracteres
    $(".input_numberzipcode").keypress(function(tecla){
        if(tecla.charCode < 48 || tecla.charCode > 57 || this.value.length === 5) {
            return false;
        }
    });


    $("._options").on('click', function() {
        let pos = window.event;
        $("._menu-options").css({'top': pos.pageY});
        $("._menu-options").toggleClass("is-active");
    });

    $("._options-pastguest").on('click', function() {
        let pos = window.event;
        $("._menu-options_pastguest").css({'top': pos.pageY});
        $("._menu-options_pastguest").toggleClass("is-active");
    });


    // PERFIL INTERNO.PHP - edit profile click
    $(".click_editprofile").click(function() {
        $(".p_interna_none").css({'display': 'none'});
        $("._fr-block").css({'display': 'block'});
    });

    $(".click_cancelprofile").click(function() {
        $(".p_interna_none").css({'display': 'block'});
        $("._fr-block").css({'display': 'none'});
    });


    // create-step7-upload-all-photos.php - click
    const $cover_photos = $(".show_cover_photo");

    $(document).mouseup(e => {
        if (!$cover_photos.is(e.target) && $cover_photos.has(e.target).length === 0) {
            $("._show_modal-photos").removeClass("is-active");
        }
    });
    
    $(".click_cover_photos").on("click", function() {
        let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
        $("._show_modal-photos").removeClass("is-active");

        if(!toggleClass) {
            $(this).parents("._show_modal-photos").toggleClass("is-active");
        }
    });

    $(".click_options_photos").on("click", function() {
        let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
        $("._show_modal-photos").removeClass("is-active");

        if(!toggleClass) {
            $(this).parents("._show_modal-photos").toggleClass("is-active");
        }
    });


    // cuenta-bloqueada-identity-card.php - personaliza file
    function filePreview(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                $(".imagePreview").html("<img src='"+e.target.result+"' />");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    function filePreviewBack(input) {
        if (input.files && input.files[0]) {
            let reader = new FileReader();

            reader.onload = function(e) {
                $(".imagePreviewBack").html("<img src='"+e.target.result+"' />");
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".front_face").change(function() {
        filePreview(this);
    });

    $(".back_face").change(function() {
        filePreviewBack(this);
    });



    // perfil-interno.php - click add more leng | speak
    $(".add_more-leng").click(function() {
        $(".add_more_leng_show").css({'display': 'flex'});
        $(".add_more-leng").css({'display': 'none'});
    });

    $(".add_more.txtred_x").click(function() {
        $(this).parent(".input_border").css({'display': 'none'});
    });


    // TODOS LOS TEXTAREA SEA AUTOMATICO AL ESCRIBIR ALTO
    // $("textarea").keyup(function(e) {
    //     while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
    //         $(this).height($(this).height()+1);
    //     };
    // });


    // LISTING POST INFO - Address click use current location disabled coutry/region
    // $(".click_use_current").click(function() {
    //     $(".disabled").addClass("_flfpc_disabled");
    //     $(".disabled_input").prop("disabled", true);
    // });


    // listing post pricing - minimum stay, click Customize minimum stay requirements
    $(".click_minumum_nights").click(function() {
        $(".show_minimum_nights").css({'display': 'flex'});
        $(".click_minumum_nights").css({'display': 'none'});
    });


    // listing post - anuncio modal click_x_anuncio
    setTimeout(showModalAnuncio, 1000);

    function showModalAnuncio() {
        let cookieAccepted = sessionStorage.getItem("cookieAccepted");
        if (cookieAccepted != "yes") {
            sessionStorage.setItem("cookieAccepted", "yes");
            $(".anuncio_start_hosting").show();
        }
    }

    $(".click_x_anuncio").click(function() {
        $(".anuncio_start_hosting").hide();
    });


    // listing post - click give-feedback modal
    $(".click_give_feedback").click(function() {
        $('html,body').animate({
            scrollTop: $("body").offset().top
        }, 10);

        $(".container_give-feedback").css({'display': 'block'});
        $(".page-category").css({'overflow': 'hidden'});
    });

    $(".modal-anhost").click(function() {
        $(this).parents(".container_admin-host").hide();
        $(this).parents(".page-category").css({'overflow': 'auto'});
    });

    $(".modal_content-anhost .close span").click(function() {
        $(this).parents(".container_admin-host").hide();
        $(this).parents(".page-category").css({'overflow': 'auto'});
    });

    // click y cambia color estilos el input
    $(document).on('focus click', '.show_form_input :input', function() {
        $('label[for="' + this.id + '"]');
        $(this).parents(".link_label_input").addClass("labelfocus");
        $(this).parents(".before_icon_input").addClass("labelfocus");
    }).on('blur', '.show_form_input :input', function() {
        $('label[for="' + this.id + '"]');
        $(this).parents(".link_label_input").removeClass("labelfocus");
        $(this).parents(".before_icon_input").removeClass("labelfocus");
    });


    $("._input").keyup(function() {
        var value = $(this).val().length;

        if(value > 0) {
            $(this).parents(".link_label_input").find(".text_placeholder").removeClass("text_placeholder").addClass("_txtec");
        } else {
            $(this).parents(".link_label_input").find("._txtec").removeClass("_txtec").addClass("text_placeholder");
        }
    })


    // listing post - location sharing click en 2 opciones aparece descrip.
    $(".check_click input:radio").click(function() {
        var value = $(this).val();

        if (value === '1') {
            $(".show_text_check_location ._txtec").text("The circle will be displayed on the ad. Only guests with a confirmed reservation will be able to see the pin indicating the exact location. If necessary, you can drag the marker to adjust the location.");
        } else if (value === '2') {
            $(".show_text_check_location ._txtec").text("Anyone looking for a place to stay will be able to see your ad marker. If necessary, you can drag the marker to adjust the location.");
        }
    });

    // listing post - scenic views click
    $(".click_scenic_views").click(function() {
        $('html,body').animate({
            scrollTop: $("body").offset().top
        }, 10);

        $(".container_scenic_views").css({'display': 'block'});
        $(".page-category").css({'overflow': 'hidden'});
    });

    // listing post - pricing click show
    $(".click_preview_guests_pay").click(function() {
        $('html,body').animate({
            scrollTop: $("body").offset().top
        }, 10);

        $(".container_preview_guests_pay").css({'display': 'block'});
        $(".page-category").css({'overflow': 'hidden'});
    });

    $(".click_close").click(function() {
        $(".container_preview_guests_pay").css({'display': 'none'});
        $(".page-category").css({'overflow': 'auto'});
    });

    // todos los input sea numericos
    $(document).on('input', '.number', function() {
		$(this).val($(this).val().replace(/[^0-9]/g, ''));
	});

    // click en texto y mostrar value en un input
    $(".click_tip_disc").click(function() {
        let texto = $(this).parents(".show_form_input").find(".number").val();

        if (texto == "") {
            $(this).parents(".show_form_input").find(".number").val("13");
            $(this).parents(".show_form_input").find("._tip31").val("31");
        }
    })

    // listing post - add a discount of other stays, click add
    $(".click_add_another_lenth").click(function() {
        $(this).parents('.show_form_input').find(".click_remove_another_lenth").prop('disabled', false);

        var html = '';
        html += '<div class="block_input">';
        html += '<div class="fx fx-fw-w" style="gap: 30px;">';
        html += '<div class="mx480">';
        html += '<div class="txt-check-in">Length of stay</div>';
        html += '<div class="selected-modal mxw576" style="margin: 0;">';
        html += '<select>'
        html += '<option selected disabled>Select length of stay</option>';
        html += '<option value="7" disabled>Weekly (1 week)</option>';
        html += '<option value="28" disabled>Monthly (4 weeks)</option>';
        html += '<option value="56">8 weeks</option>';
        html += '<option value="84">12 weeks</option>';
        html += '</select>';
        html += '<i class="fas fa-chevron-down"></i>';
        html += '</div>';
        html += '</div>';
        html += '<div class="mxw80">';
        html += '<div class="_flfpc">';
        html += '<div class="txt-check-in">Discount</div>';
        html += '<label class="before_icon_input">';
        html += '<input type="text" class="number" style="padding: 16px 0 16px 16px;" maxlength="2">';
        html += '<span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>';
        html += '</label>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<button class="_btnsmleft click_remove_another_lenth" style="margin-top: 10px;">';
        html += '<span>Remove</span>';
        html += '</button>';
        html += '</div>';

        $(this).parents('.show_form_input').find(".cont_add_another").append(html);
    });

    $(".cont_add_another .block_input").each(function() {
        $(".click_remove_another_lenth").prop('disabled', true);
    });

    $(document).on('click', '.click_remove_another_lenth', function() {
        var value = $(this).parents('.show_form_input').find(".cont_add_another .block_input").length;

        if (value > 2) {
        } else {
            $(this).parents('.show_form_input').find(".click_remove_another_lenth").prop('disabled', true);
        }

        $(this).closest(".block_input").remove();
    });

    // listing post - last-minute discount, click add
    $(".click_add_last_discount").click(function() {
        $(this).parents('.show_form_input').find(".click_remove_another_lenth").prop('disabled', false);

        let discount = '';
        discount += '<div class="block_input">';
        discount += '<div class="fx fx-fw-w" style="gap: 30px;">';
        discount += '<div class="mx480">';
        discount += '<div class="txt-check-in">Day before arrival</div>';
        discount += '<input type="text" class="_inputreal number" maxlength="2">';
        discount += '</div>';
        discount += '<div class="mxw80">';
        discount += '<div class="_flfpc">';
        discount += '<div class="txt-check-in">Discount</div>';
        discount += '<label class="before_icon_input">';
        discount += '<input type="text" class="number" style="padding: 16px 0 16px 16px;" maxlength="2">';
        discount += '<span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>';
        discount += '</label>';
        discount += '</div>';
        discount += '</div>';
        discount += '</div>';
        discount += '<button class="_btnsmleft click_remove_another_lenth" style="margin-top: 10px;">';
        discount += '<span>Remove</span>';
        discount += '</button>';
        discount += '</div>';

        $(this).parents('.show_form_input').find(".cont_add_another").append(discount);
    });


    // click es show more
    $(".click_show_more").on('click', function() {
        $(this).parent().find(".show_more_info").show();
        $(this).parent().find(".click_show_more").hide();
    });


    // create step6 - click la flecha y que deslize cada bloque
    $(".click_bloques_amenitles").on('click', function() {
        $('._content-favorite, .c_amenitles').animate({
            scrollTop: $(".bloque_guest_favorite").css({'background': 'red'}).offset().top
        }, 600);
    });
});


// validar formato de fecha con jquery
$(document).ready(validateFecha);
function validateFecha() {
    var flag1 = true;
    $(document).on('keydown','.date-v-modals',function(e){
        if($(this).val().length == 4 && flag1) {
            $(this).val($(this).val() + "/");
            flag1 = true;
        }

        else if($(this).val().length == 7 && flag1) {
            $(this).val($(this).val() + "/");
            flag1 = false;
        }
    });
};

// $(document).ready(function() {
//     let $lis = $(".c_amenitles");
//     activo = 0;
//     cantidad = $lis.length;

//     // $lis.hide();

//     $lis.each(function(index) {
//         $lis.eq(index).css({'background': 'red'});
//     });

//     $lis.eq(activo).fadeIn();

//     $(".click_bloques_amenitles").click(function(evt) {
//         evt.preventDefault();
//         activo += 1;

//         if (activo > cantidad - 1) {
//             activo = 0;
//         }

//         showAmenitles();
//     });

//     function showAmenitles() {
//         $lis.eq(activo).fadeIn();
//     }
// });