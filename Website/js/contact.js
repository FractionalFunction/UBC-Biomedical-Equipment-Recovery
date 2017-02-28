// Scripts that apply to the contact page

$("#contact-form").submit(function(e) {
    $("#contact-form-message").html('Submitting...');
    var submit = $.ajax({
        // sets up the AJAX data
        type: "POST",
        url: "/api/contact.php",
        data: $("#contact-form").serialize()
    })

    submit.done(function(response) {
        var r = JSON.parse(JSON.stringify(response));

        if (r.submitted) {
            $("#contact-form input[type=\"text\"]").val("");
            $("#contact-form ifind nput[type=\"email\"]").val("");
            $("#contact-form textarea").val("");
            
            $("#contact-form input[type=\"text\"]").removeClass("error");
            $("#contact-form input[type=\"number\"]").removeClass("error");
            $("#contact-form textarea").removeClass("error");
			
			$("#contact-form-message").html("Submitted. Thank you!");
        } else {
            
        }
            
    });

    submit.fail(function(response) {
        $("#contact-form-message").html("An error occured: " + response.status + "</span>");
    });

});


