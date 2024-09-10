var website_url = $("meta[name=site-path]").attr("content");

$(function () {
    $("#whitepaperForm").validate({
        rules: {
            name: {
                required: true, 
            },
            email: {
                required: true, email: true
            },
        },
        messages: {
        name: {
          required: "Name field is required",
         }, 
          email: {
          required: "Email field is required",
          email: "Please enter a valid email address.",
         },     
          
        },
        submitHandler: function (form) {
            
            $.LoadingOverlay("show");
            var name = jQuery("#whitepaperName").val().trim();
            var email = jQuery("#whitepaperEmail").val().trim();
          
            $.ajax({
                type: "post",
                dataType: "json",
                url: website_url + "components/forms/submissions/whitepapers.php",
                data: {
                    name : name,
                    email: email,
                  
                },
                success: function (data) {
                    console.log(data);
                    $.LoadingOverlay("hide");
                     $("#whitepaperForm").hide();
                     $("#thank-you-box").show();
                }
            });
          return false; /* required to block normal submit since you used ajax */
        }
    });
});