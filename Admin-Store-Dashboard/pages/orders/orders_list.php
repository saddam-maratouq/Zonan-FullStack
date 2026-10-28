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
  <title>Orders - Admin Panel</title>
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
            <a class="navbar-brand" href="javascript:;">Orders</a>
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
                <div class="card-header  d-flex justify-content-between align-items-center">
                  <div>
                    <h4 class="card-title">Orders List</h4>
                    <p class="card-category">View and manage customer orders</p>
                  </div>
                  
                  <!-- Export to Excel Button -->
                  <button onclick="exportTableToExcel('ordersTable', 'Store_Orders')" class="btn btn-success btn-round btn-sm">
                    <i class="material-icons" style="font-size: 18px; vertical-align: middle;">download</i> Export to Excel
                  </button>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <!-- We give the table an ID so the Excel script can find it -->
                    <table class="table" id="ordersTable">
                      <thead class="text-gray">
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Phone Number</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Sub-Category</th>
                        <th>QTY + Color</th>
                        <th>Total Amount</th>
                        <th class="text-right">Actions</th>
                      </thead>
                      <tbody>
                        
                        <!-- Row 1 -->
                        <tr>
                          <td>#-1001</td>
                          <td>Ahmed Ali</td>
                          <td>0791234567</td>
                          <td>Classic T-Shirt</td>
                          <td>Clothing</td>
                          <td>Tops</td>
                          <td>2x (Red, Blue)</td>
                          <td>30.00 JD</td>
                          <td class="td-actions text-right">
                            <!-- View All Button -->
                            <a href="order_details.php?id=1001" class="btn btn-info btn-link btn-sm" title="View All">
                              <i class="material-icons">visibility</i>
                            </a>
                            <!-- Delete Button -->
                            <a href="delete_order.php?id=1001" class="btn btn-danger btn-link btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this order?');">
                              <i class="material-icons">close</i>
                            </a>
                          </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr>
                          <td>#-1002</td>
                          <td>Sara Mahmoud</td>
                          <td>0789876543</td>
                          <td>Wireless Headphones</td>
                          <td>Electronics</td>
                          <td>Audio</td>
                          <td>1x (Black)</td>
                          <td>45.50 JD</td>
                          <td class="td-actions text-right">
                            <a href="order_details.php?id=1002" class="btn btn-info btn-link btn-sm" title="View All">
                              <i class="material-icons">visibility</i>
                            </a>
                            <a href="delete_order.php?id=1002" class="btn btn-danger btn-link btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this order?');">
                              <i class="material-icons">close</i>
                            </a>
                          </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr>
                          <td>#-1003</td>
                          <td>Omar Youssef</td>
                          <td>0795551234</td>
                          <td>Table Lamp</td>
                          <td>Home & Living</td>
                          <td>Lighting</td>
                          <td>1x (White)</td>
                          <td>22.00 JD</td>
                          <td class="td-actions text-right">
                            <a href="order_details.php?id=1003" class="btn btn-info btn-link btn-sm" title="View All">
                              <i class="material-icons">visibility</i>
                            </a>
                            <a href="delete_order.php?id=1003" class="btn btn-danger btn-link btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this order?');">
                              <i class="material-icons">close</i>
                            </a>
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
  
  <!-- JavaScript for Exporting to Excel -->
  <script>
    function exportTableToExcel(tableID, filename = ''){
      var downloadLink;
      var dataType = 'application/vnd.ms-excel';
      var tableSelect = document.getElementById(tableID);
      
      // We clone the table so we can remove the "Actions" column (buttons) from the Excel export
      var tableClone = tableSelect.cloneNode(true);
      var rows = tableClone.querySelectorAll('tr');
      
      // Remove the last column (Actions) from the clone before exporting
      for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].querySelectorAll('th, td');
        if (cells.length > 0) {
          cells[cells.length - 1].remove();
        }
      }

      var tableHTML = tableClone.outerHTML.replace(/ /g, '%20');
      
      filename = filename?filename+'.xls':'excel_data.xls';
      downloadLink = document.createElement("a");
      document.body.appendChild(downloadLink);
      
      if(navigator.msSaveOrOpenBlob){
          var blob = new Blob(['\ufeff', tableHTML], { type: dataType });
          navigator.msSaveOrOpenBlob( blob, filename);
      }else{
          downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
          downloadLink.download = filename;
          downloadLink.click();
      }
    }
  </script>
</body>

</html>