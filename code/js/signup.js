
$(document).ready(function(){
    $('#lock1').click(function(){
        var passwordField = $('#txb_password'); 
        if ($(this).hasClass('ti-lock')) {
            $(this).removeClass('ti-lock').addClass('ti-eye');
            passwordField.attr('type', 'text'); 

        } else {
            $(this).removeClass('ti-eye').addClass('ti-lock');
            passwordField.attr('type', 'password'); 
        }
    });

    $('#lock2').click(function(){
        var passwordField1 = $('#txb_passwordrp'); 
        if ($(this).hasClass('ti-lock')) {
            $(this).removeClass('ti-lock').addClass('ti-eye');
            passwordField1.attr('type', 'text'); 

        } else {
            $(this).removeClass('ti-eye').addClass('ti-lock');
            passwordField1.attr('type', 'password'); 
        }
    });
});