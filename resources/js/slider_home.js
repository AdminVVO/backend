//JS FRANK



$(document).ready(function(){
    
    $(".content-dots span.dot:first-child").addClass("dot_active");
    $(".card_img > img:first-child").addClass("card_img_active");  
    
    
     
    $(document).on("click", ".content-dots span.dot", function() {
    // $(".content-dots span.dot").on("click",function(){
        var index_dot = $(this).index();
        $(this).siblings("span.dot_active").removeClass("dot_active");   
        $(this).addClass("dot_active");

        $(this).parents(".card_info").siblings(".card_img").children("img.card_img_active").removeClass("card_img_active");  
        $(this).parents(".card_info").siblings(".card_img").children("img").eq(index_dot).addClass("card_img_active");    
    });
    
    $(document).on("click", ".content-dots > span, .card_love", function() {
        return false;
    });
    
    
    $('.caroursel_home').owlCarousel({
        loop: true,
        items: 5,
        nav: true,
        mouseDrag: false,
        autoWidth: true,
        responsive: {
            0:{
                items: 1,
                autoWidth: false
            },

            500:{
                items: 2,
                margin: 25,
            },

            1400: {
                margin: 35
            }
        }
    })

    
    $(".owl-item.active:first").children(".card_items").addClass("card_items_active"); 
    $(".caroursel_home .owl-nav button.owl-next").on("click",function(){
        $(".owl-item.active").children(".card_items").removeClass("card_items_active");
        $(".owl-item.active:first").children(".card_items").addClass("card_items_active"); 
        
    })  
    $(".caroursel_home .owl-nav button.owl-prev").on("click",function(){
        $(".owl-item.active").children(".card_items").removeClass("card_items_active");
        $(".owl-item.active:first").children(".card_items").addClass("card_items_active"); 
        
    })  
}); 


