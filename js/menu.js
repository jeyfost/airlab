$(window).load(function() {
    $('#menu').css('left', '20px');
});

$(document).ready( function() {
    $('li').each(function() {
        $(this).attr('data-buzz', $(this).text());
    });
});
