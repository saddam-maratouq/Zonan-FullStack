<?php
// Include Config
require_once '../../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Products Views - Admin Panel</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    
    <!-- DYNAMIC SIDEBAR -->
    <?php include '../../components/sidebar.php'; ?>

    <div class="main-panel">
      
      <!-- Navbar (Exactly from your template) -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Products Views</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">Stats</p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">Some Actions</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">Account</p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <!-- MAIN CONTENT AREA -->
      <div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Product Views Analytics</h4>
                  <p class="card-category">Track how many times each product was viewed</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="text-gray">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th class="text-right">Total Views</th>
                      </thead>
                      <tbody>
                        
                        <!-- Row 1 (Most Viewed) -->
                        <tr>
                          <td>2</td>
                          <td>
                            <img src="https://via.placeholder.com/50" alt="Product" style="width: 50px; height: 50px; border-radius: 5px; object-fit: cover;">
                          </td>
                          <td>Wireless Headphones</td>
                          <td>Electronics</td>
                          <td class="text-right font-weight-bold" style="font-size: 16px; color: #9c27b0;">
                            1,204 <i class="material-icons" style="font-size: 18px; vertical-align: middle;">visibility</i>
                          </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                          <td>1</td>
                          <td>
                            <img src="https://via.placeholder.com/50" alt="Product" style="width: 50px; height: 50px; border-radius: 5px; object-fit: cover;">
                          </td>
                          <td>Classic T-Shirt</td>
                          <td>Clothing</td>
                          <td class="text-right font-weight-bold" style="font-size: 16px; color: #9c27b0;">
                            856 <i class="material-icons" style="font-size: 18px; vertical-align: middle;">visibility</i>
                          </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                          <td>3</td>
                          <td>
                            <img src="https://via.placeholder.com/50" alt="Product" style="width: 50px; height: 50px; border-radius: 5px; object-fit: cover;">
                          </td>
                          <td>Table Lamp</td>
                          <td>Home & Living</td>
                          <td class="text-right font-weight-bold" style="font-size: 16px; color: #9c27b0;">
                            342 <i class="material-icons" style="font-size: 18px; vertical-align: middle;">visibility</i>
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="material-icons">favorite</i> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- Core JS Files -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
</body>

</html>