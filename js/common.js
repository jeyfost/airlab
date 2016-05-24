$(window).load(function() {
    if($('#bgIMG')) {
        $('#bgIMG').css('opacity', '1');
    }

    if($('#indexText')) {
        $('#indexText').css('opacity', '1');
    }

    if($('#contactsText')) {
        setTimeout(function(){
            $('#contactsText').css('opacity', '1');
        }, 300);
    }

    if($('#aboutText')) {
        setTimeout(function(){
            $('#aboutText').css('opacity', '1');
        }, 300);
    }

    if($('#sectionName')) {
        $('#sectionName').css('top', '28px');
    }

    if($('#blogContent')) {
        setTimeout(function(){
            $('#blogContent').css('opacity', '1');
        }, 300);
    }
});

$(window).resize(function () {
    if($('#sectionName')) {
        $('#sectionName').css('top', $('#menu').offset().top);
    }
});

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