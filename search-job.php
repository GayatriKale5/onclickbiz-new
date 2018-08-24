<?php include "header.php"; ?>

<header class="home-banner search-job-banner" role="banner" style="background-image: url(img/home/home-banner-2.png)">
	<div class="overlay"></div>
	<div class="row h-100">
		<div class="col-md-12 my-auto text-center">	
			<h1>
				Grow your business with us!
			</h1>				
			<h2>List your business and start getting verified leads</h2>
		</div>
		<div class="row outer-line-dot-row mx-auto">
			<div class="col-md-12 line-dot-colm">
				<i class="fas fa-circle fa-circle-1"></i>				
				<hr class="hr-1">
				<i class="fas fa-circle fa-circle-2"></i>				
				<hr class="hr-2">
				<i class="fas fa-circle fa-circle-3"></i>
			</div>
		</div>
		<div class="col-12">
			<p class="line-dot-title-1">Services Offered</p>
			<p class="line-dot-title-2">Contact Information</p>
			<p class="line-dot-title-3">Package</p>
		</div>
	</div>
</header>

<div class="container forms-section search-job-container">
	<div class="row forms-section-row">
		<div class="col-12">
			<div class="jumbotron text-center">
				<div class="container">
					<h1>What Service do you provide?</h1>
					<p class="lead">You can edit this later from your business profile</p>

					<form class="form-inline my-2 my-lg-0 search-page-form text-center" method="post" action="sign-up.php">
						<input class="form-control mr-sm-2 search-input-search-page" type="search" placeholder="Enter service(s) you provide" aria-label="Search">

						<button class="btn btn-outline-success btn-post-job search-btn-search-page my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
					</form>
					<p class="example">Eg. Pest control, Packers &amp; Movers, AC dealers</p>
				</div>
			</div>
		</div>
	</div>	
</div>

<?php include "footer.php"; ?>
