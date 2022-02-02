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
});