<?php include'header.php'; ?>

<header class="home-banner navbar-banner" role="banner">
	<div class="overlay"></div>	
</header>

<div class="container detail-product-container">
	<div class="row">
		<div class="col-12 title">
			<h1>Logo Designer</h1>
		</div>
	</div>
	<div class="row jumbotron jumbotron-info p-0">
		<div class="col-md-2 text-center border-right-info">
			<p>Bid</p>
			<h3>37</h3>
		</div>
		<div class="col-md-2 text-center border-right-info">
			<p>Avg Bid</p>
			<h3><i class="ruppe-symbol">₹</i>63</h3>
		</div>
		<div class="col-md-2 text-center price">
			<h3><i>₹</i>30-<i>₹</i>230</h3>
		</div>
		<div class="col-md-5 text-right blue-text pt-3">
			<p>6 days, 23 hours left</p>
			<a href="#"><h3>OPEN</h3></a>
		</div>
	</div>
	<div class="row jumbotron jumbotron-desc p-0">
		<div class="col-12 text-left">
			<h1>Project Description</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<p>Logo should be rich in colour and meaningful.</p>
			<p>Company Name: XYZ</p>
			<p>Location: Kurla, Mumbai</p>

			<h1 class="desc-skills-title">Skills Required</h1>
			<p class="desc-text-blue">Logo designer, photoshop</p>

			<button type="button" data-toggle="collapse" data-target="#bidProposal" aria-expanded="false" class="btn btn-primary send-otp-btn btn-post-job detail-project-btn">Bid on This Project</button>
		</div>
	</div>
	<div id="bidProposal" class="row jumbotron jumbotron-bid-proposal p-0 collapse">
		<div class="col-12 text-left">
			
			<div class="row desc-and-btn pl-4 pt-4">
				<div class="jumbotron col-md-6 col-lg-8 p-0 border-0">
					<form>
						<div class="form-group">
							<textarea class="form-control jumbotron-bid-desc col-12" id="detail-product-bid-desc" rows="4" placeholder="Enter content"></textarea>
						</div>
					</form>
				</div>
				<div class="col-md-6 col-lg-4 text-center pt-4">
					<a href="#"><button type="button" class="btn btn-primary send-otp-btn btn-post-job no-of-bids-btn">Number of Bids left 2/8</button></a>
				</div>
			</div>
			
			<div class="row rate-row mb-5 mt-3">
				<div class="col-md-5 col-lg-3 text-left mt-3">
					<h1>Hourly Rate</h1>
					<form class="rate-row-form ml-3" action="#" style="max-width:200px">
						<input type="number" placeholder="10" name="rupees" class="rate-row-number-hr">
						<div class="form-group">								
							<select class="form-control send-otp-btn btn-post-job btn-rate-row" id="bid-rs-hr">
								<option selected>Select</option>
								<option>One Time</option>
								<option>Hourly</option>
								<option>Weekly</option>									
							</select>
						</div>
					</form>
				</div>			


			<div class="row price-row mt-3 pl-md-3">
				<div class="col-12 col-md-4 col-lg-3 text-left left-side-text">
					<p>Project Fee</p>
				</div>
				<div class="col-12 col-md-8 col-lg-9 pb-2 text-left right-side-price">
					<p><i>₹</i>1.111 Rupees/Hr</p>
				</div>


				<div class="col-12 col-md-4 col-lg-3 text-left left-side-text">
					<p>
						Your Total Bid 
						<button type="button" class="btn btn-primary send-otp-btn btn-post-job btn-qstn-mark mb-4 ml-1" data-container="body" data-toggle="popover" data-placement="right" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.">
						<i class="fas fa-question-circle"></i>
					</button>
				</p>
			</div>
			<div class="col-12 col-md-8 col-lg-9 pb-2 text-left right-side-price">				
				<p><i>₹</i>1.111 Rupees/Hr</p>					
			</div>


			<div class="col-12 col-md-4 col-lg-3 text-left left-side-text">				
				<p>
					Weekly Milestone 
					<button type="button" class="btn btn-primary send-otp-btn btn-post-job btn-qstn-mark mb-4 ml-1" data-container="body" data-toggle="popover" data-placement="right" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua.">
					<i class="fas fa-question-circle"></i>
				</button>	
			</p>
		</div>
		<div class="col-12 col-md-8 col-lg-9 pb-2 text-left right-side-price">				
			<p><i>₹</i>444 Rupees/Hr</p>
		</div>
	</div>

	<p class="note-p ml-md-3 pb-3"><b class="blue-text">Note:</b> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

	<hr class="my-auto pb-3 pt-2">

	<div class="row btn-place-bid-row mb-5">
		<div class="col-12 col-md-10 text-right">
			<a href="#"><button type="button" class="btn btn-primary send-otp-btn btn-post-job place-bid-btn">Place Bid</button></a>
		</div>
		<div class="col-12 col-md-2 text-left my-auto">
			<a href="#">Cancel</a>
		</div>
	</div>
</div>
</div>

</div>

<?php include'footer.php'; ?>