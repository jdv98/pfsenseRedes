<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>My First Cautive Portal</title>
	</head>
	<body>
		
		<div style="text-align: center;">
		<form method="post" action="$PORTAL_ACTION$" id="loginForm" style="display: block">
			<div><input name="auth_user" type="text" placeholder="Username" class='form-control'></div>
			<div><input name="auth_pass" type="password" placeholder="Password" class='form-control'></div>
			<div><input name="auth_voucher" type="text" placeholder="Voucher" class='form-control'></div>
			<input name="redirurl" type="hidden" value="$PORTAL_REDIRURL$">
			<input name="zone" type="hidden" value="$PORTAL_ZONE$">
			<div><input name="accept" type="submit" value="Continue"></div>
		</form>

		<form method="post" id="signUpForm" style="display: none">
			<div>
				<input name="userName" type="text" placeholder="Full Name" class='form-control'>
			</div>
			<div>
				<input name="email" type="text" placeholder="Email" class='form-control'>
			</div>
			<div>
				<input name="password" type="password" placeholder="Password" class='form-control'>
			</div>
			<div>
				<input name="signup" type="submit" value="Sign up">
			</div>
		</form>

		<button id="buttonForm" onclick="changeForm();" >Sign up</button>
		</div>
		<script>
			function changeForm() {
				var loginForm = document.getElementById("loginForm");
				var signUpForm= document.getElementById("signUpForm");
				var buttonForm= document.getElementById("buttonForm");
				var logSign=    document.getElementById("logSign");

				if(loginForm.style.display == "none"){
					logSign.innerText="Log in";
					buttonForm.innerText="Sign up";
					signUpForm.style.display="none";
					loginForm.style.display="block";
				} else {
					logSign.innerText="Sign up";
					buttonForm.innerText="Go back";
					signUpForm.style.display="block";
					loginForm.style.display="none";
				}
			}

			$('#exampleModal1').on('shown.bs.modal', function () {
				$('#myInput1').trigger('focus')
			})
		</script>
	</body>

</html>
