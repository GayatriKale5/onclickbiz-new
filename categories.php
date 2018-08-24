<?php include'header.php'; ?>

<header class="home-banner forms-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Categories
			</h1>				
		</div>
	</div>
</header>

<div class="container categories-outer-container">
	<div class="row location-row">
		<div class="col-11 text-left">
			<form action="#" style="max-width:367px">
				<input type="text" placeholder="Search for Services" name="location-categories" class="rate-row-number-hr">
				<button type="submit" class="btn btn-primary send-otp-btn btn-post-job btn-location-search">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
	</div>
	
	<div class="container categories-container" id="categories">
		<!-- first row -->
		<!-- buttons -->
		<div class="row">
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#all-categories" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">All Categories</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#electronics" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Electronics &amp; Appliances</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#cleaning-services" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Cleaning Services</button>
			</div>
		</div>
		<!-- description -->
		<div class="row">
			<div class="col-12">
				<div id="all-categories" class="col-12 text-left collapse categories-info" data-parent="#categories">
					<h1>All Categories</h1>					
				</div>

				<div id="electronics" class="col-12 text-left collapse categories-info" data-parent="#categories">			
					<h1>Electronics &amp; Appliance</h1>										
					<div class="row">

						<div id="inline-accordianOne-comp-service" class="inline-accordian-comp-cat col-md-6">
							
							<div class="card">
								<div class="card-header" id="colm1-first">
									<h5 class="mb-0">
										<button class="btn categories-btn" data-toggle="collapse" data-target="#electronics-comp" aria-expanded="true" 
										aria-controls="electronics-comp">
										<i class="fas fa-desktop"></i> &nbsp;Computer services
										</button>
									</h5>
								</div>
								<div id="electronics-comp" class="collapse" aria-labelledby="colm1-first" data-parent="#inline-accordianOne-comp-service">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="colm1-second">
									<h5 class="mb-0">
										<button class="btn categories-btn" data-toggle="collapse" data-target="#electronics-microwave" aria-expanded="true" 
										aria-controls="electronics-microwave">
										<i class="fas fa-toolbox"></i> &nbsp; Microwaveoven repair
										</button>
									</h5>
								</div>
								<div id="electronics-microwave" class="collapse" aria-labelledby="colm1-second" data-parent="#inline-accordianOne-comp-service">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</div>
								</div>
							</div>												

						</div>	

						<div id="inline-accordianTwo-comp-service" class="inline-accordian-comp-cat col-md-6">
							
							<div class="card">
								<div class="card-header" id="colm2-first">
									<h5 class="mb-0">
										<button class="btn categories-btn" data-toggle="collapse" data-target="#electronics-mobile" aria-expanded="true" 
										aria-controls="electronics-mobile">
										<i class="fas fa-mobile-alt"></i> &nbsp; Mobile repair
										</button>
									</h5>
								</div>
								<div id="electronics-mobile" class="collapse" aria-labelledby="colm2-first" data-parent="#inline-accordianTwo-comp-service">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header" id="colm2-second">
									<h5 class="mb-0">
										<button class="btn categories-btn" data-toggle="collapse" data-target="#electronics-water-pump" aria-expanded="true" 
										aria-controls="electronics-water-pump">
											<i class="fas fa-cog"></i> &nbsp; Water pump repair
										</button>
									</h5>
								</div>
								<div id="electronics-water-pump" class="collapse" aria-labelledby="colm2-second" data-parent="#inline-accordianTwo-comp-service">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</div>
								</div>
							</div>	

						</div>			

					</div>
				</div>

			</div>

			<div id="cleaning-services" class="col-12 text-left collapse categories-info" data-parent="#categories">	<h1>Cleaning Services</h1>
			</div>
		</div>

		<!-- second row -->
		<!-- buttons -->
		<div class="row">
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#movies" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Movies</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#events" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Events &amp; Occasions</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#automobile" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Automobile Services</button>
			</div>
		</div>
		<!-- description -->
		<div class="row">
			<div class="col-12">
				<div id="movies" class="col-12 text-left collapse categories-info" data-parent="#categories">		
					<h1>Movies</h1>
				</div>
				<div id="events" class="col-12 text-left collapse categories-info" data-parent="#categories">		
					<h1>Events &amp; Occasions</h1>					
				</div>
				<div id="automobile" class="col-12 text-left collapse categories-info" data-parent="#categories">	
					<h1>Automobile Services</h1>
				</div>
			</div>
		</div>

		<!-- third row -->
		<!-- buttons -->
		<div class="row">
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#home-maintenance" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Home Maintenance</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#health" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Health &amp; Fitness</button>
			</div>
			<div class="col-md-4 jumbotron">
				<button type="button" data-toggle="collapse" data-target="#spa" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job categories-btn">Spa &amp; Salon</button>
			</div>
		</div>
		<!-- description -->
		<div class="row">
			<div class="col-12">
				<div id="home-maintenance" class="col-12 text-left collapse categories-info" data-parent="#categories">
					<h1>Home Maintenance</h1>							
				</div>
				<div id="health" class="col-12 text-left collapse categories-info" data-parent="#categories">		
					<h1>Health &amp; Fitness</h1>
				</div>
				<div id="spa" class="col-12 text-left collapse categories-info" data-parent="#categories">
					<h1>Spa &amp; Salon</h1>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include'footer.php'; ?>