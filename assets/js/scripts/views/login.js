jQuery(document).ready(function($) {

    if(jQuery(".login-form.customer-login-register-form").length > 0)
    {
        jQuery(".login-form.customer-login-register-form").validate({
            submitHandler: function (form) {

                 if (request_limiter != null)
                 {
                     return false;
                 }

                 jQuery("button[type='submit']", form).addClass("running");
                 jQuery(".error-message", form).hide();

                 request_limiter = jQuery.ajax({
                         type: "POST",
                         url: custom_data.ajax_url,
                         data: jQuery(form).serialize(),
                         success: function (response) {

                             var response_json = jQuery.parseJSON(response);

                             if(response_json.status == 'ok')
                             {

                                 addNotificationToLocaleStorage({
                                        icon: 'success',
                                        title: 'Success!',
                                        text: 'You successfully logged in!'
                                 });

                                 window.location.replace(response_json.redirect_url);

                             } else {

                                 Sweetalert2.fire({
                                        icon: 'error',
                                        title: 'Error!',
                                        text: response_json.message
                                 });

                             }

                             jQuery("button[type='submit']", form).removeClass("running");

                             request_limiter = null;

                         },
                         error: function () {

                             jQuery(".error-message", form).show();
                             jQuery("button[type='submit']", form).removeClass("running");

                         },

                 });
                 return false; // required to block normal submit since you used ajax
             }
        });
    }

    if(jQuery(".customer-login-lost-password-form").length > 0)
    {
        jQuery(".customer-login-lost-password-form").validate({
            submitHandler: function (form) {

                         if (request_limiter != null)
                         {
                             return false;
                         }

                         jQuery("button[type='submit']", form).addClass("running");
                         jQuery(".error-message", form).hide();

                         request_limiter = jQuery.ajax({
                                 type: "POST",
                                 url: custom_data.ajax_url,
                                 data: jQuery(form).serialize(),
                                 success: function (response) {

                                     var response_json = jQuery.parseJSON(response);

                                     if(response_json.status == 'ok')
                                     {

                                         addNotificationToLocaleStorage({
                                                icon: 'success',
                                                title: 'Success!',
                                                text: 'Please check your email inbox for further instructions on password reset!'
                                         });

                                         window.location.replace(response_json.redirect_url);

                                     } else {

                                         Sweetalert2.fire({
                                                icon: 'error',
                                                title: 'Error!',
                                                text: response_json.message
                                         });

                                     }

                                     jQuery("button[type='submit']", form).removeClass("running");

                                     request_limiter = null;

                                 },
                                 error: function () {

                                     jQuery(".error-message", form).show();
                                     jQuery("button[type='submit']", form).removeClass("running");

                                 },

                         });
                         return false; // required to block normal submit since you used ajax
                 }
        });
    }

});