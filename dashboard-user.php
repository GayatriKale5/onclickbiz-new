<?php include'header.php'; ?>

<header class="home-banner navbar-banner" role="banner">
	<div class="overlay"></div>	
</header>

<div class="row">

  <!-- Sidebar -->
  <nav class="col-md-2 d-none d-md-block bg-light sidebar h-100 sidebar-dashboard">
    <div class="sidebar-sticky">
      <ul class="nav flex-column pl-2">
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <h3><i class="fas fa-tachometer-alt"></i> Dashboard</h3>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard-user.php">
             Customer <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard-vendor.php">
            Vendor
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            Payment Details
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="col-md-10">
    <div class="container dashboard-container">
      <!-- menu -->
      <div class="row menu-row">
        <div class="col-12 col-md-4">
          <div class="jumbotron jumbotron-fluid dashboard-page-menu">
            <div class="container text-center">
              <a href="#">My Profile</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="jumbotron jumbotron-fluid dashboard-page-menu">
            <div class="container text-center">
              <a href="#">Job Posted</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="jumbotron jumbotron-fluid dashboard-page-menu">
            <div class="container text-center">
              <a href="#">Post a Job</a>
            </div>
          </div>
        </div>
      </div>

      <!-- bid and work -->
      <div class="row bid-work-row">
        <div class="col-12 col-lg-6">
          <!-- title -->
          <div class="col-12">
            <h3>Bids</h3>
          </div>
          <!-- table -->
          <table class="table table-borderless project-table">
            <thead>
              <tr class="text-center">
                <td scope="col">Project Name</td>
                <td scope="col">Vendor Name</td>
                <td scope="col">Bid</td>
                <!-- <td scope="col">Bid End Date</td> -->
                <td scope="col">Action</td>
              </tr>
            </thead>
            <tbody>
              <tr class="text-center pt-3">
                <td scope="row">XYZ</td>
                <td>PQR</td>
                <td>48<i>₹</i></td>                  
                <!-- <td>2/7/2018</td> -->
                <td>                    
                  <a href="#" class="btn btn-primary btn-post-job btn-post-job-header project-dashboard-btn">
                    Award
                  </a>
                </td>
              </tr>
              <tr class="text-center">
                <td scope="row">ABC</td>
                <td>XYZ</td>
                <td>25<i>₹</i></td>                  
                <!-- <td>8/5/2018</td> -->
                <td>                    
                  <a href="#" class="btn btn-primary btn-post-job btn-post-job-header project-dashboard-btn">
                    Award
                  </a>
                </td>
              </tr>
              <tr class="text-center">
                <td scope="row">PQR</td>
                <td>ABC</td>
                <td>60<i>₹</i></td>                  
                <!-- <td>1/4/2018</td> -->
                <td>                    
                  <a href="#" class="btn btn-primary btn-post-job btn-post-job-header project-dashboard-btn">
                    Award
                  </a>
                </td>
              </tr>                             
            </tbody>
          </table>
        </div>        
        <div class="col-12 col-lg-6">
          <!-- title -->
          <div class="col-12">
            <h3>Works</h3>
          </div>
          <!-- table -->
          <table class="table table-borderless project-table">
            <thead>
              <tr class="text-center">
                <td scope="col" rowspan="2">Project <br>Name</td>
                <td scope="col" rowspan="2">Milestone</td>                  
                <td scope="col" colspan="3">
                  Project Completed
                  <tr class="text-center">                    
                    <td scope="col">Vendor</td>
                    <td scope="col">Client</td>
                    <td scope="col">Onclick</td>
                  </tr>
                </td>                  
              </tr>                  
            </thead>
            <tbody>
              <tr class="text-center pt-3">
                <td scope="row">XYZ</td>
                <td>XYZ</td>
                <td>
                  <div class="row">
                    <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox"></div>                   
                      </label>
                    </div>
<!--                     <div class="col-6  m-0 p-0">
                      <label class="label-row">
                      <input type="checkbox">
                        <div class="custom-checkbox-cross"></div>                   
                      </label>
                    </div> -->
                  </div>
                </td>                  
                <td>
                  <div class="row ml-1">
                    <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox"></div>                   
                      </label>
                    </div>
                    <!-- <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox-cross"></div>                   
                      </label>
                    </div> -->
                  </div>
                </td>
                <td>
                  <label class="label-row">
                    <input type="checkbox">
                    <div class="custom-checkbox"></div>                   
                  </label>
                </td>
              </tr>
              <tr class="text-center">
                <td scope="row">ABC</td>
                <td>ABC</td>
                <td>
                  <div class="row">
                    <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox"></div>                   
                      </label>
                    </div>
                    <!-- <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox-cross"></div>                   
                      </label>
                    </div> -->
                  </div>
                </td>                  
                <td>
                  <div class="row ml-1">
                    <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox"></div>                   
                      </label>
                    </div>
                    <!-- <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox-cross"></div>                   
                      </label>
                    </div> -->
                  </div>
                </td>
                <td>
                  <label class="label-row">
                    <input type="checkbox">
                    <div class="custom-checkbox"></div>                   
                  </label>
                </td>                  
              </tr>
              <tr class="text-center">
                <td scope="row">PQR</td>
                <td>PQR</td>
                <td>
                  <div class="row">
                    <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox"></div>                   
                      </label>
                    </div>
                    <!-- <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox-cross"></div>                   
                      </label>
                    </div> -->
                  </div>
                </td>                  
                <td>
                  <div class="row ml-1">
                    <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox"></div>                   
                      </label>
                    </div>
                    <!-- <div class="col-6  m-0 p-0">
                      <label class="label-row">
                        <input type="checkbox">
                        <div class="custom-checkbox-cross"></div>                   
                      </label>
                    </div> -->
                  </div>
                </td>
                <td>
                  <label class="label-row">
                    <input type="checkbox">
                    <div class="custom-checkbox"></div>                   
                  </label>
                </td>
              </tr>                             
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

</div> <!-- row end -->

<?php include'footer.php'; ?>