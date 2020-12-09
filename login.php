<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-core/11.0.0/css/fabric.min.css" />
		<!-- Bootstrap CSS CDN -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		
		<script src="//code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		

		<title>My First Cautive Portal</title>
	</head>
	<body>
		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="logSign" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #343a40!important;">
						<h5 style="color: rgba(255,255,255,.5);" class="modal-title" id="logSign">Log in</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="background-image: linear-gradient(180deg,transparent 60%,var(--color-bg-primary)),linear-gradient(70deg,var(--color-bg-info) 32%,var(--color-bg-success));">

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

						<div class="container" style="margin-top: 2%;">
							<div class="row">
								<div class="col text-center">
									<button id="buttonForm" onclick="changeForm();" class="btn btn-dark" type="submit"
									style="width: 200px; color: rgba(255,255,255,.5);">Sign up</button>
								</div>
							</div>
						</div>

					</div>
					<div class="modal-footer" style="background-color: #343a40!important;">
						<button type="button" class="btn btn-dark" style="color: rgba(255,255,255,.5);"
						data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container" style="margin-top: 2%;">
			<div class="row">
				<div class="col text-center">
					<button id="myInput1" type="button" class="btn btn-dark" style="color: rgba(255,255,255,.5);" data-toggle="modal"
						data-target="#exampleModal1">
						Captive Portal
					</button>
				</div>
			</div>
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
