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

    if($('#aWorksB')) {
        $('#aWorksB').mouseover(function() {
            $('#lb7').css('opacity', '1');
            $('#lb7').css('color', '#d53636');
            $('#lb7').css('left', '40px');

            $('#rb7').css('opacity', '1');
            $('#rb7').css('color', '#d53636');
            $('#rb7').css('left', '160px');
        });

        $('#aWorksB').mouseout(function() {
            $('#lb7').css('opacity', '0');
            $('#lb7').css('color', '#000');
            $('#lb7').css('left', '60px');

            $('#rb7').css('opacity', '0');
            $('#rb7').css('color', '#000');
            $('#rb7').css('left', '140px');
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

    if($('#aStudioB')) {
        $('#aStudioB').mouseover(function() {
            $('#lb8').css('opacity', '1');
            $('#lb8').css('color', '#049eff');
            $('#lb8').css('left', '40px');

            $('#rb8').css('opacity', '1');
            $('#rb8').css('color', '#049eff');
            $('#rb8').css('left', '160px');
        });

        $('#aStudioB').mouseout(function() {
            $('#lb8').css('opacity', '0');
            $('#lb8').css('color', '#000');
            $('#lb8').css('left', '60px');

            $('#rb8').css('opacity', '0');
            $('#rb8').css('color', '#000');
            $('#rb8').css('left', '140px');
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

    if($('#aContactsC')) {
        $('#aContactsC').mouseover(function() {
            $('#lb6').css('opacity', '1');
            $('#lb6').css('color', '#049eff');
            $('#lb6').css('left', '40px');

            $('#rb6').css('opacity', '1');
            $('#rb6').css('color', '#049eff');
            $('#rb6').css('left', '160px');
        });

        $('#aContactsC').mouseout(function() {
            $('#lb6').css('opacity', '0');
            $('#lb6').css('color', '#000');
            $('#lb6').css('left', '60px');

            $('#rb6').css('opacity', '0');
            $('#rb6').css('color', '#000');
            $('#rb6').css('left', '140px');
        });
    }

    if($('#aContactsB')) {
        $('#aContactsB').mouseover(function() {
            $('#lb9').css('opacity', '1');
            $('#lb9').css('color', '#ffc704');
            $('#lb9').css('left', '40px');

            $('#rb9').css('opacity', '1');
            $('#rb9').css('color', '#ffc704');
            $('#rb9').css('left', '187px');
        });

        $('#aContactsB').mouseout(function() {
            $('#lb9').css('opacity', '0');
            $('#lb9').css('color', '#000');
            $('#lb9').css('left', '60px');

            $('#rb9').css('opacity', '0');
            $('#rb9').css('color', '#000');
            $('#rb9').css('left', '167px');
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

$(document).ready(function() {
    $('#sectionName').mouseover(function() {
        var symbols = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f'];
        var color = '#';

        for (var i = 0; i < 6; i++) {
            color += symbols[Math.floor(Math.random() * (symbols.length - 1))];
        }

        $('#sectionName').css('color', color);
    });

    $('#sectionName').mouseout(function() {
        $('#sectionName').css('color', '#000');
    });
});