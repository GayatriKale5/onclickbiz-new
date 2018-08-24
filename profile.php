<?php include "header.php"; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Profile
			</h1>				
		</div>
		<div class="col-md-12 text-left folder-path">
			<p>Home/<b claas="color">Profile</b></p>			
		</div>
	</div>
</header>

<div class="container forms-section profile-forms-section">
	<div class="row forms-section-row">
		<div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
			<div class="card">
				<div class="card-header text-center">
					Profile
				</div>
				<div class="card-body post-free-job-card-body">
					<form method="post" action="#">
						<div class="form-group col-12 mb-3">
							<i class="fa fa-pencil-alt fa-profile-pencil"></i>
							<input type="text" class="form-control" id="profile-name" placeholder="Enter your name">		
						</div>
						<div class="form-group col-12 col-sm-8 col-lg-7 mb-3">
							<i class="fa fa-map-marker-alt fa-profile-location"></i>
							<input type="text" class="form-control" id="profile-location" placeholder="Enter your location">
						</div>
						<div class="form-group col-12 col-sm-8 col-lg-8 mb-3">
							<textarea class="form-control" id="profile-address" rows="5" placeholder="Enter your address"></textarea>
						</div>						
						<div class="form-group col-12 col-sm-8 col-lg-7 mb-4">
							<i class="fa fa-mobile-alt fa-profile-mobile"></i>
							<input type="number" class="form-control" id="profile-mobile-number" placeholder="Enter your mobile number">
						</div>
						<div class="col-12 send-otp-colm text-center ml-1 mb-3">
							<button type="submit" class="btn btn-primary post-free-job-btn btn-post-job">Submit</button>
						</div>	
					</form>

				</div>
			</div>
		</div>
	</div>	
</div>

<?php include "footer.php"; ?>
