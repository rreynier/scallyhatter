$(document).ready(function() {

    $('#getnotified .submit').click( function(e){
        $('.error').remove();
        $('.success').remove();
        e.preventDefault();
        var email = $('#newsletteremail').val();
        if( validate_email( $('#newsletteremail').val() ) ) {
            $.ajax({
                data: 'email=' + email,
                type: "POST",
                url: 'front/get-notified',
                success: function(result){
                    $('#newsletteremail').parent().append('<div class="success clear">Thanks! We got it.</div>');
                }
            });
        } else {
            $(this).parent().append('<div class="error clear">Please enter a valid email address.</div>');
            $('.error').hide().fadeIn();
        }
    });

    $('.validateform').submit( function() {

        if(!validate_form(this)) {

            return false;

        } else {

            return true;

        }

    });

    $('input.exampletext, textarea.exampletext').focus( function() {
        $(this).val('');
        $(this).removeClass('exampletext');
    });


});



function validate_form(passed) {

    var valid = 1;

    $(passed).find(' .formerror').remove();

    $(passed).find("input.required, textarea.required, select.required").each(function() {

        if($(this).val() == '' || $(this).val() == $(this).parent().find('label').text()) {

            valid = 0;
            add_error(this,'This field may not be left blank.');

        } else {
            $(this).css({
                borderColor:'#CDCAB9'
            })
        }

    });

    $(passed).find("input.required.emailcheck").each(function() {

        if($(this).val() != $(this).parent().find('label').text()) {

            if(!validate_email($(this).val())) {

                valid = 0;
                add_error(this,'Please enter a valid email.');

            }

        } else {
            $(this).css({
                borderColor:'#CDCAB9'
            })
        }

    });

    $(passed).find("input.required.robot").each(function() {

        if($(this).val() != $(this).parent().find('label').text()) {

            if($(this).val() != 'robot') {

                valid = 0;
                add_error(this,'Please type "robot" in the box below to prove you are a real person.');

            }

        } else {
            $(this).css({
                borderColor:'#CDCAB9'
            })
        }

    });

    return valid;
}

function validate_email(email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(reg.test(email) == false) {
        return false;
    } else {
        return true;
    }
}

function add_error(passed,error) {

    var invalid_id = $(passed).attr('id');
    $('#' + invalid_id).css({
        borderColor:'#b7482f'
    });
    $(passed).parent().find('label').append('<div class="formerror">' + error + '</div>');

}
