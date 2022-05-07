$(document).ready(function() {
    $(".btnOptionsChats").on("click", function() {
        $(this).toggleClass("active");
    });


    const $hamburIconMsg = $(".contentIconHambur3");
    $(document).mouseup(e => {
        if (!$hamburIconMsg.is(e.target) && $hamburIconMsg.has(e.target).length === 0) {
            $hamburIconMsg.removeClass('active');
        }
    });
    $(".showMdlsHamburMsg").on("click", function() {
        let toggleClass = $(this).parent($hamburIconMsg).hasClass('active') ? true : false;
        $hamburIconMsg.removeClass("active");
    
        if (!toggleClass) {
            $(this).parent($hamburIconMsg).toggleClass("active");
        }
    });

    $(".popup ul").on("click", function() {
        $(this).siblings("ul.active").removeClass("active");
        $(this).addClass("active");

        $hamburIconMsg.removeClass("active");
    });
});