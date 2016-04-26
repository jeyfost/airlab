var t;

function up() {
    var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);

    if(top > 0) {
        window.scrollBy(0, -100);
        t = setTimeout('up()', 20);
    } else {
        clearTimeout(t);
    }
    return false;
}

function showDescription(action, block) {
    var b = document.getElementById(block).style;

    if(action == 1) {
        b.height = "auto";
        b.opacity = "1";
    }

    if(action == 0) {
        b.opacity = "0";
        setTimeout(function(){
            b.height = "0";
        }, 500);
    }
}

$(window).load(function() {
    if($('#upArrow')) {
        if($('#upArrow').offset().top < $(window).height()) {
            $('#upArrow').css('display', 'none');
        }
    }
});