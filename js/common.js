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

    if($('#sectionName')) {
        $('#sectionName').css('top', '28px');
    }
});