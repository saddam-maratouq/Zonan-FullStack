<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Store Form</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
  <!-- custom css -->
  <link href="../../assets/css/custom.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../../assets/img/logo-small.png">
          </div>
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>

      <!-- ============ SIDEBAR (included) ============ -->
      <?php include __DIR__ . '/../../includes/components/sidebar.php'; ?>

    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Paper Dashboard 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p><span class="d-lg-none d-md-block">Stats</span></p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p><span class="d-lg-none d-md-block">Some Actions</span></p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="javascript:;">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p><span class="d-lg-none d-md-block">Account</span></p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card demo-icons">
              <div class="card-header">
                <h5 class="card-title">Edit Store</h5>
              </div>
              <div class="card-body">
                <h5>Store Settings</h5>

                <form action="" method="" enctype="multipart/form-data">

                  <!-- 1. Store Name -->
                  <div class="mb-3">
                    <label for="store_name" class="form-label">Store Name</label>
                    <input type="text" class="form-control" id="store_name" name="store_name"
                      placeholder="Zonan Coffee House" required>
                    <small class="form-text text-muted">
                      Recommended length: <strong>max 60 characters</strong>.
                    </small>
                  </div>

                  <!-- 2. Store Logo -->
                  <div class="mb-3">
                    <label for="store_logo" class="form-label">Store Logo</label>
                    <input type="file" class="form-control" id="store_logo" name="store_logo" accept="image/*" required>
                    <small class="form-text text-muted">
                      Recommended size: <strong>400 × 400 px</strong> (square, PNG or SVG, transparent background).
                    </small>
                  </div>

                  <!-- 3. Email -->
                  <div class="mb-3">
                    <label for="store_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="store_email" name="store_email"
                      placeholder="store@example.com" required>
                    <small class="form-text text-muted">
                      Must be a valid email address.
                    </small>
                  </div>

                  <!-- 4. Phone Number -->
                  <div class="mb-3">
                    <label for="store_phone" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="store_phone" name="store_phone"
                      placeholder="+962 786 551 0101" required>
                    <small class="form-text text-muted">
                      Include country code for international support.
                    </small>
                  </div>

                  <!-- 5. Username -->
                  <div class="mb-3">
                    <label for="store_username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="store_username" name="store_username"
                      placeholder="zonan_coffee" required>
                    <small class="form-text text-muted">
                      Used to log in to the store panel. Letters, numbers, underscore. Max 20 characters.
                    </small>
                  </div>

                  <!-- 6. Wallet / Bank IBAN -->
                  <div class="mb-3">
                    <label class="form-label">Payout Method</label>
                    <div class="row">
                      <div class="col-md-4 mb-2">
                        <select class="form-control" id="payout_type" name="payout_type" required>
                          <option value="wallet">Wallet</option>
                          <option value="bank">Bank IBAN</option>
                        </select>
                      </div>
                      <div class="col-md-8">
                        <input type="text" class="form-control" id="payout_value" name="payout_value"
                          placeholder="PayPal email / mobile wallet / IBAN" required>
                      </div>
                    </div>
                    <small class="form-text text-muted">
                      Select <strong>Wallet</strong> (PayPal, mobile wallet) or <strong>Bank IBAN</strong>, then enter the value.
                    </small>
                  </div>

                  <!-- 7. Card Holder Name -->
                  <h5 class="mt-4">Card Holder Name</h5>
                  <div class="row">
                    <div class="col-md-3 mb-3">
                      <label for="holder_first" class="form-label">First</label>
                      <input type="text" class="form-control" id="holder_first" name="holder_first" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="holder_second" class="form-label">Second</label>
                      <input type="text" class="form-control" id="holder_second" name="holder_second" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="holder_third" class="form-label">Third</label>
                      <input type="text" class="form-control" id="holder_third" name="holder_third" required>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="holder_fourth" class="form-label">Fourth</label>
                      <input type="text" class="form-control" id="holder_fourth" name="holder_fourth" required>
                    </div>
                  </div>
                  <small class="form-text text-muted d-block mb-3">
                    All four parts are <strong>required</strong>.
                  </small>

                  <!-- 8. Shipping Address (Google Maps Link) -->
                  <div class="mb-3">
                    <label for="shipping_address" class="form-label">Shipping Address (Google Maps Link)</label>
                    <input type="text" class="form-control" id="shipping_address" name="shipping_address"
                      placeholder="https://maps.app.goo.gl/..." required>
                    <small class="form-text text-muted">
                      Open Google Maps → search your address → click <strong>Share</strong> → <strong>Copy link</strong> → paste it here.
                    </small>
                  </div>

                  <!-- 9. Shop Category (multi, with subs) -->
                  <h5 class="mt-4">Shop Category</h5>
                  <small class="form-text text-muted d-block mb-3">
                    Tick one or more. Categories with subcategories show them below.
                  </small>

                  <div class="border rounded p-5">

                    <!-- Electronics -->
                    <div class="category-group mb-3">
                      <div class="form-check">
                          <input class="form-check-input parent-cat" type="checkbox" id="cat_electronics" data-group="electronics" disabled>
                          <label class="form-check-label font-weight-bold" for="cat_electronics">Electronics</label>
                      </div>
                      <div class="pl-4">
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_phones" name="categories[]" value="electronics.phones" data-group="electronics">
                          <label class="form-check-label" for="cat_phones">Phones</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_laptops" name="categories[]" value="electronics.laptops" data-group="electronics">
                          <label class="form-check-label" for="cat_laptops">Laptops</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_audio" name="categories[]" value="electronics.audio" data-group="electronics">
                          <label class="form-check-label" for="cat_audio">Audio</label>
                        </div>
                      </div>
                    </div>

                    <!-- Fashion -->
                    <div class="category-group mb-3">
                      <div class="form-check">
                        <input class="form-check-input parent-cat" type="checkbox" id="cat_fashion" data-group="fashion" disabled>
                        <label class="form-check-label font-weight-bold" for="cat_fashion">Fashion</label>
                      </div>
                      <div class="pl-4">
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_men" name="categories[]" value="fashion.men" data-group="fashion">
                          <label class="form-check-label" for="cat_men">Men</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_women" name="categories[]" value="fashion.women" data-group="fashion">
                          <label class="form-check-label" for="cat_women">Women</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_kids" name="categories[]" value="fashion.kids" data-group="fashion">
                          <label class="form-check-label" for="cat_kids">Kids</label>
                        </div>
                      </div>
                    </div>

                    <!-- Food & Beverage -->
                    <div class="category-group mb-3">
                      <div class="form-check">
                        <input class="form-check-input parent-cat" type="checkbox" id="cat_food" data-group="food" disabled>
                        <label class="form-check-label font-weight-bold" for="cat_food">Food & Beverage</label>
                      </div>
                      <div class="pl-4">
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_restaurants" name="categories[]" value="food.restaurants" data-group="food">
                          <label class="form-check-label" for="cat_restaurants">Restaurants</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_cafes" name="categories[]" value="food.cafes" data-group="food">
                          <label class="form-check-label" for="cat_cafes">Cafés</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_grocery" name="categories[]" value="food.grocery" data-group="food">
                          <label class="form-check-label" for="cat_grocery">Grocery</label>
                        </div>
                      </div>
                    </div>

                    <!-- Home & Garden -->
                    <div class="category-group mb-3">
                      <div class="form-check">
                        <input class="form-check-input parent-cat" type="checkbox" id="cat_home" data-group="home" disabled>
                        <label class="form-check-label font-weight-bold" for="cat_home">Home & Garden</label>
                      </div>
                      <div class="pl-4">
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_furniture" name="categories[]" value="home.furniture" data-group="home">
                          <label class="form-check-label" for="cat_furniture">Furniture</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input child-cat" type="checkbox" id="cat_decor" name="categories[]" value="home.decor" data-group="home">
                          <label class="form-check-label" for="cat_decor">Decor</label>
                        </div>
                      </div>
                    </div>

                    <!-- Health & Beauty (no subs) -->
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="cat_health" name="categories[]" value="health">
                      <label class="form-check-label" for="cat_health">Health & Beauty</label>
                    </div>

                    <!-- Sports (no subs) -->
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="cat_sports" name="categories[]" value="sports">
                      <label class="form-check-label" for="cat_sports">Sports</label>
                    </div>

                    <!-- Books (no subs) -->
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="cat_books" name="categories[]" value="books">
                      <label class="form-check-label" for="cat_books">Books</label>
                    </div>

                    <!-- Toys (no subs) -->
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="cat_toys" name="categories[]" value="toys">
                      <label class="form-check-label" for="cat_toys">Toys</label>
                    </div>

                    <!-- Automotive (no subs) -->
                    <div class="form-check mb-2">
                      <input class="form-check-input" type="checkbox" id="cat_auto" name="categories[]" value="automotive">
                      <label class="form-check-label" for="cat_auto">Automotive</label>
                    </div>

                    <!-- Other (no subs) -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="cat_other" name="categories[]" value="other">
                      <label class="form-check-label" for="cat_other">Other</label>
                    </div>

                  </div>

                  <!-- Buttons -->
                  <div class="d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary">Edit</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="../../assets/demo/demo.js"></script>

  <!-- Parent category auto-tick -->
  <script>
    $(document).on('change', '.child-cat', function () {
      var group = $(this).data('group');
      var $children = $('.child-cat[data-group="' + group + '"]');
      var anyChecked = $children.filter(':checked').length > 0;
      $('.parent-cat[data-group="' + group + '"]').prop('checked', anyChecked);
    });
  </script>
</body>

</html>