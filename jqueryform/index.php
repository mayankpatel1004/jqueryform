<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo Contact Form - Submit Without Page Refresh using jQuery</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>
<script type="text/javascript" >
jQuery(function() {
	jQuery(".submit").click(function(){
		var name = jQuery("#name").val();
		var email = jQuery("#email").val();
		var phone = jQuery("#phone").val();
		
		var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone;
	
		if(name == '' || email == '' || phone == '')
		{
			jQuery('.error-msg').html("Please enter your valid data");
		}
		else
		{
			jQuery.ajax({
			type: "POST",
			url: "process.php",
			data: dataString,
			success: function(){
				jQuery('.success-msg').html("Data Stored Successfully");
			}
			});
		}
		return false;
	});
});
</script>
</head>
<body>
<div id="contact_form">
  <form method="post" name="form">
<ul><li>
<input id="name" name="name" type="text" />
</li><li>
<input id="email" name="email" type="text" />
</li><li>
<input id="phone" name="phone" type="password" />
</li></ul>
<div >
<input type="submit" value="Submit" class="submit"/>
</div></form>
</div>
<div class="success-msg"></div>
<div class="error-msg"></div>

</body>
</html>