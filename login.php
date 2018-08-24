<?php include "header.php"; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Login
			</h1>				
		</div>
		<div class="col-md-12 text-left folder-path">
			<p>Home/<b claas="color">Login</b></p>			
		</div>
	</div>
</header>

<div class="container forms-section">
	<div class="row forms-section-row">
		<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="card">
				<div class="card-header text-center">
					Login Now
				</div>
				<div class="card-body">
					<form method="post" action="profile.php">
						<div class="form-group col-12 mb-3">
							<i class="fa fa-user fa-forms-user"></i>
							<input type="text" class="form-control" id="login-name" placeholder="Enter your email / Enter your mobile number">					
						</div>
						<div class="form-group col-12 mb-3">
							<i class="fa fa-lock fa-forms-lock"></i>
							<input type="text" class="form-control" id="login-password" placeholder="Enter your password">
						</div>
						<div class="row checkbox-row">
							<div class="form-group form-check col-12 col-md-6 pl-5 forms-checkbox text-center">
								<input type="checkbox" class="form-check-input" id="checkbox-login">
								<label class="checkbox-login" for="exampleCheck1">Keep me logged in</label>
							</div>
							<div class="col-12 col-md-6 forgot-password pl-5 pb-2 text-center">
								<a href="#">Forgot Password?</a>
							</div>
						</div>
						<div class="col-12 send-otp-colm text-center pb-1">
							<button type="submit" class="btn btn-primary send-otp-btn btn-post-job">Login</button>
						</div>						
					</form>

					<div class="row or-row pt-3 new-user-sign-up-link">
						<div class="col-4 col-sm-4 pr-0">
							<hr>
						</div>	
						<div class="col-4 col-sm-4 text-center pt-1">
							<p>New to Onclickbiz? <a href="sign-up.php">Create account</a></p>
						</div>	
						<div class="col-4 col-sm-4 pl-0">
							<hr>
						</div>					
					</div>

				</div>
			</div>
		</div>
	</div>	
</div>

<?php include "footer.php"; ?>
