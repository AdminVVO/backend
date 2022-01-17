// ACTIVE NAVBAR
$(document).ready(function() {
    $('._navbar-actlist ul li .btn-a_actlist').click(function(){
       $('.btn-a_actlist').removeClass("active");
       $(this).addClass("active");
    });
});