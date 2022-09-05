function vvoAnimate() {
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 0);
}

function animateTopModals() {
    vvoAnimate();
    $(".page-category").css({'overflow': 'hidden'});
}

function bodyOverflowHidden() {
    $(".page-category").css({'overflow': 'hidden'});
}

function cssFixedContent(cont) {
    $(cont).css({"position": "fixed", "z-index": "9999"});
}

// otros modal del user
// contenido
$(".container-welcome, .container-number, .container-options1, .container-ineed, .container-welcome-email, .container-confirm-email, .container-options-email, .container-need-email, .container-t-registro, .container-msg-sent,   .container_add-payments").addClass("container_user-host");

// fondo
$(".modal-welcome, .modal-addpymts,   .modal-rscrm").addClass("modal_content-user");

// boton X
$(".modal_content-welcome > span, .container_add-payments .close,   .close-x_rscrm").addClass("closeUserModal");

// CLICK HIDE X, FUERA DEL MODAL
$(document).on("click", ".modal_content-user, .modal-anhost, .click_cancel_mdls, .modal_content-anhost .close span, .closeUserModal, .click_close", function() {
    $(this).parents(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
    $(this).parents(".page-category").css({'overflow': ''});
});

$(document).on("click", ".mdatrnormlusr, .xhidemdusr", function() {
    $(this).parents(".contusrnmrlmdl").hide();
});

function resizeShowMdl1270px() {
    if ($(this).width() >= 1270) {
        $(".page_listing_admin").css({'overflow': ''});
        $(".container_popup_filters_listings").hide();
    }
}

function resizeMdl743() {
    if ($(this).width() <= 743) {
        $(document).on("click", ".modal_content_nrl, .closeUserModalNrl", function() {
            $(this).parents(".contnmrlmdl743").hide();
            $(this).parents(".page-category").css({'overflow': 'hidden'});
        });

        // srcoll
        $(document).on("click", ".closeUserModal", function() {
            $(this).parents(".container_user-host").css({'display': ''});
            $(this).parents(".page-category").css({'overflow': ''});
        });
    } else {
        $(".page-category").removeClass("resizeBtnModal743");

        $(document).on("click", ".modal_content_nrl, .closeUserModalNrl", function() {
            $(this).parents(".contnmrlmdl743").hide();
            $(this).parents(".page-category").css({'overflow': 'auto'});
        });

        // srcoll
        $(document).on("click", ".closeUserModal", function() {
            $(this).parents(".container_user-host").css({'display': ''});
            $(this).parents(".page-category").css({'overflow': ''});
        });
    }
}
resizeMdl743();
$(window).bind("resize", function() {
    resizeMdl743();
    resizeShowMdl1270px();
});

// modal global
$(document).ready(function() {
    // Lenguajes
    $(document).on("click", "#btnLeng, .btnLeng", function() {
        bodyOverflowHidden();

        $popup = $(".container_leng_region");
        $popup.show();
        cssFixedContent($popup);
    })

    // Popup Picker
    $(".btnmodalpicker").on("click", function() {
        animateTopModals();
        $(".container_vvo_picker").show();
    });
});

// clicks modals - user
$(document).ready(function() {
    // ---------------------- index.php ----------------------
    $(document).on("click", ".butnSignModl, .butnLoginModl", function() {     // login menu
        bodyOverflowHidden();

        $popup = $(".container-welcome");
        $popup.show();
        cssFixedContent($popup);
    });
    
    // ---------------------- trips ----------------------
    $(document).on("click", ".showDetailsUpcomingPopup", function() {
        bodyOverflowHidden();

        $popup = $("._par0t0modls");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click",".showDetailsPastPopup", function() {
        bodyOverflowHidden();

        $popup = $(".container_tsptpp");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".clickGetPDF", function() {
        animateTopModals()
        $(".container_tsptpp").hide();
        $(".container_tsptpp1").show();
    });

    $(document).on("click", ".showDetailsCanceledPopup", function() {
        bodyOverflowHidden();

        $popup = $(".container_tscdpp");
        $popup.show();
        cssFixedContent($popup);
    });

    // ---------------------- interna-edit.php ----------------------
    $(document).on("click", ".showHouseSafety", function() {
        bodyOverflowHidden();

        $popup = $(".container_house-safety");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".showHouseRules", function() {
        bodyOverflowHidden();

        $popup = $(".container_house-rules");
        $popup.show();
        cssFixedContent($popup);
    });

    // ---------------------- interna.php ----------------------
    // modal gallery
    $(document).on("click", ".show_all-photos-interna", function() {
        $(".container_gallerys").addClass("keyframes_animate").css({
            'top': '0',
            'opacity': '1',
            'visibility': 'visible'
        });

        $(this).parents(".page-category").css({'overflow': 'hidden'});
    });

    $(document).on("click", ".btn-x_galls", function() {
        $(".container_gallerys").removeClass("keyframes_animate").css({
            'top': '100vh',
            'opacity': '0',
            'visibility': 'hidden'
        });

        $(this).parents(".page-category").css({'overflow': 'auto'});
    });

    $(document).on("click", ".btnShareIconInterna", function() {
        bodyOverflowHidden();

        $popup = $(".container-wishlists-share");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".btnShareIconInternaGallery", function() {
        bodyOverflowHidden();

        $popup = $(".container-gallerys-share");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".showFavorite", function() {
        bodyOverflowHidden();

        $popup = $(".container-wishlists-create");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".showFavoriteWishlist", function() {
        bodyOverflowHidden();

        $popup = $(".container-wishlists");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".showFavoriteGallery", function() {
        bodyOverflowHidden();

        $popup = $(".container-gallerys-create");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".enhancedcl", function() {
        bodyOverflowHidden();

        $popup = $(".container_enhanced-clean");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".abspc", function() {
        bodyOverflowHidden();

        $popup = $(".container_about-space");
        $popup.show();
        cssFixedContent($popup);
    });

    $(".alants").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container_all_reviews");
        $popup.show();
        cssFixedContent($popup);
    });

    $(".ctht").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container_contact-host");
        $popup.show();
        cssFixedContent($popup);
    });

    $(".herls").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container_house-rules");
        $popup.show();
        cssFixedContent($popup);
    });

    $(".hesfty").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container_house-safety");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".rscrm", function() {
        bodyOverflowHidden();

        $popup = $(".container_reserve-confirm");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".show_popup_all_amenitles", function() {
        bodyOverflowHidden();

        $popup = $(".container_all_amenitles");
        $popup.show();
        cssFixedContent($popup);
    });

    $(".js__edit-lightpick").on("click", function() { // click edit - lightpick modal
        bodyOverflowHidden();

        $popup = $(".container_dates-edit");
        $popup.show();
        cssFixedContent($popup);
    });

    $(".js__guests-modal").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container_guests_edit");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".js__popup_bringind_animal", function() {
        bodyOverflowHidden();

        $popup = $(".container_bringing_animal");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".js__popup_bringind_animal1", function() {
        bodyOverflowHidden();

        $(".page-category").addClass("ppbgal1");
        $popup = $(".ppbgal1").find(".container_bringing_animal");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".ppbgal1 .mdatrnormlusr, .ppbgal1 .xhidemdusr", function() {
        $(".page-category").removeClass("ppbgal1");
        $(".ppbgal1").find(".container_bringing_animal").hide();
        $(this).parents(".page-category").css({'overflow': ''});
    });


    // ICONO - REMOVE WISHLISTS
    $(document).on("click", ".js__remove_wishlist", function() {
        bodyOverflowHidden();

        $popup = $(".container_confirmation");
        $popup.show();
        cssFixedContent($popup);
    });


    // ----------- account --------------
    $(".click__account_modal").on("click", function() {
        $(".page-category").toggleClass("resizeBtnModal743");
    });


    // perfil-interno.php - click add more leng | speak
    $(".js__addMoreLengSpeak").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container-languages-speak");
        $popup.show();
        cssFixedContent($popup);
    });


    // ------------ payments.php ------------
    $(".js_popup_payments").on("click", function() {
        animateTopModals();
        $(".content_popup_payments").show();
    });

    $(".js_popup_payouts").on("click", function() {
        animateTopModals();
        $(".content_popup_payouts").show();
    });

    $(".js_popup_payouts_paypal").on("click", function() {
        animateTopModals();
        $(".content_popup_payouts_paypal").show();
        $(".content_popup_payouts").hide();
    });

    $(".js_back_payouts").on("click", function() {
        animateTopModals();
        $(".content_popup_payouts").show();
        $(this).parents(".container_add-payments").hide();
    });

    $(".js_back_payouts_bank").on("click", function() {
        animateTopModals();
        $(".content_popup_payouts_bank").show();
        $(this).parents(".container_add-payments").hide();
    });

    $(".js_next_bank1").on("click", function() {
        animateTopModals();
        $(".content_popup_payouts_bank1").show();
        $(".content_popup_payouts_bank").hide();
    });

    $(".js_popup_payouts_bank").on("click", function() {
        animateTopModals();
        $(".content_popup_payouts_bank").show();
        $(".content_popup_payouts").hide();
    });

    $(".js_popup_payouts_payoneer").on("click", function() {
        animateTopModals();
        $(".content_popup_payouts_payoneer").show();
        $(".content_popup_payouts").hide();
    });

    $(".js_popup_taxes").on("click", function() {
        animateTopModals();
        $(".content_popup_taxes").show();
    });


    // messages-user-reseña.pjp
    $(".js__popupWriteReview").on("click", function() {
        animateTopModals();
        $(".container_write_review").show();
    });
});

// clicks modals - host
$(document).ready(function() {
    // ---------------------- admin today --------------------
    $(".js__popup_pprnme").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container_pprnme");
        $popup.show();
        cssFixedContent($popup);
    });

    // Messages click en el icono chat modal
    $(".js__popupChatQuickReplies").on("click", function() {
        bodyOverflowHidden();

        $popup = $(".container_ppqkrs")
        $popup.show();
        cssFixedContent($popup);
    });

    // calendar individual - click en private note add >
    $(document).on("click", ".click_add_private_note_cl", function() {
        animateTopModals();
        $(".container_popup_ntpve").show();
    });

    // admin-reservation-completed.php
    $(document).on("click", ".js__reviewMdlReservation", function() {
        setTimeout(function() {
            bodyOverflowHidden();

            $popup = $(".container_reviewDetailsReservation");
            $popup.show();
            cssFixedContent($popup);
        }, 600);
    });

    $(document).on("click", ".js__detailsMdlReservation", function() {
        setTimeout(function() {
            bodyOverflowHidden();

            $popup = $(".container_tsptpp1");
            $popup.show();
            cssFixedContent($popup);
        });
    });

    // listing.php
    $(".js_popupSltNrlCont").on("click", function() {
        animateTopModals();
        $(".container_popup_filters_listings").show();
    });

    // ---------------------- listing post ----------------------
    $(".js__editPhotosListingPost").on("click", function() {
        animateTopModals();
        $(".container_pplgptetps").show();
    });

    $(".js__popupChangePhoto").on("click", function() {
        animateTopModals();
        $(".containerppcepo").show();
    });

    $(".js__popupEditAddCaption").on("click", function() {
        animateTopModals();
        $(".container_ppetpo").show();
    });

    $(".clickEditAmenities").on("click", function() {
        animateTopModals();
        $(".container_lgssppas").show();
    });

    $(".clickEditRoomsSpaces").on("click", function() {
        animateTopModals();
        $(".container_pprssss2").show();
    });

    $(".js_popupAddPhotos").on("click", function() {
        animateTopModals();
        $(".container_ppadps").show();
    });

    $(".js__popupGuestSafety").on("click", function() {
        animateTopModals();
        $(".container_ppgtsy").show();
    });

    $(".js__popupShownGuests").on("click", function() {
        vvoAnimate();
        $(".container_ppsngs").show();
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
    $(document).on("click", ".click_msg_icon_denuncia", function(){
        bodyOverflowHidden();

        $popup = $(".container_user_f_p");
        $popup.show();
        cssFixedContent($popup);
    });

    $(document).on("click", ".js__mdlReportThisGuest", function() {
        bodyOverflowHidden();

        $popup = $(".container_pprttsgt");
        $popup.show();
        cssFixedContent($popup);
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
        $(".container_etrsadss, .container_ppadps, .container_adsgat").hide();
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