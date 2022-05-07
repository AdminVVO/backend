function animateTopModals() {
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 0);

    $(".page-category").css({'overflow': 'hidden'});
}

// otros modal del user
// contenido
$(".container-welcome, .container-number, .container-options1, .container-ineed, .container-welcome-email, .container-confirm-email, .container-options-email, .container-need-email, .container-t-registro, .container-msg-sent,   .container-wishlists, .container-wishlists-create, .container-wishlists-share,  .container_add-payments").addClass("container_user-host");

// fondo
$(".modal-welcome, .modal-wishlists, .modal-wishlists, .modal-wishlists, .modal-addpymts").addClass("modal_content-user");

// boton X
$(".modal_content-welcome > span, .close-x_wishlists, .container_add-payments .close").addClass("closeUserModal");

// CLICK HIDE X, FUERA DEL MODAL
$(".modal_content-user, .modal-anhost, .modal_content-anhost .click_cancel_mdls, .modal-hesfty, .modal-herls, .modal_content-anhost .close span, .closeUserModal, .close-x_hesfty, .click_close, .close-x_herls").on("click", function() {
    $(this).parents(".container_user-host, .container_admin-host, .container_house-safety, .container_house-rules, .container_preview_guests_pay").hide();
    $(this).parents(".page-category").css({'overflow': 'auto'});
});

// clicks modals - user
$(document).ready(function() {
    // index.php
    $(".butnSignModl, .butnLoginModl").on("click", function() {     // login menu
        animateTopModals();
        $(".container-welcome").show();
    });

    // trips
    $(".showDetailsPastPopup").on("click", function() {
        animateTopModals();
        $(".container_tsptpp").show();
    });

    $(".clickGetPDF").on("click", function() {
        animateTopModals()
        $(".container_tsptpp").hide();
        $(".container_tsptpp1").show();
    });

    $(".showDetailsCanceledPopup").on("click", function() {
        animateTopModals();
        $(".container_tscdpp").show();
    });

     // interna-edit.php
    $(".showHouseSafety").on("click", function() {
        animateTopModals();
        $(".container_house-safety").show();
    });

    $(".showHouseRules").on("click", function() {
        animateTopModals();
        $(".container_house-rules").show();
    });
});

// clicks modals - host
$(document).ready(function() {
    // listing post
    $(".clickEditAmenities").on("click", function() {
        animateTopModals();
        $(".container_lgssppas").show();
    });

    $(".clickEditRoomsSpaces").on("click", function() {
        animateTopModals();
        $(".container_pprssss1").show();
    });

    // listing post policies
    $(".clickInstantBookon").on("click", function() {
        animateTopModals();
        $(".container_poliandrulesedit").show();
    });

    $(".clickViewLocalLaws").on("click", function() {
        animateTopModals();
        $(".container_lsadrspp").show();
    });

    // listing post - scenic views click
    $(".click_scenic_views").click(function() {
        animateTopModals();
        $(".container_scenic_views").show();
    });

    // listing post - pricing click show
    $(".click_preview_guests_pay").click(function() {
        animateTopModals();
        $(".container_preview_guests_pay").show();
    });

    // // messages - click en el icono denunciar al chat
    // $(".click_msg_icon_denuncia").on("click", function(){
    //     animateTopModals();
    //     $(".container_user_f_p").show();
    // });

    // listing post - click give-feedback modal
    $(".click_give_feedback").click(function() {
        animateTopModals();
        $(".container_give-feedback").show();
    });
});