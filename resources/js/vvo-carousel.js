$(document).ready(function() {
    // internal.php
    $(".carousel_bedroom").owlCarousel({
        nav: true,
        dots: false,
        margin: 25,
        // mouseDrag: true,
        autoWidth: true
    });
    
    $(".js_navlinksreserve").owlCarousel({
        nav: true,
        dots: false,
        // mouseDrag: true,
        autoWidth: true,
        navText: [
            '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path></g></svg>',
            '<svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path></g></svg>'
        ],
        navContainer: ".navowlplaywith"
    });
    

    // tabs nav link
    let tabContainer = $(this).find(".js__cont_nav");
    $.each(tabContainer, function(value, index) {
        let slider = $(this).parents().find(".tab-container").eq(value);
        let element = $(this).parents().find(".tab-container").eq(value).find(".li__links-txt");
        var sliderWrapper = $(this).parents().find(index);
        let totalWidth = sliderWrapper.innerWidth();
        let elementWidth = element.outerWidth();
        let sliderWidth = 0;
        // let positionSlideX = slider.position().left;
        let newPositionSlideX = 0;

        sliderWrapper.append('<div class="vvo_nav_flech prev"><button type="button" class="prev-slide"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path></g></svg></button></div><div class="vvo_nav_flech next"><button type="button" class="next-slide"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path></g></svg></button></div>');

        element.each(function() {
            sliderWidth = sliderWidth + $(this).outerWidth() + 1;
        });
    
        slider.css({
            'width': sliderWidth
        });

        sliderWrapper.find(".next-slide").on("click", function() {
            if (newPositionSlideX > (totalWidth-sliderWidth)) {
                newPositionSlideX = newPositionSlideX - elementWidth;
                slider.css({
                    'left' : newPositionSlideX
                }, check());
            };
        });
    
        sliderWrapper.find(".prev-slide").on("click", function() {
            if (newPositionSlideX >= -sliderWidth) {
                newPositionSlideX = newPositionSlideX + elementWidth;
                slider.css({
                    'left' : newPositionSlideX
                }, check());
            };
        });

        function check() {
            if (sliderWidth >= totalWidth && newPositionSlideX > (totalWidth-sliderWidth)) {
                $(".vvo_nav_flech.next").eq(value).css({
                    'right' : 0
                });
            } else {
                $(".vvo_nav_flech.next").eq(value).css({
                    'right' : -$(this).width()
                });
            };
        
            if (newPositionSlideX < 0) {
                $(".vvo_nav_flech.prev").eq(value).css({
                    'left' : 0
                });
            } else {
                $(".vvo_nav_flech.prev").eq(value).css({
                    'left' : -$(this).width()
                });
            };
        };
    
        $(window).bind("resize", function() {
            totalWidth = sliderWrapper.innerWidth();
            check();
        });

        check();
    });

    // navLinkCarousel();
    function navLinkCarousel() {
        var index_this = $(this).index();

        // $(this).parents(".card_info").siblings(".card_img").children("img").eq(index_dot).addClass("card_img_active");    

        var element = $('.tab-container .li__links-txt');
        var slider = $('.tab-container');
        var sliderWrapper = $('.cont_nav');
        var totalWidth = sliderWrapper.innerWidth();
        var elementWidth = element.outerWidth();
        var sliderWidth = 0;
        var positionSlideX = slider.position().left;
        var newPositionSlideX = 0;

        console.log(sliderWrapper);
    
        sliderWrapper.append('<div class="vvo_nav_flech prev"><button type="button" class="prev-slide"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path></g></svg></button></div><div class="vvo_nav_flech next"><button type="button" class="next-slide"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path></g></svg></button></div>');
    
        element.each(function(){
            sliderWidth = sliderWidth + $(this).outerWidth() + 1;
        });
    
        slider.css({
            'width': sliderWidth
        });
    
        $('.next-slide').click(function(){
            if(newPositionSlideX>(totalWidth-sliderWidth)){
                newPositionSlideX = newPositionSlideX - elementWidth;
                slider.css({
                    'left' : newPositionSlideX
                }, check());
            };
        });
    
        $('.prev-slide').click(function(){
            if(newPositionSlideX>=-sliderWidth){
                newPositionSlideX = newPositionSlideX + elementWidth;
                    slider.css({
                'left' : newPositionSlideX
                }, check());
            };
        });
    
        function check() {;
            if( sliderWidth >= totalWidth && newPositionSlideX > (totalWidth-sliderWidth)){
                $('.vvo_nav_flech.next').css({
                    'right' : 0
                });
            } else {
                $('.vvo_nav_flech.next').css({
                    'right' : -$(this).width()
                });
            };
        
            if( newPositionSlideX < 0){
                $('.vvo_nav_flech.prev').css({
                    'left' : 0
                });
            } else {
                $('.vvo_nav_flech.prev').css({
                    'left' : -$(this).width()
                });
            };
        };
    
        $(window).resize(function(){
            totalWidth = sliderWrapper.innerWidth();
            check();
        });

        check();
    }

    // search.php
    cardContentInf();
    function cardContentInf() {
        var slides = $(".vvo_carousel_search .card_items");
        var totalWidthOfOne = $(".vvo_carousel_search .card_items").first().outerWidth(true);
        $(".vvo_cards_items .next").on("click", function(){
            slides = $(".vvo_carousel_search .card_items");
            $(".vvo_carousel_search .card_items").first().css('margin-left','-' + totalWidthOfOne + 'px');
            setTimeout(function(){
                $(".vvo_carousel_search .card_items").first().removeAttr('style');
                slides.last().after(slides.first());
            },500);
            
        });
        $(".vvo_cards_items .prev").on("click", function(){
            slides = $(".vvo_carousel_search .card_items");
            $(".vvo_carousel_search .card_items").last().css('margin-left','-' + totalWidthOfOne + 'px');
            slides.first().before(slides.last());
            setTimeout(function(){
                $(".vvo_carousel_search .card_items").first().removeAttr('style'); 
            },500);
        });
    }
    // $(".vvo_carousel_search").owlCarousel({
    //     loop: false,
    //     nav: true,
    //     rewind: true,
    //     // mouseDrag: false,
    //     autoWidth: false,
    //     responsive: {
    //         0: {
    //             margin: 25,
    //             items: 1
    //         },

    //         610: {
    //             margin: 25,
    //             items: 2
    //         },

    //         970: {
    //             margin: 25,
    //             items: 3
    //         },

    //         1200: {
    //             margin: 25,
    //             items: 4
    //         },

    //         1550: {
    //             margin: 35,
    //             items: 5
    //         },

    //         1900: {
    //             margin: 35,
    //             items: 6
    //         },

    //         2230: {
    //             margin: 35,
    //             items: 7
    //         }
    //     }
    // });
});