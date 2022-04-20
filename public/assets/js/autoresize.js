autosize();
function autosize(){
    var text = $('.js-msg-type-txt');

    text.each(function(){
        $(this).attr('rows', 1);
        // resize($(this));
    });

    text.on('input', function(){
        resize($(this));
    });
    
    function resize($text) {
        $text.css('height', 'auto');
        $text.css('height', $text[0].scrollHeight + 'px');

        if ($text[0].scrollHeight > 110) {
            $text.css('overflow', 'auto');
        } else {
            $text.css('overflow', 'hidden');
        }
    }
}