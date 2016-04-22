$(window).load(function() {
    $('#works').css('opacity', '1');
});

function resizeWork(block, img) {
    document.getElementById(img).style.width = document.getElementById(block).offsetWidth + 'px';
    document.getElementById(img).style.height = document.getElementById(block).offsetHeight + 'px';
    document.getElementById(block).style.height = document.getElementById(img).offsetHeight + 'px';
}