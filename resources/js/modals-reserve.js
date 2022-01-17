// ACTIVE NAVBAR
$(document).ready(function() {
    $('._frever ul li .btn-a_frever').click(function(){
       $('.btn-a_frever').removeClass("activ");
       $(this).addClass("activ");
    });
});


let modalReserveConfirm = document.querySelector(".modal-rscrm");

let containerReserveConfirm = document.querySelector(".container_reserve-confirm");

let btn_XReserveConfirm = document.querySelector(".close-x_rscrm");

let btnReserveConfirm = document.querySelector(".rscrm");
let btnAsideReserve = document.querySelector("._asidereserv");

modalReserveConfirm.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerReserveConfirm.style.display = "none";
})

btnAsideReserve.onclick = (() => {
    containerReserveConfirm.style.display = "flex";
    bodyHtml.style.overflow = "hidden";
})

btnReserveConfirm.onclick = (() => {
    containerReserveConfirm.style.display = "flex";
    bodyHtml.style.overflow = "hidden";
})

btn_XReserveConfirm.onclick = (() => {
    bodyHtml.style.overflow = "auto";
    containerReserveConfirm.style.display = "none";
})