<?php
	function display_title() {
		echo("Register Page");
}
	function display_content() {
	?> <style type="text/css"> 
	p {
		display: inline;
	}
</style>
<form method="POST" action="add_user.php">
	<div class="input-field col s12">
	<input type="text" id="name text" name="name" class="validate" required> <br>
	<label for="name">Full Name</label>
     </div>
	<div class="input-field col s12">
      	<input name="username" id="username" type="text" class="validate" required>
        <label for="username">Username</label>
        <p id="username_error"></p>
     </div>
	<div class="input-field col s12">
	<input type="password" name="pass" id="pass" required> <br>
	<label for="password">Password</label>
     </div>
	<div class="input-field col s12">
	<label for="confirmpass">Confirm Password</label>
	<input type="password" name="confirmpass" id="cpwd" oninput="return validate()" required> <p id="output"> </p><br>
	</div>
	<div class="input-field col s12">
	<input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" />
      <label for="test52">Remember Me</label>
	</div>
	<div class="input-field col s12">
	<input type="submit" name="submit" id="submit" class="btn green accent-2 validate" value="Register" disabled>
	</div>
</form>

<script type="text/javascript">
	var users;
	$.getJSON("assets/json/users.json", function(json){
		users = json;
		// console.log(users);
	})

	$('input[name=username]').on('input', function(){
		var username = $('input[name=username]').val();
		if (typeof users[username] !== 'undefined') {
			$('#username_error').css('color','red');
			$('#username_error').html('username exists');
		} else {
			$('#username_error').css('color','green');
			$('#username_error').html('available');
		}
	})	
	function validate(){
	var pass = $('#pass').val();
	var cpass = $('#cpwd').val();
		if(pass != cpass){
			$('#output').html("Password do not Match."),
			$('#output').css("color", "red");
			$('#submit').attr('disabled','disabled')
			return false;
		}else
			$('#output').html("Password Matched.");
			$('#output').css("color", "green");
			$('#submit').removeAttr('disabled');
		return true;
		}


	</script>
	<?php
}
	require "template.php";
?>
