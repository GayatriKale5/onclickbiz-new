<?php include "header.php"; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Post Free Job
			</h1>				
		</div>
		<div class="col-md-12 text-left folder-path">
			<p>Home/<b claas="color">Post Free Job</b></p>			
		</div>
	</div>
</header>

<div class="container forms-section">
	<div class="row forms-section-row">
		<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="card">
				<div class="card-header text-center">
					Post Free Job
				</div>
				<div class="card-body post-free-job-card-body">
					<form method="post" action="sign-up.php">
						<div class="form-group col-12 mb-3">
							<label for="service-name" class="service-name-label mt-2">Please tell us service you'r looking for</label>
							<i class="fas fa-search fa-post-free-job-search"></i>
							<input type="text" class="form-control" id="post-free-job-name" placeholder="eg. Carpenter, Website Developer, Interior Designer">	
						</div>					
						<div class="form-group col-12 col-sm-8 mb-4">
							<label for="budget" class="job-mobile-num-label mt-2 pl-3">What is your budget</label>
							<div class="row budget-row">
							<i class="fa fa-rupee-sign fa-job-rupee"></i>
							<input type="number" class="form-control col-5 mr-1" id="post-free-job-mobile-number" placeholder="Min">

							<i class="fa fa-rupee-sign fa-job-rupee"></i>
							<input type="number" class="form-control col-5" id="post-free-job-mobile-number" placeholder="Max">
							</div>
						</div>
						<div class="form-group form-check col-12 pl-5 forms-checkbox">
							<input type="checkbox" class="form-check-input" id="checkbox-any-budget">
							<label class="form-job-check-label" for="checkbox-any-budget">Any budget</label>
						</div>

						<div class="form-group col-12 col-sm-8 col-lg-7 mb-3">
							<label for="budget" class="job-location-label mt-2">Location</label>
							<i class="fa fa-map-marker-alt fa-job-location"></i>
							<input type="text" class="form-control" id="post-free-job-location" placeholder="Enter your location">
						</div>
						<div class="form-group col-12 col-sm-8 col-lg-8 mb-3">
							<label for="job-post-address">Address</label>
							<textarea class="form-control" id="job-post-address" rows="5" placeholder="Enter your address"></textarea>
						</div>						
						<div class="form-group col-12 col-sm-8 col-lg-7 mb-4">
							<label for="mobile number" class="job-mobile-num-label mt-2">Mobile Number</label>
							<i class="fa fa-mobile-alt fa-job-mobile"></i>
							<input type="number" class="form-control" id="post-free-job-mobile-number" placeholder="Enter your mobile number">
						</div>
						<div class="form-group col-12 col-sm-8 col-lg-7 mb-5 ml-2">
							<label for="upload-images-job">Upload Images</label>	
							<div class="post-free-job-btn btn-post-job upload-job-button">
								<input type="file" class="form-control-file" id="post-free-job-upload-images">
								<p><i class="fa fa-plus fa-job-upload-plus"></i>Upload</p>
							</div>
						</div>
						<div class="form-group form-check col-12 pl-5 forms-checkbox">
							<input type="checkbox" class="form-check-input" id="checkbox-free-job-post">
							<label class="form-job-check-label" for="checkbox-free-job-post">I Agree to Terms &amp; Conditions</label>
						</div>		
						<div class="col-12 send-otp-colm text-left ml-1 mb-3">
							<button type="submit" class="btn btn-primary post-free-job-btn btn-post-job">Post Free Job</button>
						</div>	
					</form>

				</div>
			</div>
		</div>
	</div>	
</div>

<?php include "footer.php"; ?>
