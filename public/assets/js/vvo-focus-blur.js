$(document).ready(function() {
    // search input border
    // $(document).on("focus click", ".search_content input", function() {
    //     $(this).parents().find(".search_content").addClass("ipt_search-focus");
    // }).on("blur", ".search_content input", function() {
    //     $(this).parents().find(".search_content").removeClass("ipt_search-focus");
    // });
    searchInputFocusIcon();
    function searchInputFocusIcon() {
        inputCont = $(".search_content");

        $.each(inputCont, function(value, index) {
            $(document).on("focus click", ".search_content input", function() {
                $(this).parents().find(index).eq(value).addClass("ipt_search-focus");
            }).on("blur", ".search_content input", function() {
                $(this).parents().find(index).eq(value).removeClass("ipt_search-focus");
            });
        });
    }
});