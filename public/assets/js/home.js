$(document).ready(function(){
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
            $(this).addClass("card_items slider-hide");
            sliders.push({ html: this });
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
            A[(i + A.length) % A.length].html.className = "card_items card_items_active skeleton_card transition";
            A[(i + A.length - 1) % A.length].html.className = "card_items slider-left-1 skeleton_card transition";
            A[(i + A.length - 2) % A.length].html.className = "card_items slider-left-2 skeleton_card transition";
            A[(i + A.length + 1) % A.length].html.className = "card_items slider-right-1 skeleton_card transition";
            A[(i + A.length + 2) % A.length].html.className = "card_items slider-right-2 skeleton_card transition";
        }
        // slider
        function slider_loop(A, i) {
            start = new Date();
            if (i < 0) {
                i = A.length - 1;
            }
        }

        // $(".cards_content").hover(function () {
            // window.clearTimeout(timerId);
            $(document).on("click", ".features-slide_navs .next-btn", function() {
                current_playing++;
                slider_display(sliders, current_playing);
            });
            $(document).on("click", ".features-slide_navs .prev-btn", function() {
                current_playing--;
                slider_display(sliders, current_playing);
            });
        // }, function () {
        //     slider_loop(sliders, current_playing);
        //     $(".features-slide_navs .prev-btn").unbind("click");
        //     $(".features-slide_navs .next-btn").unbind("click");
        // });


        // launch slider
        slider_init();
    }
    
    // var vvoRangePicker = new Lightpick({
    //     field: document.getElementById("check_in"),
    //     secondField: document.getElementById('check_out'),
    //     lang: 'en',
    //     format: 'MMM DD',
    //     selectForward: true,
    //     singleDate: false,
    //     // hoveringTooltip: true,
    //     numberOfMonths: 2,
    //     // repick: true,
    //     minDate: moment().startOf('MMMM DD, YYYY').add(0, 'day'),
    //     footer: true,
    //     locale: {
    //         buttons: {
    //             prev: '',
    //             next: '',
    //             reset: 'Clear dates',
    //             apply: 'Save'
    //         }
    //     }
    // });
    // vvoRangePicker.el.classList.add("vvo_range_picker");
    // vvoRangePicker.el.prototype = {
    //     config: function(options) {
    //         console.log(options);
    //     }
    // }
    
    // var pickerdateBirth = new Lightpick({
    //     field: document.getElementById("js__dateBirth"),
    //     lang: 'en',
    //     format: 'YYYY/MM/DD',
    //     parentEl: '.container_vvo_picker .popup_vvo_picker',
    //     onSelect: function(){
    //         $(".container_vvo_picker").hide();
    //     }
    // });
    // pickerdateBirth.el.classList.add("vvo_picker");
    // pickerdateBirth.el.style.zIndex = "9999";

    const picker = new easepick.create({
        element: document.getElementById("check_in"),
        css: [
          'assets/css/easepick-vvo.css',
          'assets/css/estilos.css'
        ],
        zIndex: 29,
        plugins: ['RangePlugin'],
        grid: 2,
        calendars: 2,
        autoApply: false
    });

    $(document).ready(function() {
        $(".vvo_range_picker").removeClass("fixed");
        
        $(window).scroll(function() {
            if ($(this).width() > 1450) {
                if ($(this).scrollTop() > 710 ){
                    $(".vvo_range_picker").addClass("fixed");
                } else {
                    $(".vvo_range_picker").removeClass("fixed");
                }
            }
        });

        $(window).bind("resize", function() {
            resize();
        });

        resize();

        function resize() {
            if ($(this).width() < 1450) {
                $(".vvo_range_picker").removeClass("fixed");
            }
        };
    });

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


