$(document).ready(function() {
    createListingSlider();
    function createListingSlider() {
        var element = $('._gap-flex .pd-r13');
        var slider = $('._gap-flex');
        var sliderWrapper = $('.content_listing ._bwidth');
        var totalWidth = sliderWrapper.innerWidth();
        var elementWidth = element.outerWidth();
        var sliderWidth = 0;
        var newPositionSlideX = 0;

        sliderWrapper.append('<div class="nav__createListing"><div class="prev"><button type="button" class="prev-slide"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path></g></svg></button></div><div class="next"><button type="button" class="next-slide"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path></g></svg></button></div></div>');
    
        element.each(function(){
            sliderWidth = sliderWidth + $(this).outerWidth() + 1;
        });
    
        slider.css({
            'width': sliderWidth
        });

        $('.nav__createListing .next-slide').click(function() {
            if (newPositionSlideX > (totalWidth - sliderWidth)) {
                newPositionSlideX = newPositionSlideX - elementWidth;
                
                slider.css({
                    'left' : newPositionSlideX
                }, check());
            };
        });
    
        $('.nav__createListing .prev-slide').click(function() {
            if (newPositionSlideX >= -sliderWidth) {
                newPositionSlideX = newPositionSlideX + elementWidth;
                
                slider.css({
                    'left' : newPositionSlideX
                }, check());
            };
        });
    
        function check() {
            if (sliderWidth >= totalWidth && newPositionSlideX > (totalWidth - sliderWidth)) {
                $('.nav__createListing .next').css({
                    'right' : '4px'
                }).find("button").attr("disabled", false);
            } else {
                $('.nav__createListing .next').css({
                    'right' : -$(this).width()
                }).find("button").attr("disabled", true);
            };
        
            if( newPositionSlideX < 0){
                $('.nav__createListing .prev').css({
                    'left' : '4px'
                }).find("button").attr("disabled", false);
            } else {
                $('.nav__createListing .prev').css({
                    'left' : -$(this).width()
                }).find("button").attr("disabled", true);
            };
        };
    
        $(window).resize(function() {
            totalWidth = sliderWrapper.innerWidth();
            check();
        });

        check();
    }
});