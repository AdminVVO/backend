// ANIMATION LOADING BTNS
// let btns_Modals = document.querySelectorAll('.btns-modals');
// btns_Modals.forEach((item)=>{
//     item.addEventListener('click', (evt)=>{
//         evt.target.classList.add('activeLoading')
//     })
// })

// ACTIVE MODAL LENGUAGUE
let menu_wrapper = document.querySelector("._lgcth");
let menu_bar = document.querySelector(".content_hidden_currency");
let setting_item = document.querySelector(".currency-click");
let back_help_btn = document.querySelector(".leng-click");

setting_item.onclick = (() => {
    menu_bar.style.marginLeft = "0";
    menu_bar.style.display = "block";
    menu_wrapper.style.display = "none";
});

back_help_btn.onclick = (() => {
    menu_bar.style.marginLeft = "";
    menu_bar.style.display = "none"
    menu_wrapper.style.display = "block";
});


// ------------- ACTIVE JQUERY -------------
$(document).ready(function() {
    $('.nav-leng ul li .btn-a').click(function(){
       $('.btn-a').removeClass("activ");
       $(this).addClass("activ");
    });
});

$(document).ready(function() {
    $('.content_leng-choose .flex_content .btn_leng').click(function(){
       $('.btn_leng').removeClass("active");
       $(this).addClass("active");
    });
});

$(document).ready(function() {
    $('.content_hidden_currency .flex_content .btn_choose').click(function(){
       $('.btn_choose').removeClass("active");
       $(this).addClass("active");
    });
});


// LENGUAGE ACTIVE MODAL
let bodyHtml = document.querySelector(".page-category");
let containerLang = document.querySelector(".container-leng");
let containerWelcome = document.querySelector(".container-welcome");

document.getElementById("btnLeng").addEventListener("click", function() {
    containerLang.style.display = "block";
    bodyHtml.style.overflow = "hidden";
});

document.querySelector(".x").addEventListener("click", function() {
    containerLang.style.display = "none";
    bodyHtml.style.overflow = "auto";
});

// WELCOME LOGIN ACTIVE MDAL
// document.getElementById("butnLogin").addEventListener("click", function() {
//     document.querySelector(".container-welcome").style.display = "flex";
// })

// document.querySelector(".close-x").addEventListener("click", function() {
//     containerWelcome.style.display = "none";
//     bodyHtml.style.overflow = "auto";
// })

document.querySelector(".modal-lang").addEventListener("click", function() {
    containerLang.style.display = "none";
    bodyHtml.style.overflow = "auto";
})

document.querySelector(".modal-welcome").addEventListener("click", function() {
    containerWelcome.style.display = "none";
    bodyHtml.style.overflow = "auto";
})




