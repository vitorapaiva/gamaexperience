$(function() {
    'use strict';
    
    $('#email').keyup(function(event) {
        var email = this.value;

        if (!validarEmail(email)) {
            $(this).addClass('input-erro');            
        } else {
            $(this).removeClass('input-erro');
        }
        
    });

    $('#formFix').affix({
        offset: {
            top: 150,
            bottom: $('#bottom-help').outerHeight(true)
        }
    });    
});

 var validarEmail = function (email) {
    var atpos = email.indexOf('@');
    var dotpos = email.lastIndexOf('.');
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email.length) {
        return false;
    }
    return true;
};