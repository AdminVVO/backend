$(document).ready(function() {
    showPhotoGallery();
    function showPhotoGallery() {
        if ($(this).width() >= 900) {
            var breakpoint;
            var breakpointController = {
                init: function() {
                    var self = this;
                
                    $(window).resize(function () {
                        self.refresh();
                    }).resize();

                    return $(this);
                },
                
                refresh: function() {
                    var value = window.getComputedStyle(document.querySelector('body'), ':before').getPropertyValue('content').replace(/\"/g, '');
                
                    if (value !== breakpoint) {
                        breakpoint = value;
                    }
                }
            }

            var $btnPrev = $('._cbtnbottom.prev');
            var $btnNext = $('._cbtnbottom.next');
            var $slider = $('.content-gallery ._cgprelright ._w');

            var totalItems = $('.content-gallery ._cgprelright ._pbkgallery').length - 1;
            var index = 0;
            var margin = 10;
            var max;

            function move(index, animated) {
                var $item = $('.content-gallery ._cgprelright ._pbkgallery').eq(index);
                var offset = $item.position().top;
            
                if (animated === true) {
                    $slider.animate({
                        top: (offset * -1)
                    }, 'fast');
                } else {
                    $slider.css('top', (offset * -1));
                }
            };

            function recalculateButtons(index) {
                if (index > 0) {
                    $btnPrev.attr('disabled', false).css({'top': '0'});
                } else {
                    $btnPrev.attr('disabled', true).css({'top': '-100rem'});
                }
            
                if (index < max) {
                    $btnNext.attr('disabled', false).css({'bottom': '0'});
                } else {
                    $btnNext.attr('disabled', true).css({'bottom': '-100rem'});
                } 
            };

            function doMove(step) {
                var animated = step !== 0;
                var itemsWindow;
            
                if (breakpoint === 'bigdesktop') {        
                    itemsWindow = 1;
                } else {
                    itemsWindow = 3;
                }
            
                max = totalItems - itemsWindow + 1;
                index = index + step;
            
                if (index > max) {
                    doMove(-1);
                } else {
                    move(index, animated);
                    recalculateButtons(index);
                }
            }; 

            var sliderObject = {
                init: function() {
                    $btnPrev.on("click", function() {
                        doMove(-1);
                    });
                    
                    $btnNext.on("click", function() {
                        doMove(1);
                    });
                    
                    $(window).on('resize', function () {
                        doMove(0);
                    }).resize();
                }
            }

            breakpointController.init();
            sliderObject.init();
            // var element = $('.content-gallery ._cgprelright ._pbkgallery');
            // var slider = $('.content-gallery ._cgprelright ._w');
            // var sliderWrapper = $('.content-gallery ._cgprelright');
            // var totalHeight = sliderWrapper.innerHeight();
            // var elementHeight = element.outerHeight();
            // var sliderHeight = 0;
            // var newPositionSlideY = 0;
    
            // sliderWrapper.append('<div class="_cbtnbottom prev"><button type="button" class="_sbtn prev-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div><div class="_cbtnbottom next"><button type="button" class="_sbtn next-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div>');
        
            // element.each(function() {
            //     sliderHeight = sliderHeight + $(this).outerHeight() + 1;
            // });
        
            // slider.css({
            //     'height': sliderHeight
            // });
        
            // $('.content-gallery .next-photo').click(function() {
            //     if (newPositionSlideY >= (totalHeight - sliderHeight)) {
            //         newPositionSlideY = newPositionSlideY - elementHeight;
            //         slider.css({
            //             'top' : newPositionSlideY
            //         }, check());
            //     };
            // });
        
            // $('.content-gallery .prev-photo').click(function() {
            //     if (newPositionSlideY >=- sliderHeight) {
            //         newPositionSlideY = newPositionSlideY + elementHeight;
            //         slider.css({
            //             'top' : newPositionSlideY
            //         }, check());
            //     };
            // });
        
            // function check() {;
            //     if (sliderHeight >= totalHeight && newPositionSlideY > (totalHeight - sliderHeight)) {
            //         $('._cbtnbottom.next').css({
            //             'bottom' : 0
            //         });
            //     } else {
            //         $('._cbtnbottom.next').css({
            //             'bottom' : -$(this).width()
            //         });
            //     };
            
            //     if (newPositionSlideY < 0){
            //         $('._cbtnbottom.prev').css({
            //             'top' : 0
            //         });
            //     } else {
            //         $('._cbtnbottom.prev').css({
            //             'top' : -$(this).width()
            //         });
            //     };
            // };
        
            // $(window).resize(function() {
            //     totalHeight = sliderWrapper.innerHeight();
            //     check();
            // });
    
            // check();
        } else {
            var breakpoint;
            var breakpointController = {
                init: function() {
                    var self = this;
                
                    $(window).resize(function () {
                        self.refresh();
                    }).resize();

                    return $(this);
                },
                
                refresh: function() {
                    var value = window.getComputedStyle(document.querySelector('body'), ':before').getPropertyValue('content').replace(/\"/g, '');
                
                    if (value !== breakpoint) {
                        breakpoint = value;
                    }
                }
            }

            var $btnPrev = $('._cbtnbottom.prev');
            var $btnNext = $('._cbtnbottom.next');
            var $slider = $('.content-gallery ._cgprelright ._w');

            var totalItems = $('.content-gallery ._cgprelright ._pbkgallery').length - 1;
            var index = 0;
            var margin = 10;
            var max;

            function move(index, animated) {
                var $item = $('.content-gallery ._cgprelright ._pbkgallery').eq(index);
                var offset = $item.position().left;
            
                if (animated === true) {
                    $slider.animate({
                        left: (offset * -1)
                    }, 'fast');
                } else {
                    $slider.css('left', (offset * -1));
                }
            };

            function recalculateButtons(index) {
                if (index > 0) {
                    $btnPrev.attr('disabled', false).css({'left': '0'});
                } else {
                    $btnPrev.attr('disabled', true).css({'left': '-100rem'});
                }
            
                if (index < max) {
                    $btnNext.attr('disabled', false).css({'right': '0'});
                } else {
                    $btnNext.attr('disabled', true).css({'right': '-100rem'});
                } 
            };

            function doMove(step) {
                var animated = step !== 0;
                var itemsWindow;
            
                if (breakpoint === 'bigdesktop') {        
                    itemsWindow = 1;
                } else {
                    itemsWindow = 2;
                }
            
                max = totalItems - itemsWindow + 1;
                index = index + step;
            
                if (index > max) {
                    doMove(-1);
                } else {
                    move(index, animated);
                    recalculateButtons(index);
                }
            }; 

            var sliderObject = {
                init: function() {
                    $btnPrev.on("click", function() {
                        doMove(-1);
                    });
                    
                    $btnNext.on("click", function() {
                        doMove(1);
                    });
                    
                    $(window).on('resize', function () {
                        doMove(0);
                    }).resize();
                }
            }

            breakpointController.init();
            sliderObject.init();
            // var element = $('.content-gallery ._cgprelright ._pbkgallery');
            // var slider = $('.content-gallery ._cgprelright ._w');
            // var sliderWrapper = $('.content-gallery ._cgprelright');
            // var totalWidth = sliderWrapper.innerWidth();
            // var elementWidth = element.outerWidth();
            // var sliderWidth = 0;
            // var newPositionSlideX = 0;
    
            // sliderWrapper.append('<div class="_cbtnbottom prev"><button type="button" class="_sbtn prev-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div><div class="_cbtnbottom next"><button type="button" class="_sbtn next-photo"><span class="_c9ajsd" style="font-size: 16px;"><svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652"><path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path></svg></span></button></div>');
        
            // element.each(function() {
            //     sliderWidth = sliderWidth + $(this).outerWidth() + 1;
            // });
        
            // slider.css({
            //     'width': sliderWidth
            // });
        
            // $('.content-gallery .next-photo').click(function() {
            //     if (newPositionSlideX > (totalWidth - sliderWidth)) {
            //         newPositionSlideX = newPositionSlideX - elementWidth;
            //         slider.css({
            //             'left' : newPositionSlideX
            //         }, check());
            //     };
            // });
        
            // $('.content-gallery .prev-photo').click(function() {
            //     if (newPositionSlideX >=- sliderWidth) {
            //         newPositionSlideX = newPositionSlideX + elementWidth;
            //         slider.css({
            //             'left' : newPositionSlideX
            //         }, check());
            //     };
            // });
        
            // function check() {;
            //     if (sliderWidth >= totalWidth && newPositionSlideX > (totalWidth - sliderWidth)) {
            //         $('._cbtnbottom.next').css({
            //             'right' : 0
            //         });
            //     } else {
            //         $('._cbtnbottom.next').css({
            //             'right' : -$(this).width()
            //         });
            //     };
            
            //     if (newPositionSlideX < 0){
            //         $('._cbtnbottom.prev').css({
            //             'left' : 0
            //         });
            //     } else {
            //         $('._cbtnbottom.prev').css({
            //             'left' : -$(this).width()
            //         });
            //     };
            // };
        
            // $(window).resize(function() {
            //     totalWidth = sliderWrapper.innerWidth();
            //     check();
            // });
    
            // check();
        }
    };

    carouselBedroom();
    function carouselBedroom() {
        var breakpoint;
        var breakpointController = {
            init: function() {
                var self = this;
            
                $(window).resize(function () {
                    self.refresh();
                }).resize();

                return $(this);
            },
            
            refresh: function() {
                var value = window.getComputedStyle(document.querySelector('body'), ':before').getPropertyValue('content').replace(/\"/g, '');
            
                if (value !== breakpoint) {
                    breakpoint = value;
                }
            }
        }

        var $btnPrev = $(".nav_bedroom .prev");
        var $btnNext = $(".nav_bedroom .next");
        var $slider = $("._flex-slider");

        var totalItems = $("._imgcpe").length - 1;
        var index = 0;
        var margin = 10;
        var max;

        function move(index, animated) {
            var $item = $("._imgcpe").eq(index);
            var offset = $item.position().left;
        
            if (animated === true) {
                $slider.animate({
                    left: (offset * -1)
                }, 'fast');
            } else {
                $slider.css('left', (offset * -1));
            }
        };

        function recalculateButtons(index) {
            if (index > 0) {
                $btnPrev.attr('disabled', false).css({'left': '0'});
            } else {
                $btnPrev.attr('disabled', true).css({'left': '-100rem'});
            }
        
            if (index < max) {
                $btnNext.attr('disabled', false).css({'right': '0'});
            } else {
                $btnNext.attr('disabled', true).css({'right': '-100rem'});
            } 
        };

        function doMove(step) {
            var animated = step !== 0;
            var itemsWindow;

            if (breakpoint === 'bigdesktop') {        
                itemsWindow = 1;
            } else {
                itemsWindow = 2;
            }
        
            max = totalItems - itemsWindow + 1;
            index = index + step;
        
            if (index > max) {
                doMove(-1);
            } else {
                move(index, animated);
                recalculateButtons(index);
            }
        }; 

        var sliderObject = {
            init: function() {
                $btnPrev.on("click", function() {
                    doMove(-1);
                });
                
                $btnNext.on("click", function() {
                    doMove(1);
                });
                
                $(window).on('resize', function () {
                    doMove(0);
                }).resize();
            }
        }

        breakpointController.init();
        sliderObject.init();
    }
});