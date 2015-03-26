//Contact Script Settings
jQuery(function() {
    jQuery('.form').validate({
        rules: {
          firstName: {
              required: true
          },
          lastName: {
              required: true
          },
          email: {
              required: true,
              email: true
          },
          phoneNumber: {
              required: false,
          },
          message: {
              required: true,
          },
          bot: {
              required: false,
          },
        },
        errorPlacement: function () { },
        submitHandler: function(form) {
            if(jQuery('.form__bot__input').val().length===0){
            jQuery(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                clearForm: true,
                url:"../wp-content/themes/kathrynkeller/mail.php",
                error: function() {
                        $('.form__alert--error').fadeIn().delay( 3000 ).fadeOut();
                },
                success: function() {
                        $('.form__alert--success').fadeIn().delay( 3000 ).fadeOut();
                }
            });
        }
      }
    });
});
