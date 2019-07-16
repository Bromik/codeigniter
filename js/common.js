$(document).ready(function () {
    'use strict';
    $('.form').validate({
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: "Please enter your name",
            email: "Please enter a valid email address"
        },
        submitHandler: function(form) {
            var validForm = $(form).serialize();
            $.ajax({
                type: "POST",
                url: "ajaxcontroller/validform",
                data: validForm,
                dataType: 'json',
                success: function (data) {
                    $.toast({
                        text : data.resp,
                        showHideTransition : 'slide',
                        bgColor : 'green',
                        textColor : '#eee',
                        allowToastClose : false,
                        hideAfter : 5000,
                        icon : 'success',
                        stack : 5,
                        textAlign : 'left',
                        position : 'bottom-left'
                    })
                },
                error: function (data) {
                    $.toast({
                        text : data.resp,
                        showHideTransition : 'slide',
                        bgColor : 'red',
                        textColor : '#eee',
                        icon : 'error',
                        allowToastClose : false,
                        hideAfter : 5000,
                        stack : 5,
                        textAlign : 'left',
                        position : 'bottom-left'
                    })
                }
            });
        }
    });
});


