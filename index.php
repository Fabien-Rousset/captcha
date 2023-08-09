<?php
session_start();
require "captcha.php";



?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<script src="https://www.google.com/recaptcha/enterprise.js?render=6Lc4do0nAAAAAD6eyDIX9_gFhW0IvbbIleT-1Obk"></script>
	<title>Captcha</title>
</head>

<body>


	<nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
		<div class="container">
			<div class="dropdown button-dropdown">
				<a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
					<span class="button-bar"></span>
					<span class="button-bar"></span>
					<span class="button-bar"></span>
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-header">Dropdown header</a>
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">One more separated link</a>
				</div>
			</div>
			<div class="navbar-translate">
				<a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="" data-placement="bottom" target="_blank" data-original-title="Designed by Invision. Coded by Creative Tim">
				
				</a>
				<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar top-bar"></span>
					<span class="navbar-toggler-bar middle-bar"></span>
					<span class="navbar-toggler-bar bottom-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="../index.html">Back to Kit</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://github.com/creativetimofficial/now-ui-kit/issues">Have an issue?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
							<i class="fab fa-twitter"></i>
							<p class="d-lg-none d-xl-none">Twitter</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
							<i class="fab fa-facebook-square"></i>
							<p class="d-lg-none d-xl-none">Facebook</p>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
							<i class="fab fa-instagram"></i>
							<p class="d-lg-none d-xl-none">Instagram</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="section section-signup" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/now-ui-kit/master/assets/img/bg4.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
		<div class="container">
			<div class="row">
				<div class="card card-signup" data-background-color="orange">
					<form class="form" method="POST" action="index.php">
						<div class="card-header text-center">
							<h3 class="card-title title-up">Sign Up</h3>
							<div class="social-line">
								<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
									<i class="fab fa-facebook-square"></i>
								</a>
								<a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
									<i class="fab fa-google-plus"></i>
								</a>
							</div>
						</div>
						<div class="card-body">
							<div class="input-group no-border">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="now-ui-icons users_circle-08"></i>
									</span>
								</div>
								<input name="prenom" type="text" class="form-control" placeholder="First Name...">
							</div>
							<div class="input-group no-border">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="now-ui-icons text_caps-small"></i>
									</span>
								</div>
								<input name="nom" type="text" placeholder="Last Name..." class="form-control">
							</div>
							<div class="input-group no-border">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="now-ui-icons ui-1_email-85"></i>
									</span>
								</div>
								<input name="email" type="text" class="form-control" placeholder="Email...">
							</div>
							<input type="hidden" id="recaptchaResponse" name="recaptcha-response">
							<!-- If you want to add a checkbox to this form, uncomment this code -->
							<!-- <div class="checkbox">
								<input id="checkboxSignup" type="checkbox">
									<label for="checkboxSignup">
									Unchecked
									</label>
								</div> -->
						</div>
						<div class="card-footer text-center">
							<button class="btn btn-neutral btn-round btn-lg">Get Started</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>






<script>
	const privatekey = "";
	document.addEventListener('DOMContentLoaded', function() {
		grecaptcha.enterprise.ready(function() {
			grecaptcha.enterprise.execute(privatekey, {
				action: 'homepage'
			}).then(function(token) {
				document.getElementById('recaptchaResponse').value = token
			});
		});
	}, false);
</script>

</html>