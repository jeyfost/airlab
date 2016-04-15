$(window).load(function() {
    $('#menu').css('left', '20px');

    if($('#aWorks')) {
        $('#aWorks').mouseover(function() {
            $('#lb1').css('opacity', '1');
            $('#lb1').css('color', '#419849');
            $('#lb1').css('left', '40px');

            $('#rb1').css('opacity', '1');
            $('#rb1').css('color', '#419849');
            $('#rb1').css('left', '160px');
        });

        $('#aWorks').mouseout(function() {
            $('#lb1').css('opacity', '0');
            $('#lb1').css('color', '#000');
            $('#lb1').css('left', '60px');

            $('#rb1').css('opacity', '0');
            $('#rb1').css('color', '#000');
            $('#rb1').css('left', '140px');
        });
    }

    if($('#aStudio')) {
        $('#aStudio').mouseover(function() {
            $('#lb2').css('opacity', '1');
            $('#lb2').css('color', '#d53636');
            $('#lb2').css('left', '40px');

            $('#rb2').css('opacity', '1');
            $('#rb2').css('color', '#d53636');
            $('#rb2').css('left', '160px');
        });

        $('#aStudio').mouseout(function() {
            $('#lb2').css('opacity', '0');
            $('#lb2').css('color', '#000');
            $('#lb2').css('left', '60px');

            $('#rb2').css('opacity', '0');
            $('#rb2').css('color', '#000');
            $('#rb2').css('left', '140px');
        });
    }

    if($('#aContacts')) {
        $('#aContacts').mouseover(function() {
            $('#lb3').css('opacity', '1');
            $('#lb3').css('color', '#049eff');
            $('#lb3').css('left', '40px');

            $('#rb3').css('opacity', '1');
            $('#rb3').css('color', '#049eff');
            $('#rb3').css('left', '187px');
        });

        $('#aContacts').mouseout(function() {
            $('#lb3').css('opacity', '0');
            $('#lb3').css('color', '#000');
            $('#lb3').css('left', '60px');

            $('#rb3').css('opacity', '0');
            $('#rb3').css('color', '#000');
            $('#rb3').css('left', '167px');
        });
    }

    if($('#aBlog')) {
        $('#aBlog').mouseover(function() {
            $('#lb4').css('opacity', '1');
            $('#lb4').css('color', '#ffc704');
            $('#lb4').css('left', '40px');

            $('#rb4').css('opacity', '1');
            $('#rb4').css('color', '#ffc704');
            $('#rb4').css('left', '130px');
        });

        $('#aBlog').mouseout(function() {
            $('#lb4').css('opacity', '0');
            $('#lb4').css('color', '#000');
            $('#lb4').css('left', '60px');

            $('#rb4').css('opacity', '0');
            $('#rb4').css('color', '#000');
            $('#rb4').css('left', '110px');
        });
    }

    if($('#aMain')) {
        $('#aMain').mouseover(function () {
            $('#lb5').css('opacity', '1');
            $('#lb5').css('color', '#419849');
            $('#lb5').css('left', '40px');

            $('#rb5').css('opacity', '1');
            $('#rb5').css('color', '#419849');
            $('#rb5').css('left', '165px');
        });

        $('#aMain').mouseout(function () {
            $('#lb5').css('opacity', '0');
            $('#lb5').css('color', '#000');
            $('#lb5').css('left', '60px');

            $('#rb5').css('opacity', '0');
            $('#rb5').css('color', '#000');
            $('#rb5').css('left', '145px');
        });
    }
});