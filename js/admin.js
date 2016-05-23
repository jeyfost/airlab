$(window).load(function() {
    $('#enterSubmit').click(function() {
        if($('#loginInput').val() != '' && $('#passwordInput').val() != '') {
            var login = $('#loginInput').val();
            var password = $('#passwordInput').val();

            $.ajax({
                type: 'POST',
                data: {
                    "login": login,
                    "password": password
                },
                url: '../scripts/ajaxLogin.php',
                success: function(response) {
                    if(response == "a") {
                        var url = "admin.php";
                        $(location).attr('href', url);
                    }
                }
            });
        }
    });
});

function showBrief(id) {
    $.ajax({
        type: 'POST',
        data: {"id": id},
        url: '../scripts/ajaxShowBrief.php',
        success: function(response) {
            $('#adminBody').html(response);
        }
    });
}

function closeBrief() {
    $.ajax({
        type: 'POST',
        url: '../scripts/ajaxCloseBrief.php',
        success: function(response) {
            $('#adminBody').html(response);
        }
    });
}