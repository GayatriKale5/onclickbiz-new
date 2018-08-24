<?php include "header.php"; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Sign Up
			</h1>				
		</div>
		<div class="col-md-12 text-left folder-path">
			<p>Home/<b claas="color">Sign up</b></p>			
		</div>
	</div>
</header>

<div class="container forms-section">
	<div class="row forms-section-row">
		<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="card">
				<div class="card-header text-center">
					Sign Up
				</div>
				<div class="card-body">
					<form method="post" action="otp.php">
						<div class="form-group col-12 mb-3">
							<i class="fa fa-user fa-forms-email-mobile"></i>
							<input type="email" class="form-control" id="sign-up-email-mobile" aria-describedby="sign-up-email-mobile" placeholder="Enter your email / Enter your mobile number">	
						</div>
						<div class="form-group col-12 mb-3">
							<i class="fa fa-lock fa-forms-lock"></i>
							<input type="password" class="form-control" id="sign-up-password" placeholder="Enter your password">
						</div>		

						<div class="form-group col-12 mb-3">
							<i class="fa fa-lock fa-forms-lock"></i>
							<input type="password" class="form-control" id="sign-up-confirm-password" placeholder="Confirm your password">
						</div>						

						<div class="row checkbox-row">
							<div class="form-group form-check col-12 forms-checkbox text-center">
								<input type="checkbox" class="form-check-input" id="checkbox-sign-up">
								<label class="form-check-label" for="checkbox-sign-up">By registering, you accept our Terms &amp; Conditions</label>
							</div>							
						</div>
						<div class="col-12 send-otp-colm text-center">
							<button type="submit" class="btn btn-primary send-otp-btn btn-post-job">Submit</button>
						</div>						
					</form>

					<div class="row or-row pt-3 new-user-sign-up-link">
						<div class="col-4 col-sm-3 pr-0">
							<hr>
						</div>	
						<div class="col-4 col-sm-6 text-center pt-1">
							<p>Already have an account? <a href="login.php" class="d-block">Login</a></p>
						</div>	
						<div class="col-4 col-sm-3 pl-0">
							<hr>
						</div>					
					</div>

				</div>
			</div>
		</div>
	</div>	
</div>

<?php include "footer.php"; ?>
