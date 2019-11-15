
/**
 *
 * Coramonte Bengal
 * Contact
 * v1.0.0
 *
 * Dependencies:
 * jquery
 *
 */
jQuery(document).ready(function ($) {
    "use strict";

    $('#contact-form').submit(function(e) {
        alert('sending!');
        e.preventDefault();

        var form = $(this);
        var name = $('#name', form);
        var email = $('#email', form);
        var msg = $('#messaje', form);

        if (msg.text().size() <= 16) {
            msg.addClass('invalid');
            msg.attr('placeholder');
            msg.focus();
        }

        if (email.text().size() == 0) {
            email.addClass('invalid');
            email.attr('placeholder')
            email.focus();
        }
        
        if (name.text().size() == 0) {
            name.addClass('invalid');
            name.attr('placeholder');
            name.focus();
        }

        $.ajax({
            type: 'POST',
            url: '#', 
            headers: {
                'X-OCTOBER-REQUEST-HANDLER': 'onSubmitContactForm'
            },
            data: form.serialize(),
            success: function(data) {
                $('input', form).removeClass('invalid');
                alert('sent');
            }
        });
    });
});       
