<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
jjjjggg
<body class="p-5 text-center bg-light">
    <div class="container">
        <div class="card p-5 shadow">
            <h2 class="text-success mb-3">✅ Registration Successful!</h2>
            <p>Thank you for registering as an ADC member.</p>
            <a href="index.php" class="btn btn-primary mt-3">Go Back Home</a>
        </div>
    </div>
</body>

</html>



   set anything youu see in this and don't change anything <!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>ADC Admin Membership</title>
  <!-- [Meta] -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="description"
    content="Able Pro is trending dashboard template made using Bootstrap 5 design framework. Able Pro is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies." />
  <meta
    name="keywords"
    content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard" />
  <meta name="author" content="Phoenixcoded" />

  <!-- [Favicon] icon -->
  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />

  <!-- [Page specific CSS] start -->
  <link rel="stylesheet" href="../assets/css/plugins/datepicker-bs5.min.css" />
  <!-- [Page specific CSS] end -->
  <!-- [Font] Family -->
  <link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link" />
  <!-- [phosphor Icons] https://phosphoricons.com/ -->
  <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="../assets/fonts/feather.css" />
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="../assets/fonts/material.css" />
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
  <script src="../assets/js/tech-stack.js"></script>
  <link rel="stylesheet" href="../assets/css/style-preset.css" />

</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>


  <?php
  require_once './../include/header.php';
  ?>

  <?php
  require_once './../include/sidebar.php';
  ?>
  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0)">Online Courses</a></li>
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Dashboard</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->


      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="card"  style="background:rgb(224, 240, 236);">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avtar bg-light-primary">
                    <i class="ti ti-map-pin f-24"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1 text-primary">Zamfara West</h5>
                  <select class="form-select mt-2">
                    <option value="">Select LGA</option>
                    <option value="Anka">Anka</option>
                    <option value="Bakura">Bakura</option>
                    <option value="Bukkuyum">Bukkuyum</option>
                    <option value="Gummi">Gummi</option>
                    <option value="Maradun">Maradun</option>
                    <option value="Talata Mafara">Talata Mafara</option>
                  </select>
                  <h6 class="mt-4">Total Members: <span id="zamfara-west-members">0</span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card"  style="background:rgb(224, 240, 236);">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avtar bg-light-warning">
                    <i class="ti ti-map-pin f-24"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1 text-warning">Zamfara Central</h5>
                  <select class="form-select mt-2">
                    <option value="">Select LGA</option>
                    <option value="Gusau">Gusau</option>
                    <option value="Maru">Maru</option>
                    <option value="Tsafe">Tsafe</option>
                  </select>
                  <h6 class="mt-4">Total Members: <span id="zamfara-central-members">0</span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="card"  style="background:rgb(224, 240, 236);">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <div class="avtar bg-light-success">
                    <i class="ti ti-map-pin f-24"></i>
                  </div>
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1 text-success">Zamfara North</h5>
                  <select class="form-select mt-2">
                    <option value="">Select LGA</option>
                    <option value="Birnin Magaji/Kiyaw">Birnin Magaji/Kiyaw</option>
                    <option value="Kaura Namoda">Kaura Namoda</option>
                    <option value="Shinkafi">Shinkafi</option>
                    <option value="Zurmi">Zurmi</option>
                  </select>
                  <h6 class="mt-4">Total Members: <span id="zamfara-north-members">0</span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>







        <div class="col-lg-12 col-md-12">
          <div class="card table-card">
            <div class="card-header">

              <!-- Filter & Search -->
              <div class="filter-section">
                <form id="filterForm" class="row g-3 align-items-center">
                  <div class="col-md-3">
                    <label for="lgaFilter" class="form-label mb-0 fw-bold">Filter by LGA</label>
                    <select id="lgaFilter" class="form-select">
                      <option value="">All LGAs</option>
                      <option value="Anka">Anka</option>
                      <option value="Bakura">Bakura</option>
                      <option value="Birnin Magaji/Kiyaw">Birnin Magaji/Kiyaw</option>
                      <option value="Bukkuyum">Bukkuyum</option>
                      <option value="Bungudu">Bunudu</option>
                      <option value="Gummi">Gummi</option>
                      <option value="Gusau">Gusau</option>
                      <option value="Kaura Namoda">Kaura Namoda</option>
                      <option value="Maradun">Maradun</option>
                      <option value="Maru">Maru</option>
                      <option value="Shinkafi">Shinkafi</option>
                      <option value="Talata Mafara">Talata Mafara</option>
                      <option value="Zurmi">Zurmi</option>
                      <option value="Tsafe">Tsafe</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="searchInput" class="form-label mb-0 fw-bold">Search (Name, Ward, or Phone)</label>
                    <input type="text" id="searchInput" class="form-control" placeholder="Type to search...">
                  </div>
                </form>
              </div>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" style="color: blue;">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>LGA</th>
                      <th>Ward</th>
                      <th>Polling Unit</th>
                      <th>Phone</th>
                      <th>Image</th>
                      <th>Registered At</th>
                      <th>Print Card</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Shamsudeen Aliyu</td>
                      <td>Maradun</td>
                      <td>Gurbin Bore</td>
                      <td>Polling Unit 1</td>
                      <td>08012345678</td>
                      <td><img src="path/to/image.jpg" alt="Image" class="img-fluid"></td>
                      <td>2023-10-01</td>
                      <td><button class="btn btn-sm btn-primary">Print</button></td>
                    </tr>
                  </tbody>
                </table>

                <script>
                  // Initialize DataTable plugin
                  document.addEventListener('DOMContentLoaded', function() {
                    $('#dataTable').DataTable({
                      responsive: true,
                      paging: true,
                      searching: false, // Disable search
                      ordering: true,

                      columnDefs: [{
                          orderable: false,
                          targets: [6, 8]
                        } // Disable ordering on Image and Print Card columns
                      ]
                    });
                  });
                </script>
                <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="widget-calender" id="pc-datepicker-6"></div>
            </div>
          </div>
        </div>
      </div> -->

        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header">
              <h5>Members Analysis</h5>
            </div>
            <div class="card-body">
              <div id="membersAnalysisChart"></div>
            </div>
          </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            var options = {
              chart: {
                type: 'bar',
                height: 350
              },
              series: [{
                name: 'Total Members',
                data: [100, 15, 65, 25, 70, 35, 40, 45, 50, 55, 60, 65, 70, 75] // Replace with dynamic data
              }],
              xaxis: {
                categories: [
                  'Anka', 'Bakura', 'Birnin Magaji/Kiyaw', 'Bukkuyum', 'Bungudu',
                  'Gummi', 'Gusau', 'Kaura Namoda', 'Maradun', 'Maru',
                  'Shinkafi', 'Talata Mafara', 'Zurmi', 'Tsafe'
                ] // Replace with dynamic data
              },
              title: {
                text: 'Members Analysis by LGA',
                align: 'center'
              }
            };

            var chart = new ApexCharts(document.querySelector("#membersAnalysisChart"), options);
            chart.render();
          });
        </script>

        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col my-1">
            <p class="m-0">ADC Zamfara Registration</p>
          </div>
          <div class="col-auto my-1">
            <ul class="list-inline footer-link mb-0">
              <li class="list-inline-item"><a href="#">A D C Member</a></li>
          </div>
        </div>
      </div>
    </footer>
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>


    <script src="../assets/js/plugins/i18next.min.js"></script>
    <script src="../assets/js/plugins/i18nextHttpBackend.min.js"></script>

    <script src="../assets/js/icon/custom-font.js"></script>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/multi-lang.js"></script>
    <script src="../assets/js/plugins/feather.min.js"></script>

    <script>
      layout_change('light');
    </script>

    <script>
      change_box_container('false');
    </script>

    <script>
      layout_caption_change('true');
    </script>

    <script>
      layout_rtl_change('false');
    </script>

    <script>
      preset_change('preset-1');
    </script>

    <script>
      main_layout_change('vertical');
    </script>


    <!-- [Page Specific JS] start -->
    <!-- bootstrap-datepicker -->
    <script src="../assets/js/plugins/datepicker-full.min.js"></script>
    <script src="../assets/js/plugins/apexcharts.min.js"></script>
    <script src="../assets/js/plugins/peity-vanilla.min.js"></script>
    <!-- custom widgets js -->
    <script src="../assets/js/widgets/revenue-sales-chart.js"></script>
    <script src="../assets/js/widgets/invites-goal-chart.js"></script>
    <script src="../assets/js/widgets/course-report-bar-chart.js"></script>
    <script src="../assets/js/widgets/total-revenue-line-1-chart.js"></script>
    <script src="../assets/js/widgets/total-revenue-line-2-chart.js"></script>
    <script src="../assets/js/widgets/student-states-chart.js"></script>
    <script src="../assets/js/widgets/activity-line-chart.js"></script>
    <script src="../assets/js/widgets/widget-calender.js"></script>
    <script src="../assets/js/widgets/visitors-bar-chart.js"></script>
    <script src="../assets/js/widgets/earning-courses-line-chart.js"></script>
    <script src="../assets/js/widgets/table-donut.js"></script>


</body>
<!-- [Body] end -->

</html>