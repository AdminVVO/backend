// ACTIVE NAVBAR
$(document).ready(function() {
    $(".nav__links-txt .li__links-txt .tabs_items").click(function(){
       $(".tabs_items").removeClass("active_tabs");
       $(this).addClass("active_tabs");
    });
});

// let bodyHtml = document.querySelector(".page-category");
// let modalReserveConfirm = document.querySelector(".modal-rscrm");

// let containerReserveConfirm = document.querySelector(".container_reserve-confirm");

// let btn_XReserveConfirm = document.querySelector(".close-x_rscrm");

// let btnReserveConfirm = document.querySelector(".rscrm");
// let btnAsideReserve = document.querySelector("._asidereserv");

// modalReserveConfirm.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerReserveConfirm.style.display = "none";
// })

// btnAsideReserve.onclick = (() => {
//     containerReserveConfirm.style.display = "flex";
//     bodyHtml.style.overflow = "hidden";
// })

// btnReserveConfirm.onclick = (() => {
//     containerReserveConfirm.style.display = "flex";
//     bodyHtml.style.overflow = "hidden";
// })

// btn_XReserveConfirm.onclick = (() => {
//     bodyHtml.style.overflow = "auto";
//     containerReserveConfirm.style.display = "none";
// })