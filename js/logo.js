$(window).load(function() {
    $('#logo').css('right', '50px');
});

function logoShadow() {
    if($('#logoType').attr('class') == "custom") {
        $('#logoType').css('text-shadow', '0 -10px 10px rgba(0, 0, 0, .3)');
        setTimeout(function(){$('#logoType').css('text-shadow', '5px 0 10px rgba(0, 0, 0, .3)');}, 300);
        $('#logoType').attr('class', 'active');
    } else {
        $('#logoType').css('text-shadow', '0 -10px 10px rgba(0, 0, 0, .3)');
        setTimeout(function(){$('#logoType').css('text-shadow', '-5px 0 10px rgba(0, 0, 0, .3)');}, 200);
        $('#logoType').attr('class', 'custom');
    }
}