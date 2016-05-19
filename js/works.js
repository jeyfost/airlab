$(window).load(function() {
    $('#works').css('opacity', '1');

    if(document.getElementById('workAbsolute')) {
        $('#workAbsolute').css('opacity', '1');
    }

    if(document.getElementById('workBigContainer')) {
        document.getElementById('workBigContainer').style.height = $(window).height() + 'px';
        document.getElementById('workBigPhoto').style.width = $(window).width() + 'px';
    }

    $('#briefText').click(function() {
        $('#briefForm').css('display', 'block');
        $('#cancelBrief').css('opacity', '1');
        $('#successBrief').css('opacity', '0');
        $('#briefError').css('opacity', '0');

        setTimeout(function() {
            $('#briefForm').css('opacity', '1');
        }, 1);

        $('html, body').animate({
            scrollTop: parseInt($($(this).attr('href')).offset().top - 120) + "px"
        }, {
            duration: 500,
            easing: "swing"
        });

        return false;
    });

    $('#cancelBrief').click(function() {
        $('#briefForm').css('opacity', '0');
        $('#cancelBrief').css('opacity', '0');
        $('#successBrief').css('opacity', '0');
        $('#briefError').css('opacity', '0');

        setTimeout(function() {
            $('#briefForm').css('display', 'none');

            $('#nameInput').val('');
            $('#aboutInput').val('');
            $('#advantageInput').val('');
            $('#competitorsInput').val('');
            $('#competitorsAdvantageInput').val('');
            $('#clientInput').val('');
            $('#advertiseInput').val('');
            $('#serviceInput').val('');
            $('#ideaInput').val('');
            $('#helpInput').val('');
            $('#termsInput').val('');
            $('#budgetInput').val('');
            $('#additionsInput').val('');
            $('#contactsInput').val('');
            $('#personInput').val('');
        }, 1000);
    });

    $('#briefSend').click(function() {
        if($('#aboutInput').val() == '' || $('#serviceInput').val() == '' || $('#contactsInput').val() == '' || $('#personInput').val() == '') {
            $('#briefError').html('Заполните, пожалуйста, все поля, помеченные символом &laquo;*&raquo;');
            $('#briefError').css('opacity', '1');
        } else {
            var name = $('#nameInput').val();
            var about = $('#aboutInput').val();
            var advantage = $('#advantageInput').val();
            var competitors = $('#competitorsInput').val();
            var competitorsAdvantage = $('#competitorsAdvantageInput').val();
            var client = $('#clientInput').val();
            var advertise = $('#advertiseInput').val();
            var service = $('#serviceInput').val();
            var idea = $('#ideaInput').val();
            var help = $('#helpInput').val();
            var terms = $('#termsInput').val();
            var budget = $('#budgetInput').val();
            var additions = $('#additionsInput').val();
            var contacts = $('#contactsInput').val();
            var person = $('#personInput').val();

            $.ajax({
                type: 'POST',
                data: {
                    "name": name,
                    "about": about,
                    "advantage": advantage,
                    "competitors": competitors,
                    "competitorsAdvantage": competitorsAdvantage,
                    "client": client,
                    "advertise": advertise,
                    "service": service,
                    "idea": idea,
                    "help": help,
                    "terms": terms,
                    "budget": budget,
                    "additions": additions,
                    "contacts": contacts,
                    "person": person
                },
                url: 'scripts/ajaxSendBrief.php',
                success: function(response) {

                    if(response == "a") {
                        $('#briefError').css('opacity', '0');
                        $('#briefError').html('');

                        $('#briefForm').css('opacity', '0');
                        $('#cancelBrief').css('opacity', '0');
                        $('#successBrief').css('opacity', '1');

                        setTimeout(function() {
                            $('#briefForm').css('display', 'none');

                            $('#nameInput').val('');
                            $('#aboutInput').val('');
                            $('#advantageInput').val('');
                            $('#competitorsInput').val('');
                            $('#competitorsAdvantageInput').val('');
                            $('#clientInput').val('');
                            $('#advertiseInput').val('');
                            $('#serviceInput').val('');
                            $('#ideaInput').val('');
                            $('#helpInput').val('');
                            $('#termsInput').val('');
                            $('#budgetInput').val('');
                            $('#additionsInput').val('');
                            $('#contactsInput').val('');
                            $('#personInput').val('');
                        }, 1000);
                    }

                    if(response == "b"){
                        $('#briefError').css('opacity', '0');

                        setTimeout(function() {
                            $('#briefError').html('При отправке брифа что-то пошло не так. Попробуйте снова или свяжитесь с нами.1');
                            $('#briefError').css('opacity', '1');
                        }, 300);
                    }
                },
                error: function() {
                    $('#briefError').css('opacity', '0');

                    setTimeout(function() {
                        $('#briefError').html('При отправке брифа что-то пошло не так. Попробуйте снова или свяжитесь с нами.2');
                        $('#briefError').css('opacity', '1');
                    }, 300);
                }
            });
        }
    });
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

$(document).ready(function() {
    $('#briefText').mouseover(function() {
        $('#briefText').css('border-bottom', '2px dotted #049eff');
        $('#briefText').css('color', '#049eff');
    });

    $('#briefText').mouseout(function() {
        $('#briefText').css('border-bottom', '2px dotted #000');
        $('#briefText').css('color', '#000');
    });

    $('#briefSend').mouseover(function() {
        $('#briefSend').css('border-bottom', '2px dotted #049eff');
        $('#briefSend').css('color', '#049eff');
    });

    $('#briefSend').mouseout(function() {
        $('#briefSend').css('border-bottom', '2px dotted #000');
        $('#briefSend').css('color', '#000');
    });
});

function textAreaHeight(textarea) {
    if (!textarea._tester) {
        var ta = textarea.cloneNode();
        ta.style.position = 'absolute';
        ta.style.zIndex = -2000000;
        ta.style.visibility = 'hidden';
        ta.style.height = '1px';
        ta.id = '';
        ta.name = '';
        textarea.parentNode.appendChild(ta);
        textarea._tester = ta;
        textarea._offset = ta.clientHeight - 1;
    }
    if (textarea._timer) clearTimeout(textarea._timer);
    textarea._timer = setTimeout(function () {
        textarea._tester.style.width = textarea.clientWidth + 'px';
        textarea._tester.value = textarea.value;
        textarea.style.height = (textarea._tester.scrollHeight - textarea._offset) + 'px';
        textarea._timer = false;
    }, 1);
}