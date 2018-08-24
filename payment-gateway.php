<?php include'header.php'; ?>

<header class="home-banner navbar-banner" role="banner">
	<div class="overlay"></div>	
</header>

<div class="row">

  <!-- Page Content -->
  <div class="col-12">
    <div class="container payment-details-container">
      <!-- payment summary -->
      <div class="row summary-row">
        <div class="col-12 summary-colm mt-5">
          <div class="jumbotron summary-jumbotron pt-2">
            <h1 class="display-5">Payment Summary</h1>
            <p>Please review the following details for this transaction</p> 
            
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                <!-- table -->
                <table class="table table-borderless payment-table">
                  <thead>
                    <tr>
                      <td scope="col" class="text-left">Description</td>
                      <td scope="col" class="text-right">Item Price</td>                
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-bottom">
                      <td scope="row" class="text-left">Cost of 10 Bid</td>                
                      <td class="text-right"><i>₹</i>100</td>                                  
                    </tr>
                    <tr>
                      <td scope="row" class="text-left">Total</td>                
                      <td class="text-right"><i>₹</i>100</td>                                  
                    </tr>                            
                  </tbody>
                </table>                        
              </div>
              <div class="col-md-1"></div>
            </div>

          </div>
        </div>
      </div>

      <!-- billing information -->
      <div class="row billing-info-row">
        <div class="col-12 billing-info-colm mt-5">
          <div class="jumbotron summary-jumbotron billing-outer-jumbotron pt-2">
            <!-- title -->
            <h1 class="display-5">Billing Information</h1>
            <p>Enter your payment details below</p> 
            <!-- payment option -->
            <div class="jumbotron payment-option-jumbotron pt-2">
              <div class="row payment-row">
                <!-- heading -->
                <div class="col-12 col-md-6">
                  <h5>Payment Option</h5>
                </div>
                <!-- payment options card-->
                <div class="col-12 col-md-6 payment-options-card">
                  <i class="fab fa-cc-paypal pay-paypal"></i>
                  <i class="fab fa-cc-visa pay-visa"></i>
                  <i class="fab fa-cc-discover pay-discover"></i>
                  <i class="fab fa-cc-mastercard pay-mastercard"></i>
                </div>
                <i class="fas fa-chevron-circle-down payment-row-arrow"></i>
              </div>             
            </div>
            <!-- credit card form -->
            <div class="row credit-card-row">
              <!-- heading -->
              <div class="col-12 col-md-4 col-lg-5">
                <h5 class="credit-card-h5">Credit Card<i class="credit-card-star">*</i></h5>
              </div>
              <!-- form -->
              <div class="col-12 col-md-8 col-lg-7 form-colm">
                <form method="post" action="#" class="payment-form">
                  <div class="row">
                    <div class="form-group col-12 col-md-6">                    
                      <input type="text" class="form-control" id="payment-first-name" aria-describedby="first-name" required>                    
                        <label for="payment-first-name">First Name</label>
                    </div>
                    <div class="form-group col-12 col-md-6">                    
                      <input type="text" class="form-control" id="payment-last-name" required>
                        <label for="payment-last-name">Last Name</label>
                    </div>
                    <div class="form-group col-12">                    
                      <input type="text" class="form-control" id="payment-credit-card-num" required>
                        <label for="payment-credit-card-num">Credit card number</label>
                    </div>
                    <div class="form-group col-12 col-md-5">                    
                      <input type="number" class="form-control" id="payment-credit-card-exp-month" required>
                        <label for="payment-credit-card-exp-month">Expiration month</label>
                    </div>
                    <div class="form-group col-12 col-md-3">                    
                      <input type="number" class="form-control" id="payment-credit-card-year" required>
                        <label for="payment-credit-card-year">Year</label>
                    </div>
                    <div class="form-group col-12 col-md-4">                    
                      <input type="number" class="form-control" id="payment-credit-card-code" required>
                        <label for="payment-credit-card-code">Code</label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary btn-post-job payment-pay-btn">Pay Now</button>
                </form>
              </div>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- row end -->

<?php include'footer.php'; ?>