<?php include "header.php"; ?>

<header class="home-banner forms-banner" role="banner">
	<div class="overlay"></div>
	<div class="row h-100 pt-3">
		<div class="col-md-12 my-auto text-center pt-5">				
			<div class="row">
				<div class="col-lg-12 search-btn-colm">
					<form method="post" action="listing.php" class="form-inline px-2">

						<input class="form-control mr-sm-2 search-input" type="search" placeholder="Enter Services" aria-label="Search">

						<button class="btn btn-primary btn-post-job btn-home-search my-2 my-sm-0" type="submit"><i class="fas fa-search"></i>Search</button>									
					</form>
				</div>						
			</div>				
		</div>
	</div>
</header>

<div class="container listing-container display-job-posted-container my-3">

	<!-- information row -->
	<div class="row mb-3 mt-5 listing-search-services-row">
		<div class="col-12 col-lg-3">
			<form class="form-inline my-2 my-lg-0 search-page-form listing-page-form text-center" method="post" action="sign-up.php">
				<input class="form-control mr-sm-2 search-input-search-page search-input-listing-page" type="search" placeholder="Enter service(s)" aria-label="Search">

				<button class="btn btn-outline-success btn-post-job search-btn-search-page search-btn-listing-page my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>			
		</div>

		<div class="col-12 col-lg-9">
			<div class="jumbotron p-0">
				<p>Showing(1 - 12 Services of 7585 Services)</p>
			</div>
		</div>
	</div>

	<div class="row">		

		<!-- categories -->		
		<div class="col-12 col-md-4 col-lg-3 listing-categories">
			<div class="jumbotron">				
				<!-- left side -->
				<div class="col-12">		

					<h3 class="cat-main-title">All Categories</h3>

					<form method="post" action="#" class="filter-form">

						<!-- Arts & Entertainment -->
						<div class="row p-0">
							<div class="col-12 p-0">
								<!-- Arts & Entertainment -->
								<button class="btn filter-list-btn listing-cat-link-btn text-left" type="button" data-toggle="collapse" data-target="#list-cat-arts" aria-expanded="false" aria-controls="colors-filter">
									<h5>Carpenter</h5>
								</button>

								<div class="collapse" id="list-cat-arts"> 
									<div class="card card-body">
										<!-- Cinema -->
										<button class="btn filter-list-btn listing-cat-link-btn" type="button" data-toggle="collapse" data-target="#sub-list-cat-cinema" aria-expanded="false" aria-controls="colors-filter">
											<h5 class="sub-title-cat">Lorem Ipsum</h5>
										</button>

										<div class="collapse" id="sub-list-cat-cinema"> 
											<div class="card card-body sub-cat-card-body">

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>
											
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						
						<!-- Travel -->							
						<div class="row p-0">
							<div class="col-12 p-0">
								<!-- Travel -->
								<button class="btn filter-list-btn listing-cat-link-btn text-left" type="button" data-toggle="collapse" data-target="#list-cat-travel" aria-expanded="false" aria-controls="colors-filter">
									<h5>Electrician </h5>
								</button>

								<div class="collapse" id="list-cat-travel"> 
									<div class="card card-body">
										<!-- Air Travel  -->
										<button class="btn filter-list-btn listing-cat-link-btn" type="button" data-toggle="collapse" data-target="#sub-list-cat-air-travel" aria-expanded="false" aria-controls="colors-filter">
											<h5 class="sub-title-cat">Lorem Ipsum</h5>
										</button>

										<div class="collapse" id="sub-list-cat-air-travel"> 
											<div class="card card-body sub-cat-card-body">

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>

												<a href="#"><p>Lorem Ipsum</p></a>
											
											</div>
										</div>

									</div>
								</div>

							</div>

						</div>			

					</form>

				</div>
			</div>
		</div>

		<!-- listing -->
		<div class="col-12 col-md-8 col-lg-9 listing-services display-job-posted-colm">			
			
			<!-- hotel -->
			<div class="jumbotron listing-services-jumbotron p-0 wow pulse">
				<div class="row">

					<img src="img/display-job-posted/carpenter-one.jpg" class="col-12 col-sm-6">

					<div class="col-12 col-sm-6 listing-services-text">				
						<h5>
							<i class="far fa-folder-open"></i> Carpenter
							<div class="heart-icon">
								<a href="#"><i class="far fa-heart"></i></a>
							</div>
						</h5>
						<a href="#"><h3>Best Carpenter</h3></a>
						<div class="row">
							<div class="col-12">
								<a href="#">
									<p>
										Last Updated: 4 hr ago
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="fas fa-map-marker-alt"></i> Kurla, Mumbai
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="far fa-user"></i> Satish Sharma
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="far fa-user"></i> Budget
									</p>	
								</a>
							</div>
						</div>											
					</div>
				</div>
			</div>	

			<!-- go cab -->
			<div class="jumbotron listing-services-jumbotron p-0 wow pulse">
				<div class="row">

					<img src="img/display-job-posted/carpenter-two.jpg" class="col-12 col-sm-6">

					<div class="col-12 col-sm-6 listing-services-text">				
						<h5>
							<i class="far fa-folder-open"></i> Carpenter
							<div class="heart-icon">
								<a href="#"><i class="far fa-heart"></i></a>
							</div>
						</h5>
						<a href="#"><h3>Go Carpenter</h3></a>
						<div class="row">
							<div class="col-12">
								<a href="#">
									<p>
										Last Updated: 4 hr ago
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="fas fa-map-marker-alt"></i> Marul, Mumbai
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="far fa-user"></i> Kishor Sharma
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="far fa-user"></i> Budget
									</p>	
								</a>
							</div>
						</div>											
					</div>
				</div>
			</div>	

			<!-- travel world -->
			<div class="jumbotron listing-services-jumbotron p-0 wow pulse">
				<div class="row">

					<img src="img/display-job-posted/carpenter-three.jpg" class="col-12 col-sm-6">

					<div class="col-12 col-sm-6 listing-services-text">				
						<h5>
							<i class="far fa-folder-open"></i> Carpenter
							<div class="heart-icon">
								<a href="#"><i class="far fa-heart"></i></a>
							</div>
						</h5>
						<a href="#"><h3>Shah Carpenter</h3></a>
						<div class="row">
							<div class="col-12">
								<a href="#">
									<p>
										Last Updated: 4 hr ago
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="fas fa-map-marker-alt"></i> Vashi, Mumbai
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="far fa-user"></i> Sahil Sharma
									</p>	
								</a>
							</div>
							<div class="col-12 col-md-6">
								<a href="#">
									<p>
										<i class="far fa-user"></i> Budget
									</p>	
								</a>
							</div>
						</div>											
					</div>
				</div>
			</div>	
			<!-- buttons -->
			<div class="row mt-5">
				<div class="col-12 text-center">
					<a href="#"><button type="button" class="btn btn-primary btn-post-job btn-post-job-header listing-btn-active">1</button></a>
					<a href="#"><button type="button" class="btn btn-primary btn-post-job btn-post-job-header listing-btn-active listing-border-btn">2</button></a>
					<a href="#"><button type="button" class="btn btn-primary btn-post-job btn-post-job-header listing-btn-active listing-border-btn">3</button></a>
					<a href="#"><button type="button" class="btn btn-primary btn-post-job btn-post-job-header listing-btn-active listing-border-btn listing-border-next-btn">Next</button></a>
				</div>
			</div>			
		</div>

	</div>
	
</div>

<?php include "footer.php"; ?>
