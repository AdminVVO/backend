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

let modalEnhancedC = document.querySelector(".modal-enhancedcl");
let modalAboutSpace = document.querySelector(".modal-abspc");
let modalContactUser = document.querySelector(".modal-ctht");
let modalHouseSafety = document.querySelector(".modal-hesfty");
let modalHouseRules = document.querySelector(".modal-herls");
let modalGalleryModal = document.querySelector(".modal_h-galls");

let containerEnhancedClean = document.querySelector(".container_enhanced-clean");
let containerAboutSpace = document.querySelector(".container_about-space");
let containerContactUser = document.querySelector(".container_contact-host");
let containerHouseSafety = document.querySelector(".container_house-safety");
let containerHouseRules = document.querySelector(".container_house-rules");
let containerCreditCard = document.querySelector("._hiddencreditordebit");
let containerGooglePlay = document.querySelector("._showgplay");
let containerGalleryModal = document.querySelector(".container_gallerys");

let btn_XEnhancedC = document.querySelector(".close-x_enhancedcl");
let btn_XAboutSpace = document.querySelector(".close-x_abspc");
let btn_XContactUser = document.querySelector(".close-x_ctht");
let btn_XHouseSafety = document.querySelector(".close-x_hesfty");
let btn_XHouseRules = document.querySelector(".close-x_herls");
let btn_XGalleryModal = document.querySelector(".btn-x_galls");

let btnEnhancedClean = document.querySelector(".enhancedcl");
let btnAboutSpace = document.querySelector(".abspc");
let btnContactUser = document.querySelector(".ctht");
let btnHouseSafety = document.querySelector(".hesfty");
let btnHouseRules = document.querySelector(".herls");
let btnCreditCard = document.querySelector("._creditcard");
let btnGooglePlay = document.querySelector("._glepay");
let btnGalleryModal = document.querySelector(".btn-show_all-photos");

btnEnhancedClean.onclick = (() => {
    containerEnhancedClean.style.display = "flex";
    bodyHtml.style.overflow = "hidden";
})

btnAboutSpace.onclick = (() => {
    containerAboutSpace.style.display = "flex";
    bodyHtml.style.overflow = "hidden";
})

btnContactUser.onclick = (() => {
    containerContactUser.style.display = "flex";
    bodyHtml.style.overflow = "hidden";
})

btnHouseSafety.onclick = (() => {
    containerHouseSafety.style.display = "flex";
    bodyHtml.style.overflow = "hidden";
})

btnHouseRules.onclick = (() => {
    containerHouseRules.style.display = "flex";
    bodyHtml.style.overflow = "hidden";
})

btn_XEnhancedC.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerEnhancedClean.style.display = "none";
})

btn_XAboutSpace.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerAboutSpace.style.display = "none";
})

btn_XContactUser.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerContactUser.style.display = "none";
})

btn_XHouseSafety.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerHouseSafety.style.display = "none";
})

btn_XHouseRules.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerHouseRules.style.display = "none";
})

modalEnhancedC.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerEnhancedClean.style.display = "none";
})

modalAboutSpace.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerAboutSpace.style.display = "none";
})

modalContactUser.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerContactUser.style.display = "none";
})

modalHouseSafety.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerHouseSafety.style.display = "none";
})

modalHouseRules.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerHouseRules.style.display = "none";
})

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
btnGalleryModal.onclick = (() => {
    containerGalleryModal.style.top = "0";
    containerGalleryModal.style.opacity = "1";
    containerGalleryModal.style.visibility = "visible";

    modalGalleryModal.style.opacity = "1";
    modalGalleryModal.style.overflowX = "auto";

    bodyHtml.style.overflow = "hidden";
})

btn_XGalleryModal.onclick = (() => {
    containerGalleryModal.style.top = "25%";
    containerGalleryModal.style.opacity = "0";
    containerGalleryModal.style.visibility = "hidden";

    modalGalleryModal.style.opacity = "0";
    modalGalleryModal.style.overflowX = "visible";

    bodyHtml.style.overflow = "auto";
})