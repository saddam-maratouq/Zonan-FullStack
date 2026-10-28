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
  <title>Add New Product - Admin Panel</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  
  <!-- Custom CSS to fix the messy dropdown -->
  <style>
    .custom-dropdown {
        position: relative;
    }
    .custom-dropdown .dropdown-menu {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        border: 1px solid #ddd;
    }
    .custom-dropdown .dropdown-item {
        padding: 8px 15px;
        cursor: pointer;
        display: flex;
        align-items: center;
    }
    
    .custom-dropdown .dropdown-item input[type="checkbox"] {
        margin-right: 10px;
        margin-top: 4px;
    }
    .custom-dropdown .dropdown-toggle {
        text-align: left;
        background: transparent;
        border-bottom: 1px solid #d2d2d2;
        border-radius: 0;
        color: #495057;
        padding: 10px 0;
        box-shadow: none !important;
    }
    .custom-dropdown .dropdown-toggle::after {
        float: right;
        margin-top: 10px;
    }
  </style>
</head>

<body class="">
  <div class="wrapper ">
    
    <?php include '../../components/sidebar.php'; ?>

    <div class="main-panel">
      
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Add New Product</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </nav>

      <div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add New Product</h4>
                  <p class="card-category">Fill in the details below to add a new product</p>
                </div>
                <div class="card-body">
                  
                  <form action="" method="POST" enctype="multipart/form-data">
                    
                    <!-- LANGUAGE SWITCHER -->
                    <div class="row mb-4">
                      <div class="col-md-12 text-center">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                          <label class="btn btn-primary active" onclick="toggleLanguage('en')">
                            <input type="radio" name="lang_toggle" id="lang_en" autocomplete="off" checked> English Fields
                          </label>
                          <label class="btn btn-primary" onclick="toggleLanguage('ar')">
                            <input type="radio" name="lang_toggle" id="lang_ar" autocomplete="off"> Arabic Fields
                          </label>
                        </div>
                      </div>
                    </div>

                    <!-- ENGLISH FIELDS -->
                    <div id="fields-en" style="display: block;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Product Name (EN) *</label>
                            <input type="text" class="form-control" name="product_name_en" required>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Short Description (EN) *</label>
                            <textarea class="form-control" name="short_desc_en" rows="2" required></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Full Description (EN) *</label>
                            <textarea class="form-control" name="full_desc_en" rows="3" required></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- ARABIC FIELDS -->
                    <div id="fields-ar" style="display: none;">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Product Name (AR) *</label>
                            <input type="text" class="form-control" name="product_name_ar" dir="rtl">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Short Description (AR) *</label>
                            <textarea class="form-control" name="short_desc_ar" rows="2" dir="rtl"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Full Description (AR) *</label>
                            <textarea class="form-control" name="full_desc_ar" rows="3" dir="rtl"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Store Name *</label>
                          <input type="text" class="form-control" name="store_name" required>
                        </div>
                      </div>

                     <!-- <div class="col-md-6">
                    <div class="form-group mt-4">
                        <label style="display: block; margin-bottom: 10px;">Store Logo *</label>
                        
                        <input type="file" name="store_logo" accept="image/*" required style="display: block !important; opacity: 1 !important; position: relative !important; width: 100%; border: 1px solid #ccc; padding: 8px; border-radius: 4px;">
                        <small class="form-text text-muted mt-2">Hint: 500x500px (PNG/JPG). Max 2MB.</small>
                    </div>
                </div> -->

                    </div>

                    <!-- MULTI-SELECT DROPDOWNS -->
                    <div class="row">
                      <!-- Category -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Product Category *</label>
                          <div class="dropdown custom-dropdown">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" id="catBtn">
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
                      
                      <!-- Sub Category -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Sub-Category *</label>
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

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Product Material *</label>
                          <input type="text" class="form-control" name="material" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <!-- Sizes -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Available Sizes *</label>
                          <div class="dropdown custom-dropdown">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                              Select Sizes...
                            </button>
                            <div class="dropdown-menu">
                              <label class="dropdown-item"><input type="checkbox" name="sizes[]" value="XS"> XS</label>
                              <label class="dropdown-item"><input type="checkbox" name="sizes[]" value="S"> S</label>
                              <label class="dropdown-item"><input type="checkbox" name="sizes[]" value="M"> M</label>
                              <label class="dropdown-item"><input type="checkbox" name="sizes[]" value="L"> L</label>
                              <label class="dropdown-item"><input type="checkbox" name="sizes[]" value="XL"> XL</label>
                              <label class="dropdown-item"><input type="checkbox" name="sizes[]" value="XXL"> XXL</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6 mt-3 "  >
                        <div class="form-group">
                          <label class="">Colors *</label>
                          <input type="text" class="form-control " name="colors" placeholder="e.g. Red, Blue, Black" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Price *</label>
                          <div class="input-group">
                            <input type="number" step="0.01" class="form-control" name="price" required>
                            <div class="input-group-append">
                              <span class="input-group-text">JD</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Discount (Optional)</label>
                          <div class="input-group">
                            <input type="number" step="0.01" class="form-control" name="discount">
                            <div class="input-group-append">
                              <span class="input-group-text">JD</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Delivery Policy (Time of Arrival) *</label>
                          <textarea class="form-control" name="delivery_policy" rows="2" required></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Return Policy *</label>
                          <textarea class="form-control" name="return_policy" rows="2" required></textarea>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block mt-4">Save Product</button>

                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="material-icons">favorite</i> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  
  <script>
    // Toggle Language
    function toggleLanguage(lang) {
      if (lang === 'en') {
        document.getElementById('fields-en').style.display = 'block';
        document.getElementById('fields-ar').style.display = 'none';
        
        document.querySelector('input[name="product_name_en"]').required = true;
        document.querySelector('textarea[name="short_desc_en"]').required = true;
        document.querySelector('textarea[name="full_desc_en"]').required = true;
        
        document.querySelector('input[name="product_name_ar"]').required = false;
        document.querySelector('textarea[name="short_desc_ar"]').required = false;
        document.querySelector('textarea[name="full_desc_ar"]').required = false;
      } else {
        document.getElementById('fields-en').style.display = 'none';
        document.getElementById('fields-ar').style.display = 'block';
        
        document.querySelector('input[name="product_name_en"]').required = false;
        document.querySelector('textarea[name="short_desc_en"]').required = false;
        document.querySelector('textarea[name="full_desc_en"]').required = false;
        
        document.querySelector('input[name="product_name_ar"]').required = true;
        document.querySelector('textarea[name="short_desc_ar"]').required = true;
        document.querySelector('textarea[name="full_desc_ar"]').required = true;
      }
    }

    // Optional: Keep dropdown open when clicking checkboxes
    $(document).ready(function() {
      $('.custom-dropdown .dropdown-menu').click(function(e) {
        e.stopPropagation();
      });
    });
  </script>
</body>

</html>