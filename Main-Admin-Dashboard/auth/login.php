<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Main Admin - Login</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="../assets/css/custom.css" rel="stylesheet" />
</head>

<body class="bg-light d-flex align-items-center justify-content-center" style="min-height: 100vh;">

  <!-- Main Container with Blue Border -->
  <div class="container">
    <div class="row justify-content-center">
      
      <!-- The Box -->
      <div class="col-lg-10 bg-white rounded-lg border border-info p-5 shadow-lg">
        
        <div class="row align-items-center" style="min-height: 500px;">
          
          <!-- LEFT SIDE -->
          <div class="col-md-6 d-flex flex-column align-items-center justify-content-between h-100 pb-4">
            
            <!-- Logo Circle -->
            <div class="mt-4"></div>
            <div class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 200px; height: 200px;">
              <h3 class="text-dark font-weight-bold text-center m-0">Website<br>Logo</h3>
            </div>
            
            <!-- Zonan (Replaced Slogan) -->
            <h2 class="text-dark font-weight-bold mt-4 mb-5">Zonan</h2>
            
            <!-- Main Admin Text -->
            <div class="w-100 text-left mt-auto">
              <h4 class="text-dark font-weight-light">Main Admin</h4>
            </div>
            
          </div>

          <!-- DIVIDER -->
          <!-- <div class="col-1 d-flex justify-content-center px-0">
            <div class="bg-dark rounded" style="width: 4px; height: 400px;"></div>
          </div> -->

          <!-- RIGHT SIDE -->
          <div class="col-md-5 d-flex justify-content-center">
            
            <!-- Login Card -->
            <div class="card border border-info rounded-lg w-100 shadow-none" style="border-width: 4px !important;">
              <div class="card-body p-5">
                
                <h3 class="text-center text-dark font-weight-normal mb-5">Login</h3>
                
                <form action="" method="POST">
                  
                  <div class="form-group mb-4">
                    <label for="username" class="text-dark font-weight-bold">1- Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                  </div>

                  <div class="form-group mb-5">
                    <label for="password" class="text-dark font-weight-bold">2- Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>

                  <button type="submit" class="btn btn-dark btn-block font-weight-bold">4- Login Button</button>

                </form>
                
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
  <script src="../assets/js/core/bootstrap.min.js"></script>
</body>

</html>