const $vvo_select = $(".vvo-select");
$.when($(".vvo-select select").hide("fast", function(){ 
  
    var select = $(this);
    var selected = select.find(":selected").text()
    var options = "";
    
    select.find("option").each( function(){
        options += '<li id="' + $(this).val() + '">' + $(this).text() + '</li>';
    });
    
    select.after('<div class="new-select"><span>' + selected + '</span><ul>' + options + '</ul></div>');

})).done(function(){
    $(".new-select span").on("click", function(){
        // $(this).parents(".vvo-select").addClass("prueba");
        // $(this).parent().find("ul").toggle("fast");

        let toggleClass = $(this).parents(".vvo-select").hasClass("active") ? true : false;
        $(".vvo-select").removeClass("active");

        if (!toggleClass) {
            $(this).parents(".vvo-select").toggleClass("active");
        }
    });
    
    $(".new-select li").on("click", function(){
        $(this).closest(".old-select").find("select").val($(this).attr("id"));
        $(this).closest(".new-select").find("span").text($(this).text());
        // $(this).parent().slideUp("fast");
        $(this).parents(".vvo-select").removeClass("active");
    });
});

$(document).mouseup(e => {
    if (!$vvo_select.is(e.target) && $vvo_select.has(e.target).length === 0) {
        $vvo_select.removeClass("active");
    }
});