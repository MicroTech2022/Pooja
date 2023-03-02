<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="./assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="./assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="./assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="./assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="./assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="./assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="./assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="./assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include('./includes/sidebar.php') ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php include('./includes/header.php') ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-6">
                  <!-- HTML5 Inputs -->
                  <div class="card mb-4">
                    <h5 class="card-header">HTML5 Inputs</h5>
                    <div class="card-body">
                      <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Text</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" value="Sneat" id="html5-text-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-search-input" class="col-md-2 col-form-label">Search</label>
                        <div class="col-md-10">
                          <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                          <input class="form-control" type="email" value="john@example.com" id="html5-email-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-url-input" class="col-md-2 col-form-label">URL</label>
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="url"
                            value="https://themeselection.com"
                            id="html5-url-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-tel-input" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                          <input class="form-control" type="tel" value="90-(164)-188-556" id="html5-tel-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                          <input class="form-control" type="password" value="password" id="html5-password-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                        <div class="col-md-10">
                          <input class="form-control" type="number" value="18" id="html5-number-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Datetime</label>
                        <div class="col-md-10">
                          <input
                            class="form-control"
                            type="datetime-local"
                            value="2021-06-18T12:30:00"
                            id="html5-datetime-local-input"
                          />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                          <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-month-input" class="col-md-2 col-form-label">Month</label>
                        <div class="col-md-10">
                          <input class="form-control" type="month" value="2021-06" id="html5-month-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-week-input" class="col-md-2 col-form-label">Week</label>
                        <div class="col-md-10">
                          <input class="form-control" type="week" value="2021-W25" id="html5-week-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-time-input" class="col-md-2 col-form-label">Time</label>
                        <div class="col-md-10">
                          <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="html5-color-input" class="col-md-2 col-form-label">Color</label>
                        <div class="col-md-10">
                          <input class="form-control" type="color" value="#666EE8" id="html5-color-input" />
                        </div>
                      </div>
                      <div class="row">
                        <label for="html5-range" class="col-md-2 col-form-label">Range</label>
                        <div class="col-md-10">
                          <input type="range" class="form-range mt-3" id="html5-range" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- File input -->
                  <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile" />
                      </div>
                      <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple />
                      </div>
                      <div>
                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                        <input class="form-control" type="file" id="formFileDisabled" disabled />
                      </div>
                    </div>
                  </div>
                </div>
                
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include('./includes/footer.php') ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="./assets/vendor/libs/jquery/jquery.js"></script>
    <script src="./assets/vendor/libs/popper/popper.js"></script>
    <script src="./assets/vendor/js/bootstrap.js"></script>
    <script src="./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="./assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="./assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="./assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>