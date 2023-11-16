(function ($) {
    "use strict";

    $(document).ready(function () {
        $(document).on('submit', '#contact_form_submit', function (e) {
            e.preventDefault();
            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();

            if (name && email && message) {
                $.ajax({
                    type: "POST",
                    url: '/send-mail',
                    data: {
                        // Data formulir
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    // ...
                });
                                    },
                    success: function (data) {
                        $('#contact_form_submit').children('.email-success').remove();
                        $('#contact_form_submit').prepend('<span class="alert alert-success email-success">' + data + '</span>');
                        $('#name').val('');
                        $('#email').val('');
                        $('#message').val('');
                        $('.email-success').fadeOut(3000);
                    },
                    error: function (res) {
                        // Handle error if needed
                    }
                });
            } else {
                $('#contact_form_submit').children('.email-success').remove();
                $('#contact_form_submit').prepend('<span class="alert alert-danger email-success">All Fields are Required.</span>');
                $('.email-success').fadeOut(3000);
            }
        });
    });

})(jQuery);
