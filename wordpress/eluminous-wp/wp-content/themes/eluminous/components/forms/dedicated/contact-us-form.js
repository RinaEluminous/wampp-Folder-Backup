var website_url = $("meta[name=site-path]").attr("content");
var thank_siteUrl = website_url + "thank-you/";
$(function () {
    $("#planForm").validate({
        rules: {
            name: {
                required: true,
                lettersonly: true,
            },

            company_name: {
                required: true,
            },

            number: {
                required: false,
                number: true,
            },
            email: {
                required: true,
                email: true
            },
           
            captchaAnswer: {
                validateCaptcha: true,
                required: true,
            },
            number: {
                phoneNumValidation: true
            },

        },
        messages: {
            name: {
                required: "Name field is required",
                lettersonly: "Enter name in alphabets only",
            },
            email: {
                required: "Email field is required",
                email: "Please enter a valid email address.",
            },
            number: {
                required: "Mobile Number field is required",
                digits: "Please enter valid Mobile Number",

            },
            company_name: {
                required: "Company Name field is required",
            },
           
            captchaAnswer: {
                required: "Captcha field is required",
                validateCaptcha: "Please Fill Correct Captcha"
            },

        },
        submitHandler: function (form) {
            $.LoadingOverlay("show");
            // var data = $(form).serialize();
            var name = jQuery("#name").val().trim();
            var company_name = jQuery("#company_name").val().trim();
            var email = jQuery("#email").val().trim();
            var number = jQuery("#number").val().trim();
            var full_dedicatedPageMobile = $("input[name=full_dedicatedPageMobile]").val().trim();
            var comment = jQuery("#comment").val().trim();
            var hire_for = jQuery("#hire_for").val().trim();
            $.ajax({
                type: "post",
                dataType: "json",
                url: website_url + "components/forms/submissions/contact-us-form.php",
                data: {
                    name: name,
                    email: email,
                    company_name: company_name,
                    number: number,
                    full_dedicatedPageMobile: full_dedicatedPageMobile,
                    comment: comment,
                    hire_for: hire_for,
                },
                success: function (data) {
                    console.log(data);
                    $.LoadingOverlay("hide");
                    window.location.href = thank_siteUrl;
                }
            });
            return false; /* required to block normal submit since you used ajax */
        }
    });

    jQuery.validator.addMethod("validateCaptcha", function (value, element) {
        captchaAnswer = $('#captchaAnswer').val();
        e = $("#cptchaQues").val().split("+");
        cptchaQues = parseInt(e[0]) + parseInt(e[1]);
        return cptchaQues == captchaAnswer ? true : false;
    }, "Please Fill Correct Captcha");

    jQuery.validator.addMethod("phoneNumValidation", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
          return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^((?:9[679]|8[035789]|6[789]|5[90]|42|3[578]|2[1-689])|9[0-58]|8[1246]|6[0-6]|5[1-8]|4[013-9]|3[0-469]|2[70]|7|1)(?:\W*\d){0,13}\d$/);
    }, "Please enter a valid mobile number");
    
    jQuery.validator.addMethod("lettersonly", function (value, element) {
        return this.optional(element) || /^[a-z ]+$/i.test(value);
    }, "Enter name in alphabets only");
});

