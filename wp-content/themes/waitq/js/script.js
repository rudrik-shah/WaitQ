$(document).ready(function () {
    $(".fancybox").fancybox({
        closeExisting: true,
    });
    $("form[name='signup_form']").validate({
        rules: {
            name: {
                required: true,
                digits: false,
            },
            email_s: {
                required: true,
                email: true,
                // remote: "email.php",
            },
            password_s: {
                required: true,
                minlength: 6
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            passwordc_s: {
                equalTo: '#password_s',
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                digits: "Name should be in alphabets",
            },
            phone: {
                required: "Please enter your phone number",
                minlength: "Enter valid phone number",
                maxlength: "Enter valid phone number",
                digits: "Enter valid phone number"
            },
            password_s: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            email_s: {
                required: "Please enter email id",
                email: "Please enter a valid email address",
                // remote: "Email id already exists"
            },
            passwordc_s: {
                equalTo: "Password doesn't match"
            }
        },
        submitHandler: function (form) {
            console.log("test");
            $('#signup_form').submit(function (event) {
                console.log("test1");
                var form_data = new FormData(this);
                form_data.append('action','my_action');
                form_data.append('nonce', myAjax.nonce);
                $.ajax({
                    type: "post",
                    url: myAjax.ajaxurl,
                    data: form_data,
                    dataType: 'json',
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $('.user_name').append(data.name);
                        $('.hide').hide();
                        // $('.show').show();
                        $.fancybox.close();
                    });
            });
        }
    });
    $("form[name='login_form']").validate({
        rules: {
            email_l: {
                required: true,
                email: true,
            },
            password_l: {
                required: true,
            },
        },
        messages: {
            password_l: {
                required: "Please provide a password",
            },
            email_l: {
                required: "Please enter email id",
                email: "Please enter a valid email id",
            },
        },
        submitHandler: function (form) {
            $('#login_form').submit(function (event) {
                var form_data = new FormData(this);
                form_data.append('action','my_action_login');
                form_data.append('nonce', myAjax.nonce);
                console.log("login");
                $.ajax({
                    type: "post",
                    url: myAjax.ajaxurl,
                    data: form_data,
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                })
                .done(function (data) {
                    $('.user_name').append(data.name);
                    console.log("done");
                    $('.hide').hide();
                    // $('.show').show();
                    $.fancybox.close();
                });
            });
        }
    });
});