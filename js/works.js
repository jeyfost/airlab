$(window).load(function() {
    $('#works').css('opacity', '1');

    if(document.getElementById('workAbsolute')) {
        $('#workAbsolute').css('opacity', '1');
    }

    if(document.getElementById('workBigContainer')) {
        document.getElementById('workBigContainer').style.height = $(window).height() + 'px';
        document.getElementById('workBigPhoto').style.width = $(window).width() + 'px';
    }
});

function overlay(action, block, text, name, type) {
    if(action == 1) {
        document.getElementById(block).style.opacity = "0.7";

        setTimeout(function(){
            document.getElementById(name).style.opacity = "1";
            document.getElementById(type).style.opacity = "1";
            document.getElementById(text).style.bottom = "10px";
        }, 300);
    }

    if(action == 0) {
        document.getElementById(block).style.opacity = "0";

        setTimeout(function(){
            document.getElementById(name).style.opacity = "0";
            document.getElementById(type).style.opacity = "0";
            document.getElementById(text).style.bottom = "100%";
        }, 300);
    }
}