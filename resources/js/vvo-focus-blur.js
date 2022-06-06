$(document).ready(function() {
    // search input border
    $(document).on("focus click", ".search_content input", function() {
        $(this).parents().find(".search_content").addClass("ipt_search-focus");
    }).on("blur", ".search_content input", function() {
        $(this).parents().find(".search_content").removeClass("ipt_search-focus");
    });
});