function animateTopModals() {
    $('html, body').animate({
        scrollTop: $("body").offset().top
    }, 0);

    $(".page-category").css({'overflow': 'hidden'});
}

//-------- CLICK IMG GALLERYS LATERAL --------
const modalImgsG = document.querySelector('._img-modal');
const gallerysList = document.querySelectorAll('._pbkgallery');

gallerysList.forEach((list) => {
    const view = list.querySelector('._link-img');
    const galleryImg = list.querySelector('._img-wh').getAttribute('src');

    view.addEventListener('click', () => {
        modalImgsG.setAttribute('src', galleryImg);
    });
});





//------- ACTIVE LATERAL SLIDER IMG GALLERYS --------
$(document).ready(function() {
    $('._cgprelright ._pbkgallery').click(function(){
       $('._pbkgallery').removeClass("active");
       $(this).addClass("active");
    });
});

// let modalEnhancedC = document.querySelector(".modal-enhancedcl");
// let modalAboutSpace = document.querySelector(".modal-abspc");
// let modalContactUser = document.querySelector(".modal-ctht");
// let modalHouseSafety = document.querySelector(".modal-hesfty");
// let modalHouseRules = document.querySelector(".modal-herls");
// let modalGalleryModal = document.querySelector(".modal_h-galls");

let containerEnhancedClean = document.querySelector(".container_enhanced-clean");
// let containerAboutSpace = document.querySelector(".container_about-space");
// let containerContactUser = document.querySelector(".container_contact-host");
// let containerHouseSafety = document.querySelector(".container_house-safety");
// let containerHouseRules = document.querySelector(".container_house-rules");
let containerCreditCard = document.querySelector("._hiddencreditordebit");
let containerGooglePlay = document.querySelector("._showgplay");
// let containerGalleryModal = document.querySelector(".container_gallerys");

// let btn_XEnhancedC = document.querySelector(".close-x_enhancedcl");
// let btn_XAboutSpace = document.querySelector(".close-x_abspc");
// let btn_XContactUser = document.querySelector(".close-x_ctht");
// let btn_XHouseSafety = document.querySelector(".close-x_hesfty");
// let btn_XHouseRules = document.querySelector(".close-x_herls");
// let btn_XGalleryModal = document.querySelector(".btn-x_galls");

// let btnAboutSpace = document.querySelector(".abspc");
// let btnContactUser = document.querySelector(".ctht");
// let btnHouseSafety = document.querySelector(".hesfty");
// let btnHouseRules = document.querySelector(".herls");
let btnCreditCard = document.querySelector("._creditcard");
let btnGooglePlay = document.querySelector("._glepay");

// clicks modals - host
$(document).ready(function() {
    $(".enhancedcl").on("click", function() {
        $(".container_enhanced-clean").show();
        animateTopModals();
    });

    $(".abspc").on("click", function() {
        $(".container_about-space").show();
        animateTopModals();
    });

    $(".alants").on("click", function() {
        $(".container_all-amenitles").show();
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


    // -------- reserva --------
    $(".rscrm").on("click", function() {
        $(".container_reserve-confirm").show();
        animateTopModals();
    })
});

// btnAboutSpace.onclick = (() => {
//     containerAboutSpace.style.display = "flex";
//     bodyHtml.style.overflow = "hidden";
// })

// btnContactUser.onclick = (() => {
//     containerContactUser.style.display = "flex";
//     bodyHtml.style.overflow = "hidden";
// })

// btnHouseSafety.onclick = (() => {
//     containerHouseSafety.style.display = "flex";
//     bodyHtml.style.overflow = "hidden";
// })

// btnHouseRules.onclick = (() => {
//     containerHouseRules.style.display = "flex";
//     bodyHtml.style.overflow = "hidden";
// })

// btn_XEnhancedC.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerEnhancedClean.style.display = "none";
// })

// btn_XAboutSpace.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerAboutSpace.style.display = "none";
// })

// btn_XContactUser.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerContactUser.style.display = "none";
// })

// btn_XHouseSafety.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerHouseSafety.style.display = "none";
// })

// btn_XHouseRules.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerHouseRules.style.display = "none";
// })

// modalEnhancedC.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerEnhancedClean.style.display = "none";
// })

// modalAboutSpace.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerAboutSpace.style.display = "none";
// })

// modalContactUser.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerContactUser.style.display = "none";
// })

// modalHouseSafety.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerHouseSafety.style.display = "none";
// })

// modalHouseRules.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerHouseRules.style.display = "none";
// })

// MODAL DE PAGO CREDITOS NAV
btnGooglePlay.onclick = (() => {
    containerCreditCard.style.display = "none";
    containerGooglePlay.style.display = "block";
})

btnCreditCard.onclick = (() => {
    containerGooglePlay.style.display = "none";
    containerCreditCard.style.display = "block";
})

// MODAL GALLERYS
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
})