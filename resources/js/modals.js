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
    })

    $('._cont-edit ._btnsm.cancel').click(function(){
        $(this).parents("._yellow-bg").removeClass("personal_edit");
    })

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
    })

    // CREATE STEP10 - mx 4 caracteres
    $(".input_numberdollar").keypress(function(tecla){
        if(tecla.charCode < 48 || tecla.charCode > 57 || this.value.length === 3) {
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
            $(".content_add_photos").removeClass("is-active");
        }
    });
    
    $(".click_cover_photos").on("click", function() {
        $(".content_add_photos.is-active").removeClass("is-active");
        $(this).parents(".content_add_photos").toggleClass("is-active");
    });

    $(".click_options_photos").on("click", function() {
        // $(".content_add_photos.is-active").removeClass("is-active");
        // $(this).parents(".content_add_photos").toggleClass("is-active");
        $('.content_add_photos.is-active').removeClass("is-active");
        $(this).parents(".content_add_photos").toggleClass("is-active");
    });
});