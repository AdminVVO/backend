// loading skeleton
$(document).ready(skeleton);
skeleton();
function skeleton() {
    let loadings = $(".skeleton");
    // var opc = .6;

    function renderCard() {
        for (loading of loadings) {
            // $(loading).fadeTo("slow", opc, function() {
            //     $(this).css({'opacity': ''}).removeClass("skeleton");
            // });
            
            $(loading).removeClass("skeleton skeleton_card skeleton_txt");
            // loading.classList.remove("skeleton");
        }
    }

    // window.onload = function() {
    //     renderCard();
    // }

    $(window).bind("load", function() {
        renderCard();
    });

    $(loadings).addClass("transition");
}