// ANIMATION LOADING BTNS
// let btns_Modals = document.querySelectorAll('.btns-modals');
// btns_Modals.forEach((item)=>{
//     item.addEventListener('click', (evt)=>{
//         evt.target.classList.add('activeLoading')
//     })
// })

$(document).ready(function() {
    $('.content_leng').click(function() {
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
})


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
