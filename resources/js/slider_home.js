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



    //Carousel jQuery
    carousel3D();

    function carousel3D() {
        var sliders = [];
        var delay = 4000;
        var timerId;
        var remaining;
        var start;
        var current_playing;
        // restore user slider img and title or descriptions
        $(".features-slides").find("a").each(function () {
            this.className += "card_items slider-hide";
            sliders.push({ html: this })
        });
        // initialize the siliders
        function slider_init() {
            $(".features-slides").css('display', 'flex');
            slider_display(sliders, 0);
            slider_loop(sliders, -1, delay);
        }
        // display 5 img at a time
        function slider_display(A, i) {
            if (i < 0) {
                i = A.length - 1;
            }
            current_playing = i;
            // mute the one img before
            A[(i + A.length + 3) % A.length].html.className += " slider-hide";
            // display 5 img after the muted one
            A[(i + A.length) % A.length].html.className = "card_items card_items_active";
            A[(i + A.length - 1) % A.length].html.className = "card_items slider-left-1";
            A[(i + A.length - 2) % A.length].html.className = "card_items slider-left-2";
            A[(i + A.length + 1) % A.length].html.className = "card_items slider-right-1";
            A[(i + A.length + 2) % A.length].html.className = "card_items slider-right-2";

        }
        // slider
        function slider_loop(A, i, remaining) {
            start = new Date();
            if (i < 0) {
                i = A.length - 1;
            }
        }

        $(".cards_content").hover(function () {
            window.clearTimeout(timerId);
            remaining = delay - (new Date() - start);
            $(".features-slide_navs .prev-btn").on("click",function () {
                current_playing++;
                slider_display(sliders, current_playing);
            });
            $(".features-slide_navs .next-btn").on("click",function () {
                current_playing--;
                slider_display(sliders, current_playing);
            });
        }, function () {
            slider_loop(sliders, current_playing, remaining);
            $(".features-slide_navs .prev-btn").unbind("click");
            $(".features-slide_navs .next-btn").unbind("click");
        });


        // launch slider
        slider_init();
    }
    

    // $(".js-btnNext").on("click", function() {
    //     // var width_card_pano = $(".card_items_active").width();
    //     // var gap_cont = $(".cont").css("gap");
    //     // gap_cont = parseInt(gap_cont, 10);

    //     // width_card_pano = width_card_pano + gap_cont;

    //     // $(".cont").animate({left: "-"+width_card_pano+"px"},500);
    //     // $(".cont").animate({left: "0px"}, 500);
    //     $(".js-stats a.card_items:first-child").appendTo(".js-stats");
    //     $(".cont a.card_items").removeClass("card_items_active")
    //     $(".cont a.card_items:first-child").addClass("card_items_active");
    // });

    // $(".js-btnPrev").on("click", function() {
    //     $(".js-stats a.card_items:last-child").insertBefore(".js-stats a.card_items:first-child");
    //     $(".cont a.card_items").removeClass("card_items_active")
    //     $(".cont a.card_items:first-child").addClass("card_items_active");
    // });

    
    // $(".owl-item.active:first").children(".card_items").addClass("card_items_active"); 
    // $(".caroursel_home .owl-nav button.owl-next").on("click",function(){
    //     $(".owl-item.active").children(".card_items").removeClass("card_items_active");
    //     $(".owl-item.active:first").children(".card_items").addClass("card_items_active"); 
        
    // })  
    // $(".caroursel_home .owl-nav button.owl-prev").on("click",function(){
    //     $(".owl-item.active").children(".card_items").removeClass("card_items_active");
    //     $(".owl-item.active:first").children(".card_items").addClass("card_items_active"); 
        
    // })  
}); 


