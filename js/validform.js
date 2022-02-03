jQuery.validator.addMethod("Name123", function(phone_number, element) {
	if ($('#captcha').val() == 'Security Code:')
		return false;
	return true;

}, "Please enter Captcha code");


$().ready(function() {

	$("#form1").validate( {

		rules : {
			captcha : {
				required : true,
				Name123 : true,
				remote : "process1.php"

			}

		},
		messages : {
			
			captcha : {
				required : "Please enter security code",
				remote : "Please Enter Valid Captcha code."
			}

		}
	});
});
