<?php
// Include Config (Go up 1 folder from auth/ to root)
require_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Login - Admin Panel</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body class="bg-light">
  <div class="wrapper">
    
    <!-- Center the login card vertically and horizontally -->
    <div class="content" style="margin-top: 10vh;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 ml-auto mr-auto">
            
            <div class="card">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Login</h4>
                <p class="card-category">Enter your credentials to access the dashboard</p>
              </div>
              <div class="card-body">
                
                <form action="" method="POST">
                  
                  <!-- Email -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email Address</label>
                        <input type="email" class="form-control" name="email" required>
                      </div>
                    </div>
                  </div>

                  <!-- Password -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                    </div>
                  </div>

                  <!-- Login Button -->
                  <button type="submit" class="btn btn-primary btn-block mt-4">Log In</button>

                </form>

                <!-- Sign Up Link -->
                <div class="text-center mt-4">
                  <p class="text-muted" style="font-size: 14px;">
                    Don't have an account? 
                    <a href="sign-up.php" class="text-primary" style="font-weight: bold;">Sign Up</a>
                  </p>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    
  </div>

  <!-- Core JS Files -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
</body>

</html>