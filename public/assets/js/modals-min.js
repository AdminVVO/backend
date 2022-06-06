function vvoAnimate() {
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 0);
}

function animateTopModals() {
    vvoAnimate();
    $(".page-category").css({'overflow': 'hidden'});
}

// otros modal del user
// contenido
$(".container-welcome, .container-number, .container-options1, .container-ineed, .container-welcome-email, .container-confirm-email, .container-options-email, .container-need-email, .container-t-registro, .container-msg-sent,   .container_add-payments").addClass("container_user-host");

// fondo
$(".modal-welcome, .modal-addpymts,   .modal-rscrm").addClass("modal_content-user");

// boton X
$(".modal_content-welcome > span, .container_add-payments .close,   .close-x_rscrm").addClass("closeUserModal");

// CLICK HIDE X, FUERA DEL MODAL
$(".modal_content-user, .modal-anhost, .modal_content-anhost .click_cancel_mdls, .modal_content-anhost .close span, .closeUserModal, .click_close").on("click", function() {
    $(this).parents(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
    $(this).parents(".page-category").css({'overflow': 'auto'});
});

$(document).on("click", ".mdatrnormlusr, .xhidemdusr", function() {
    $(this).parents(".contusrnmrlmdl").hide();
});

// clicks modals - user
$(document).ready(function() {
    // ---------------------- index.php ----------------------
    $(".butnSignModl, .butnLoginModl").on("click", function() {     // login menu
        animateTopModals();
        $(".container-welcome").show();
    });

    // ---------------------- trips ----------------------
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

    // ---------------------- interna-edit.php ----------------------
    $(".showHouseSafety").on("click", function() {
        animateTopModals();
        $(".container_house-safety").show();
    });

    $(".showHouseRules").on("click", function() {
        animateTopModals();
        $(".container_house-rules").show();
    });

    // ---------------------- interna.php ----------------------
    // modal gallery
    $(".show_all-photos-interna").on("click", function() {
        $(".container_gallerys").addClass("keyframes_animate").css({
            'top': '0',
            'opacity': '1',
            'visibility': 'visible'
        });

        $(this).parents(".page-category").css({'overflow': 'hidden'});
    });

    $(".btn-x_galls").on("click", function() {
        $(".container_gallerys").removeClass("keyframes_animate").css({
            'top': '100vh',
            'opacity': '0',
            'visibility': 'hidden'
        });

        $(this).parents(".page-category").css({'overflow': 'auto'});
    });

    $(".btnShareIconInterna").on("click", function() {
        animateTopModals();
        $(".container-wishlists-share").show();
    });

    $(".btnShareIconInternaGallery").on("click", function() {
        animateTopModals();
        $(".container-gallerys-share").show();
    });

    $(".showFavorite").on("click", function() {
        animateTopModals();
        $(".container-wishlists-create").show();
    });

    $(".showFavoriteGallery").on("click", function() {
        animateTopModals();
        $(".container-gallerys-create").show();
    });

    $(".enhancedcl").on("click", function() {
        $(".container_enhanced-clean").show();
        animateTopModals();
    });

    $(".abspc").on("click", function() {
        $(".container_about-space").show();
        animateTopModals();
    });

    $(".alants").on("click", function() {
        $(".container_all_reviews").show();
        animateTopModals();
    });

    $(".ctht").on("click", function() {
        $(".container_contact-host").show();
        animateTopModals();
    });

    $(".herls").on("click", function() {
        $(".container_house-rules").show();
        animateTopModals();
    });

    $(".hesfty").on("click", function() {
        $(".container_house-safety").show();
        animateTopModals();
    });

    $(".rscrm").on("click", function() {
        $(".container_reserve-confirm").show();
        animateTopModals();
    });

    $(".show_popup_all_amenitles").on("click", function() {
        $(".container_all_amenitles").show();
        animateTopModals();
    });

    // Play with : credit or debit card - google play
    $("._glepay").on("click", function() {
        $("._hiddencreditordebit").hide();
        $("._showgplay").show();
    });

    $("._creditcard").on("click", function() {
        $("._showgplay").hide();
        $("._hiddencreditordebit").show();
    });

    $(".js__edit-lightpick").on("click", function() { // click edit - lightpick modal
        $(".container_dates-edit").show();
    });

    $(".js__guests-modal").on("click", function() {
        $(".container_guests_edit").show();
    });

    $(".js__popup_bringind_animal").on("click", function() {
        $(".container_bringing_animal").show();
    });


    // ICONO - REMOVE WISHLISTS
    $(".js__remove_wishlist").on("click", function() {
        $(".container_confirmation").show();
    });
});

// clicks modals - host
$(document).ready(function() {
    // ---------------------- listing post ----------------------
    $(".clickEditAmenities").on("click", function() {
        animateTopModals();
        $(".container_lgssppas").show();
    });

    $(".clickEditRoomsSpaces").on("click", function() {
        animateTopModals();
        $(".container_pprssss1").show();
    });

    // ---------------------- listing post policies ----------------------
    $(".clickInstantBook").on("click", function() {
        animateTopModals();
        $(".container_poliandrulesedit").show();
        $(".container_lsitofpp1").hide();
    });

    $(".instantOffPopup").on("click", function() {
        animateTopModals();
        $(".container_lsitofpp1").show();
        $(".container_poliandrulesedit").hide();
        $(".container_lsitofpp2").hide();
    });

    $(".lsitofpp2").on("click", function() {
        animateTopModals();
        $(".container_lsitofpp2").show();
        $(".container_lsitofpp3").hide();
        $(".container_lsitofpp1").hide();
    });

    $(".lsitofpp3").on("click", function() {
        animateTopModals();
        $(".container_lsitofpp3").show();
        $(".container_lsitofpp2").hide();
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

    // click en el icono denunciar al chat
    $(".click_msg_icon_denuncia").on("click", function(){
        animateTopModals();
        $(".container_user_f_p").show();
    });

    // listing post - click give-feedback modal
    $(".click_give_feedback").click(function() {
        animateTopModals();
        $(".container_give-feedback").show();
    });

    // listing post - click edit rooms and spaces, click add sleeping arrangements
    $(".clickEditRoomsAndSpaces").on("click", function() {
        animateTopModals();
        $(".container_etrsadss").show();
        $(".container_pprssss2").hide();
    });

    $(".clickSavePopupStep2").on("click", function() {
        animateTopModals();
        $(".container_pprssss2").show();
        $(".container_etrsadss").hide();
        $(".container_adsgat").hide();
    });

    $(".clickAddSleepArrang").on("click", function() {
        animateTopModals();
        $(".container_adsgat").show();
        $(".container_pprssss2").hide();
    });

    $(".closeMoreNumberOfBeds").on("click", function() {
        animateTopModals();
        $(".container_adsgat").show();
        $(".container_lnmenrofbs").hide();
    });

    $(".learMoreNumberOfBeds").on("click", function() {
        animateTopModals();
        $(".container_lnmenrofbs").show();
        $(".container_adsgat").hide();
    });
});