

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Footer Form</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />
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
                <h5 class="card-title">Edit Footer</h5>
              </div>
              <div class="card-body">
               

                <form action="" method="" enctype="multipart/form-data">

                  <!-- ================= 1. Website Logo ================= -->
                  <div class="mb-3">
                    <label for="website_logo" class="form-label">Website Logo</label>
                    <input type="file" class="form-control" id="website_logo" name="website_logo" accept="image/*">
                    <small class="form-text text-muted">
                      Recommended size: <strong>200 × 60 px</strong> (PNG or SVG, transparent background).
                    </small>
                  </div>

                  <!-- ================= 2. Slogan ================= -->
                  <div class="mb-3">
                    <label for="slogan" class="form-label">Slogan</label>
                    <input type="text" class="form-control" id="slogan" name="slogan"
                      placeholder="Your short brand slogan">
                    <small class="form-text text-muted">
                      Recommended length: <strong>max 80 characters</strong>.
                    </small>
                  </div>

                  <!-- ================= 3. Follow Us on Social ================= -->
                  <h5 class="mt-4">Follow Us on Social</h5>

                  <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook"
                      placeholder="https://www.facebook.com/">
                  </div>

                  <div class="mb-3">
                    <label for="instagram" class="form-label">Instagram</label>
                    <input type="text" class="form-control" id="instagram" name="instagram"
                      placeholder="https://www.instagram.com/">
                  </div>

                  <div class="mb-3">
                    <label for="whatsapp" class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp"
                      placeholder="https://wa.me/1234567890">
                  </div>

                  <!-- ================= 4. Security ================= -->
                  <h5 class="mt-4">Security</h5>

                  <div class="mb-3">
                    <label for="security_image" class="form-label">Security Image</label>
                    <input type="file" class="form-control" id="security_image" name="security_image" accept="image/*">
                    <small class="form-text text-muted">
                      Recommended size: <strong>400 × 400 px</strong> (PNG, JPG or SVG).
                    </small>
                  </div>

                  <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="border rounded p-3 mb-3">
                      <h6 class="mb-3">Security Point <?= $i ?></h6>

                      <div class="mb-3">
                        <label for="security_title_<?= $i ?>" class="form-label">Title</label>
                        <input type="text" class="form-control" id="security_title_<?= $i ?>"
                          name="security_title_<?= $i ?>" placeholder="Security title <?= $i ?>">
                      </div>

                      <div class="mb-3">
                        <label for="security_desc_<?= $i ?>" class="form-label">Description</label>
                        <textarea class="form-control" id="security_desc_<?= $i ?>"
                          name="security_desc_<?= $i ?>" rows="2"
                          placeholder="Short description for point <?= $i ?>"></textarea>
                      </div>
                    </div>
                  <?php endfor; ?>

                  <!-- ================= 5. FAQ ================= -->
                  <h5 class="mt-4">FAQ</h5>

                  <div id="faq-container">

                    <!-- FAQ Item 1 -->
                    <div class="border rounded p-3 mb-3 faq-item">
                      <div class="mb-3">
                        <label class="form-label">Question</label>
                        <input type="text" class="form-control" name="faq_question[]" placeholder="Enter question">
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Answer Type</label>
                        <select class="form-control faq-type" name="faq_type[]">
                          <option value="text">Text</option>
                          <option value="video">Video</option>
                        </select>
                      </div>

                      <div class="mb-3 faq-text">
                        <label class="form-label">Answer (Text)</label>
                        <textarea class="form-control" name="faq_answer_text[]" rows="2" placeholder="Enter text answer"></textarea>
                      </div>

                      <div class="mb-3 faq-video" style="display:none;">
                        <label class="form-label">Answer (Video URL)</label>
                        <input type="text" class="form-control" name="faq_answer_video[]" placeholder="https://youtube.com/...">
                      </div>
                    </div>

                  </div>

                  <div class="mb-3">
                    <button type="button" class="btn btn-outline-primary" id="add-faq">
                      <i class="fa fa-plus"></i> Add New FAQ
                    </button>
                  </div>

                  <!-- ================= Buttons ================= -->
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
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard -->
  <script src="../../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods -->
  <script src="../../assets/demo/demo.js"></script>

  <!-- ============ FAQ toggle + Add New logic ============ -->
  <script>
    // Toggle text/video field per FAQ item
    $(document).on('change', '.faq-type', function () {
      var $item = $(this).closest('.faq-item');
      if ($(this).val() === 'video') {
        $item.find('.faq-text').hide();
        $item.find('.faq-video').show();
      } else {
        $item.find('.faq-text').show();
        $item.find('.faq-video').hide();
      }
    });

    // Add new FAQ item
    $('#add-faq').on('click', function () {
      var $clone = $('.faq-item').first().clone();
      $clone.find('input, textarea').val('');
      $clone.find('.faq-text').show();
      $clone.find('.faq-video').hide();
      $clone.find('select').val('text');
      $('#faq-container').append($clone);
    });
  </script>

</body>

</html>