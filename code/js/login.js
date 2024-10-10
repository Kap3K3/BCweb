
$(document).ready(function(){
    $('#lock').click(function(){
        var passwordField = $('#txb_password'); 
        if ($(this).hasClass('ti-lock')) {
            $(this).removeClass('ti-lock').addClass('ti-eye');
            passwordField.attr('type', 'text'); 

        } else {
            $(this).removeClass('ti-eye').addClass('ti-lock');
            passwordField.attr('type', 'password'); 
        }
    });
});