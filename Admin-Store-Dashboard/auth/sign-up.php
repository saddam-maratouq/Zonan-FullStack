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
  <title>Create Store Account - Admin Panel</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

<style>


      .custom-dropdown .dropdown-item input[type="checkbox"] {
        margin-right: 10px;
        margin-top: 4px;
    }
</style>

  
</head>

<body class="bg-light">
  <div class="wrapper">
    
    <div class="content mt-5 mb-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            
            <div class="card">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">Create Store Account</h4>
                <p class="card-category">Join our platform and start selling today</p>
              </div>
              <div class="card-body">
                
                <form action="" method="POST" enctype="multipart/form-data">
                  
                  <!-- Store Name & Logo -->
                  <div class="row mb-3 ">

                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Store Name *</label>
                        <input type="text" class="form-control" name="store_name" required>
                      </div>
                    </div>

                    <!-- <div class="col-md-6">
                      <div class="form-group mt-4">
                        <label style="display: block; margin-bottom: 10px;">Store Logo *</label>
                        <input type="file" class="form-control-file" name="store_logo" accept="image/*" required style="display: block !important; opacity: 1 !important; position: relative !important; border: 1px solid #ccc; padding: 8px; border-radius: 4px;">
                        <small class="form-text text-muted mt-1">Hint: Best size is 500x500px (PNG/JPG). Max 2MB.</small>
                      </div>
                    </div> -->


                  </div>


             <div class="mb-4 col-md-12" bis_skin_checked="1">
                  <label class=" "> Store Logo * </label>
                  <input type="file" name="store_img" class="form-control" accept="image/*" title="">
                  <small class="text-muted">Allowed: JPG, JPEG, PNG, GIF, WEBP, SVG (Max: 5MB)</small>
               </div>

                  <!-- Email & Phone -->
                  <div class="row mb-4 ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Email Address *</label>
                        <input type="email" class="form-control" name="email" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Phone Number *</label>
                        <input type="text" class="form-control" name="phone" required>
                      </div>
                    </div>
                  </div>

                  <!-- Username & Passwords -->
                  <div class="row mb-4 ">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Username *</label>
                        <input type="text" class="form-control" name="username" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Password *</label>
                        <input type="password" class="form-control" name="password" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Re-Password *</label>
                        <input type="password" class="form-control" name="re_password" required>
                      </div>
                    </div>
                  </div>

                  <!-- IBAN & Google Map -->
                  <div class="row mb-4 ">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Wallet or Bank IBAN *</label>
                        <input type="text" class="form-control" name="iban" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Shipping Address (Google Map Link) *</label>
                        <input type="url" class="form-control" name="map_link" required>
                        <small class="form-text text-muted">Hint: Open Google Maps -> Right-click your shop -> Click coordinates to copy -> Paste the link here.</small>
                      </div>
                    </div>
                  </div>

                  <!-- Card Holder Name (4 Inputs) -->
                  <div class="row mb-4">
                    <div class="col-md-12">
                      <label>Card Holder Name (Req First, Second, Third, Fourth) *</label>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" class="form-control" name="card_first" placeholder="First Name" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" class="form-control" name="card_second" placeholder="Second Name" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" class="form-control" name="card_third" placeholder="Third Name" required>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <input type="text" class="form-control" name="card_fourth" placeholder="Fourth Name" required>
                      </div>
                    </div>
                  </div>

                  <!-- <hr class="mt-4 mb-4"> -->

                  <!-- Categories & Sub-categories (Same as Product Form) -->
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Shop Category * (Select Multiple)</label>
                        <div class="dropdown custom-dropdown">
                          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                            Select Categories...
                          </button>
                          <div class="dropdown-menu">
                            <label class="dropdown-item"><input type="checkbox" name="categories[]" value="Clothing"> Clothing</label>
                            <label class="dropdown-item"><input type="checkbox" name="categories[]" value="Electronics"> Electronics</label>
                            <label class="dropdown-item"><input type="checkbox" name="categories[]" value="Home"> Home & Living</label>
                            <label class="dropdown-item"><input type="checkbox" name="categories[]" value="Beauty"> Beauty</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Sub-Category * (Select Multiple)</label>
                        <div class="dropdown custom-dropdown">
                          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                            Select Sub-Categories...
                          </button>
                          <div class="dropdown-menu">
                            <label class="dropdown-item"><input type="checkbox" name="sub_categories[]" value="Tops"> Tops</label>
                            <label class="dropdown-item"><input type="checkbox" name="sub_categories[]" value="Bottoms"> Bottoms</label>
                            <label class="dropdown-item"><input type="checkbox" name="sub_categories[]" value="Shoes"> Shoes</label>
                            <label class="dropdown-item"><input type="checkbox" name="sub_categories[]" value="Accessories"> Accessories</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Terms and Conditions Checkbox -->
                  <div class="row mt-4">
                    <div class="col-md-12">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" name="terms" required>
                          I agree to the Terms and Conditions.
                          <span class="form-check-sign"><span class="check"></span></span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <!-- Submit Button -->
                  <button type="submit" class="btn btn-primary btn-block mt-4">Creat Account</button>

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
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  
  <script>
    // Keep the custom dropdown open when clicking checkboxes
    $(document).ready(function() {
      $('.custom-dropdown .dropdown-menu').click(function(e) {
        e.stopPropagation();
      });
    });
  </script>
</body>

</html>