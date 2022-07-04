$(document).ready(function() {
    // internal.php
    showPhotoGallery();
    function showPhotoGallery() {
        if ($(this).width() >= 900) {
            var element = $('.content-gallery ._cgprelright ._pbkgallery');
            var slider = $('.content-gallery ._cgprelright ._w');
            var sliderWrapper = $('.content-gallery ._cgprelright');
            var totalHeight = sliderWrapper.innerHeight();
            var elementHeight = element.outerHeight();
            var sliderHeight = 0;
            var newPositionSlideY = 0;
    
            sliderWrapper.append('<div class="_cbtnbottom prev"><button type="button" class="_sbtn prev-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div><div class="_cbtnbottom next"><button type="button" class="_sbtn next-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div>');
        
            element.each(function() {
                sliderHeight = sliderHeight + $(this).outerHeight() + 1;
            });
        
            slider.css({
                'height': sliderHeight
            });
        
            $('.content-gallery .next-photo').click(function() {
                if (newPositionSlideY >= (totalHeight - sliderHeight)) {
                    newPositionSlideY = newPositionSlideY - elementHeight;
                    slider.css({
                        'top' : newPositionSlideY
                    }, check());
                };
            });
        
            $('.content-gallery .prev-photo').click(function() {
                if (newPositionSlideY >=- sliderHeight) {
                    newPositionSlideY = newPositionSlideY + elementHeight;
                    slider.css({
                        'top' : newPositionSlideY
                    }, check());
                };
            });
        
            function check() {;
                if (sliderHeight >= totalHeight && newPositionSlideY > (totalHeight - sliderHeight)) {
                    $('._cbtnbottom.next').css({
                        'bottom' : 0
                    });
                } else {
                    $('._cbtnbottom.next').css({
                        'bottom' : -$(this).width()
                    });
                };
            
                if (newPositionSlideY < 0){
                    $('._cbtnbottom.prev').css({
                        'top' : 0
                    });
                } else {
                    $('._cbtnbottom.prev').css({
                        'top' : -$(this).width()
                    });
                };
            };
        
            $(window).resize(function() {
                totalHeight = sliderWrapper.innerHeight();
                check();
            });
    
            check();
        } else {
            var element = $('.content-gallery ._cgprelright ._pbkgallery');
            var slider = $('.content-gallery ._cgprelright ._w');
            var sliderWrapper = $('.content-gallery ._cgprelright');
            var totalWidth = sliderWrapper.innerWidth();
            var elementWidth = element.outerWidth();
            var sliderWidth = 0;
            var newPositionSlideX = 0;
    
            sliderWrapper.append('<div class="_cbtnbottom prev"><button type="button" class="_sbtn prev-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div><div class="_cbtnbottom next"><button type="button" class="_sbtn next-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div>');
        
            element.each(function() {
                sliderWidth = sliderWidth + $(this).outerWidth() + 1;
            });
        
            slider.css({
                'width': sliderWidth
            });
        
            $('.content-gallery .next-photo').click(function() {
                if (newPositionSlideX > (totalWidth - sliderWidth)) {
                    newPositionSlideX = newPositionSlideX - elementWidth;
                    slider.css({
                        'left' : newPositionSlideX
                    }, check());
                };
            });
        
            $('.content-gallery .prev-photo').click(function() {
                if (newPositionSlideX >=- sliderWidth) {
                    newPositionSlideX = newPositionSlideX + elementWidth;
                    slider.css({
                        'left' : newPositionSlideX
                    }, check());
                };
            });
        
            function check() {;
                if (sliderWidth >= totalWidth && newPositionSlideX > (totalWidth - sliderWidth)) {
                    $('._cbtnbottom.next').css({
                        'right' : 0
                    });
                } else {
                    $('._cbtnbottom.next').css({
                        'right' : -$(this).width()
                    });
                };
            
                if (newPositionSlideX < 0){
                    $('._cbtnbottom.prev').css({
                        'left' : 0
                    });
                } else {
                    $('._cbtnbottom.prev').css({
                        'left' : -$(this).width()
                    });
                };
            };
        
            $(window).resize(function() {
                totalWidth = sliderWrapper.innerWidth();
                check();
            });
    
            check();
        }
    };

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