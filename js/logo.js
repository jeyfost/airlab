$(window).load(function() {
    $('#logo').css('right', '50px');
});

function logoShadow() {
    if($('#logoType').attr('class') == "custom") {
        $('#logoType').css('text-shadow', '5px 0 5px rgba(15, 90, 187, .3)');
        $('#logoType').attr('class', 'active');
    } else {
        $('#logoType').css('text-shadow', '-5px 0 10px rgba(0, 0, 0, .3)');
        $('#logoType').attr('class', 'custom');
    }
}