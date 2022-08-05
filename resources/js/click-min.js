$(document).ready(function() {
    // estrella, favorite.
    starRating();
    function starRating() {
        starRatingVvo = $(".star_rating_vvo");

        $.each(starRatingVvo, function(value, index) {
            let $clickStar = $(this).parents().find(".star_rating_vvo").eq(value).find("li");

            $clickStar.mouseover(function() {
                let current = $(this);
    
                $clickStar.each(function(index) {
                    $(this).addClass("hover");
    
                    if (index == current.index()) {
                        return false;
                    }
                });
            });

            $clickStar.mouseleave(function() {
                $clickStar.removeClass("hover");
            });

            $clickStar.on("click", function() {
                let dataId = $(this).attr("data-star-desc");
    
                $clickStar.removeClass("active");
                $(this).parents(index).find("li.hover").addClass("active");
                $(this).parents(index).find(".showMsgHtml").eq(value).html(dataId);
            });
        });
    }

    // message-user-resena - write a review popup
    $(".container_write_review .star_rating_vvo li").on("click", function() {
        $(".container_write_review .btn-celest").removeAttr("disabled");
    });

    // escribir textarea campo, validacion textarea - popup
    $(".container_write_review2 ._txta-modls").keyup(function() {
        if ($(this).val().trim() === "") {
            // console.log('El campo es requerido');
            $(".container_write_review2 .btn-celest").attr("disabled", true);
        } else {
            $(".container_write_review2 .btn-celest").removeAttr("disabled");
        }
    });

    $(".container_write_review3 ._txta-modls").keyup(function() {
        if ($(this).val().trim() === "") {
            $(".container_write_review3 .btn-celest").attr("disabled", true);
        } else {
            $(".container_write_review3 .btn-celest").removeAttr("disabled");
        }
    });

    varioStarVal();
    function varioStarVal() {
        // let starClick = $(".container_write_review1 .star_rating_vvo");

        // $.each(starClick, function(value, index) {
        //     $clickStarVal = $(this).parents().find(".container_write_review1 .star_rating_vvo").eq(value).find("li");

        //     $clickStarVal.on("click", function() {
        //         i = value + 1;
        //         console.log(i)
        //     });
        // });

        function calcscore(){
            let score = 0;
            let checked = $(".container_write_review1 .starClick:checked");
    
            if (checked.length > 0) {
                checked.each(function() {
                    score += parseInt($(this).val(), 10);
    
                    if (score >= 15) {
                        $(".container_write_review1 .btn-celest").prop("disabled", false);
                    } else {
                        $(".container_write_review1 .btn-celest").prop("disabled", true);
                    }
                });
            } else {
                $(".container_write_review1 .btn-celest").prop("disabled", true);
            }
        }
    
        $(".container_write_review1 .starClick").change(function() {
            calcscore();
        });
    }

    // popup - messages-user-resena.php
    popupResenaNext();
    function popupResenaNext() {
        let $popupWriteReviewNext = $(".container_write_review .btn-celest");
        let $popupWriteReviewUnoNext = $(".container_write_review1 .btn-celest");
        let $popupWriteReviewDosNext = $(".container_write_review2 .btn-celest");
        let $popupWriteReviewTresNext = $(".container_write_review3 .btn-celest");

        let $popupWriteReviewUnoPrev = $(".container_write_review1 .js__popupPrevReview");
        let $popupWriteReviewDosPrev = $(".container_write_review2 .js__popupPrevReview");
        let $popupWriteReviewTresPrev = $(".container_write_review3 .js__popupPrevReview");

        $popupWriteReviewNext.on("click", function() {
            $(".container_write_review1").show();
            $(".container_write_review").css({'display': ''});
        });

        $popupWriteReviewUnoNext.on("click", function() {
            $(".container_write_review2").show();
            $(".container_write_review1").css({'display': ''});
        });

        $popupWriteReviewDosNext.on("click", function() {
            $(".container_write_review3").show();
            $(".container_write_review2").css({'display': ''});
        });

        $popupWriteReviewTresNext.on("click", function() {
            $(".container_write_review3").css({'display': ''});
        });

        // click prev (<)
        $popupWriteReviewUnoPrev.on("click", function() {
            $(".container_write_review").show();
            $(".container_write_review1").css({'display': ''});
        });

        $popupWriteReviewDosPrev.on("click", function() {
            $(".container_write_review1").show();
            $(".container_write_review2").css({'display': ''});
        });

        $popupWriteReviewTresPrev.on("click", function() {
            $(".container_write_review2").show();
            $(".container_write_review3").css({'display': ''});
        });
    }

    // listing post, amenities show more - hide
    amenitiesHidePost();
    function amenitiesHidePost() {
        let obj = $(".js_amenitiesPostShowHide .wflex").find("p");

        $.each(obj, function(i) {
            if ((i + 1) >= 10) {
                if ((i) >= 10) {
                    $(this).closest(".js_amenitiesPostShowHide .wflex p").css({'display': 'none'});
                    $(this).parents().find(".js__showMoreAmenitiesPost").removeClass("dn");
                }
            }
        });
    }

    function amenitiesShowPost() {
        let obj = $(".js_amenitiesPostShowHide .wflex").find("p");

        $.each(obj, function(i) {
            if ((i + 1) >= 10) {
                if ((i) >= 10) {
                    $(this).closest(".js_amenitiesPostShowHide .wflex p").css({'display': ''});
                }
            }
        });
    }

    // listing post, click 3 puntos
    submenuEditPhoto();
    function submenuEditPhoto() {
        const $contenido = $(".js__showPopupPhoto");

        $(document).mouseup(e => {
            if (!$contenido.is(e.target) && $contenido.has(e.target).length === 0) {
                $contenido.removeClass("active");
            }
        });

        $(".js__showPopupPhoto ._olsjb9v ._14tt8lmp").on("click", function() {
            $contenido.removeClass("active");
        });

        $.each($contenido, function(value) {
            let btns = $(this).parents().find(".js__btnEditPhotoPost").eq(value);
            
            btns.on("click", function() {
                let toggleClass = $(this).parents().find(".js__showPopupPhoto").eq(value).hasClass("active") ? true : false;
                $(this).parents().find(".js__showPopupPhoto").removeClass("active");

                if(!toggleClass) {
                    $(this).parents().find(".js__showPopupPhoto").eq(value).toggleClass("active");
                }
            });
        });
    }

    $(".js__showMoreAmenitiesPost").on('click', function() {
        amenitiesShowPost();
        $(this).parents().find(".js__showMoreAmenitiesPost").addClass("dn");
        $(this).parents().find(".js__hideMoreAmenitiesPost").removeClass("dn");
    });

    $(".js__hideMoreAmenitiesPost").on('click', function() {
        amenitiesHidePost();
        $(this).parents().find(".js__showMoreAmenitiesPost").removeClass("dn");
        $(this).parents().find(".js__hideMoreAmenitiesPost").addClass("dn");
    });

    // click es show more
    $(".click_show_more").on('click', function() {
        $(this).parents().find(".show_more_info, .click_hide_more").removeClass("dn");
        $(this).parents().find(".click_show_more").addClass("dn");
    });

    $(".click_hide_more").on("click", function() {
        $(this).parents().find(".click_show_more").removeClass("dn");
        $(this).parents().find(".click_hide_more, .show_more_info").addClass("dn");
    });

    // hamburguer
    $(".ham-burger").on("click", function() {
        $(".page-category").css({'overflow': ''});
        $("header .opbtizbpet").toggleClass("show");
        $(this).toggleClass("open");
    });

    $(document).on("click", ".ham-burger.open", function() {
        $(".page-category").css({'overflow': 'hidden'});
    });

    // remove class dandole click alguna opcion del modal popup
    $(".menu_home-content .menu_home-content-items ul li").on("click", function() {
        $("._header-menu").removeClass("is-active");
    });

    // active click - add payments paypal opt2 1
    $("._dggtcgcggrg ._brinfimg").on("click", function() {
        $(this).parents("._dggtcgcggrg").find("._brinfimg.active").removeClass("active");
        $(this).addClass("active");
    });

    // click - add payments paypal opt2 1
    $(".showW9").on("click", function() {
        $(this).parents().find(".substituteW9").show();
        $(this).parents().find(".substituteW8").hide();
        $(this).parents().find(".substituteW8BEN").hide();
    });

    $(".showW8").on("click", function() {
        $(this).parents().find(".substituteW8").show();
        $(this).parents().find(".substituteW9").hide();
        $(this).parents().find(".substituteW8BEN").hide();
    });

    $(".showW8BEN").on("click", function() {
        $(this).parents().find(".substituteW8BEN").show();
        $(this).parents().find(".substituteW9").hide();
        $(this).parents().find(".substituteW8").hide();
    });


    // interna - click perfil scroll
    $(".js__scroll_profile_interna").on("click", function() {
        $('html, body').animate({
            scrollTop: $(".content-user-if-flex").offset().top-75
        }, 600);
    });

    // interna - confirm and pay, click paypal
    $("._glepay").on("click", function() {
        $("._showgplay").show();
        $("._hiddencreditordebit").hide();
        $("._showpaypal").hide();
    });

    $("._creditcard").on("click", function() {
        $("._hiddencreditordebit").show();
        $("._showgplay").hide();
        $("._showpaypal").hide();
    });

    $("._paypal").on("click", function() {
        $("._showpaypal").show();
        $("._hiddencreditordebit").hide();
        $("._showgplay").hide();
    });


    // perfil-intenro - reviews nav link
    $(".js_from_hosts").on("click", function() {
        $(".fromGuests").hide();
        $(".fromhosts").show();
    });

    $(".js_from_guests").on("click", function() {
        $(".fromGuests").show();
        $(".fromhosts").hide();
    });


    // trips
    $(".js__tripUpcoming").on("click", function() {
        $(".showTripUpcoming").show();
        $(".showTripPast").hide();
        $(".showTripCanceled").hide();
    });

    $(".js__tripPast").on("click", function() {
        $(".showTripPast").show();
        $(".showTripUpcoming").hide();
        $(".showTripCanceled").hide();
    });

    $(".js__tripCanceled").on("click", function() {
        $(".showTripCanceled").show();
        $(".showTripPast").hide();
        $(".showTripUpcoming").hide();
    });


    // listing post
    var showContToggle = $(this).find(".contCheckDetails");
    $.each(showContToggle, function(value) {
        let btns = $(this).parents().find(".js_showDetailsCheck").eq(value);
        
        btns.on("click", function() {
            $(this).parents().find(".contCheckDetails").eq(value).toggleClass("active");
        });
    });

    // checkbox
    // $(".lbphotos input").on("change", function () {
    //     if ($(this).is(":checked")) {
    //         $(this).parents(".pbcbrmop").removeClass("pbcbrmop").addClass("pbcbrmobop");
    //     } else {
    //         $(this).parents(".pbcbrmobop").removeClass("pbcbrmobop").addClass("pbcbrmop");
    //     }
	// });
});