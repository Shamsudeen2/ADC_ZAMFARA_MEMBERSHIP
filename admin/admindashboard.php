<?php
session_start();
require_once './../config/config.php';

// protect admin
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
  header("Location: login.php");
  exit;
}

// function to count members
function countMembers($conn, $lgas = [])
{
  if (empty($lgas)) {
    $sql = "SELECT COUNT(*) AS total FROM adc_members";
    $stmt = $conn->prepare($sql);
  } else {
    $placeholders = implode(',', array_fill(0, count($lgas), '?'));
    $sql = "SELECT COUNT(*) AS total FROM adc_members WHERE lga IN ($placeholders)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(str_repeat('s', count($lgas)), ...$lgas);
  }
  $stmt->execute();
  $result = $stmt->get_result()->fetch_assoc();
  return $result['total'];
}

// default totals by zones
$westLGAs = ['anka', 'bakura', 'bukkuyum', 'gummi', 'maradun', 'talata-mafara'];
$centralLGAs = ['gusau', 'maru', 'tsafe', 'bungudu'];
$northLGAs = ['birnin-magaji', 'kaura-namoda', 'shinkafi', 'zurmi'];

$westTotal = countMembers($conn, $westLGAs);
$centralTotal = countMembers($conn, $centralLGAs);
$northTotal = countMembers($conn, $northLGAs);
$allTotal = countMembers($conn);

// Fetch all members
$sql = "SELECT id, full_name, lga, ward, polling_unit, phone, photo, created_at FROM adc_members ORDER BY id DESC";
$result = $conn->query($sql);


$totalResult = $conn->query("SELECT COUNT(*) AS total FROM adc_members");
$totalCount = ($totalResult && $totalResult->num_rows > 0) ? $totalResult->fetch_assoc()['total'] : 0;
?>


<!doctype html>
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
  <!-- [phosphor Icons] -->
  <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
  <!-- [Tabler Icons] -->
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
  <!-- [Feather Icons] -->
  <link rel="stylesheet" href="../assets/fonts/feather.css" />
  <!-- [Font Awesome Icons] -->
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
  <!-- [Material Icons] -->
  <link rel="stylesheet" href="../assets/fonts/material.css" />
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
  <script src="../assets/js/tech-stack.js"></script>
  <link rel="stylesheet" href="../assets/css/style-preset.css" />
  <style>
  .draggable-btn {
    position: fixed;
    bottom: 40px;
    right: 40px;
    background-color: #198754;
    color: white;
    font-weight: 600;
    font-size: 16px;
    border-radius: 50px;
    padding: 12px 20px;
    z-index: 2000;
    cursor: move;
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    user-select: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }
  .draggable-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
  }
  .draggable-btn i {
    font-size: 20px;
  }
</style>

</head>
<!-- [Head] end -->

<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical"
  data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">

  <!-- [ Pre-loader ] start -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>

  <?php require_once './include/sidebar.php'; ?>
  <?php require_once './include/sidebar.php'; ?>

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <!-- <li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Online Courses</a></li> -->
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
              </ul>
            </div>
            <div class="col-md-12">
              <div class="page-header-title d-flex justify-content-between align-items-center">
                <h2 class="mb-0">Dashboard</h2>

                <a href="logout.php" class="btn btn-danger btn-sm text-white">Logout</a>


              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="card" style="background:rgb(224, 240, 236);">
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
                    <option value="anka">anka</option>
                    <option value="bakura">bakura</option>
                    <option value="bukkuyum">bukkuyum</option>
                    <option value="gummi">gummi</option>
                    <option value="Maradun">Maradun</option>
                    <option value="talata-mafara">talata-mafara</option>
                  </select>
                  <h6 class="mt-4">Total Members: <span id="zamfara-west-members"><?php echo $westTotal; ?></span>
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="card" style="background:rgb(224, 240, 236);">
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
                    <option value="gusau">gusau</option>
                    <option value="maru">maru</option>
                    <option value="bungudu">bungudu</option>
                    <option value="tsafe">tsafe</option>
                  </select>
                  <h6 class="mt-4">Total Members: <span id="zamfara-central-members"><?php echo $centralTotal; ?></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4">
          <div class="card" style="background:rgb(224, 240, 236);">
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
                    <option value="birnin-magaji">birnin-magaji</option>
                    <option value="kaura-namoda">kaura-namoda</option>
                    <option value="shinkafi">shinkafi</option>
                    <option value="zurmi">zurmi</option>
                  </select>
                  <h6 class="mt-4">Total Members: <span id="zamfara-north-members"><?php echo $northTotal; ?></span></h6>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12">
          <div class="card table-card">
            <div class="card-header">
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
                      <option value="Bungudu">Bungudu</option>
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
                  <thead class="table-success">
                    <tr>
                      <th>ID</th>
                      <th>Photo</th>
                      <th>Full Name</th>
                      <th>LGA</th>
                      <th>Ward</th>
                      <th>Polling Unit</th>
                      <th>Phone</th>
                      <th>Date Registered</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if ($result && $result->num_rows > 0): ?>
                      <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                          <td><?= htmlspecialchars($row['id']) ?></td>
                          <td>
                            <img src="../uploads/<?= htmlspecialchars($row['photo'] ?: 'default-avatar.png') ?>"
                              alt="Photo"
                              class="rounded-circle"
                              width="50" height="50">
                          </td>
                          <td><?= htmlspecialchars($row['full_name']) ?></td>
                          <td><?= htmlspecialchars($row['lga']) ?></td>
                          <td><?= htmlspecialchars($row['ward']) ?></td>
                          <td><?= htmlspecialchars($row['polling_unit']) ?></td>
                          <td><?= htmlspecialchars($row['phone']) ?></td>
                          <td><?= htmlspecialchars($row['created_at']) ?></td>
                          <td>
                            <a href="./../card.php?id=<?= $row['id'] ?>"
                              class="btn btn-sm btn-outline-success">
                              View Card
                            </a>
                          </td>
                        </tr>
                      <?php endwhile; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="9" class="text-center text-muted">No members found</td>
                      </tr>
                    <?php endif; ?>
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

        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Members Analysis by LGA</h5>
              <button id="refreshChart" class="btn btn-sm btn-outline-success">
                <i class="ti ti-refresh"></i> Refresh
              </button>
            </div>
            <div class="card-body">
              <div id="membersAnalysisChart"></div>
            </div>
          </div>
        </div>

        <!-- ApexCharts -->
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
            const chartEl = document.querySelector("#membersAnalysisChart");
            let chart;

            // Function to fetch live data from PHP
            async function loadChartData() {
              try {
                const res = await fetch("fetch_member_counts.php");
                const data = await res.json();

                const categories = data.map(item => item.lga);
                const counts = data.map(item => item.total);

                const options = {
                  chart: {
                    type: 'bar',
                    height: 420,
                    toolbar: {
                      show: true
                    }
                  },
                  plotOptions: {
                    bar: {
                      borderRadius: 6,
                      horizontal: false,
                      columnWidth: '55%',
                      endingShape: 'rounded'
                    }
                  },
                  dataLabels: {
                    enabled: true,
                    style: {
                      colors: ['#333']
                    }
                  },
                  colors: ['#00897B'],
                  series: [{
                    name: 'Total Members',
                    data: counts
                  }],
                  xaxis: {
                    categories: categories,
                    labels: {
                      rotate: -45
                    },
                    title: {
                      text: 'Local Government Areas (LGA)'
                    }
                  },
                  yaxis: {
                    title: {
                      text: 'Total Members'
                    }
                  },
                  title: {
                    text: 'ADC Members Distribution by LGA',
                    align: 'center',
                    style: {
                      fontSize: '18px',
                      color: '#00796B'
                    }
                  },
                  grid: {
                    borderColor: '#eee',
                    row: {
                      colors: ['#fafafa', 'transparent'],
                      opacity: 0.5
                    }
                  }
                };

                if (chart) {
                  chart.updateOptions(options);
                } else {
                  chart = new ApexCharts(chartEl, options);
                  chart.render();
                }
              } catch (err) {
                console.error("Error loading chart data:", err);
                chartEl.innerHTML = "<p class='text-danger text-center mt-3'>Error loading chart data.</p>";
              }
            }

            document.getElementById("refreshChart").addEventListener("click", loadChartData);
            loadChartData(); // Load once when page opens
          });
        </script>
      </div>
      <!-- [ Main Content ] end -->
    </div>

    <!-- Floating Total Members Button -->

<div id="totalMembersBtn" class="draggable-btn shadow-lg">
  <i class="ti ti-users"></i> Total Members: <strong><?php echo $totalCount; ?></strong>
</div>

  </div>

  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <div class="row">
        <div class="col my-1">
          <p class="m-0">ADC Zamfara Registration</p>
        </div>
        <div class="col-auto my-1">
          <ul class="list-inline footer-link mb-0">
            <li class="list-inline-item"><a href="#">A D C Member</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- JS -->
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

<script>
document.addEventListener("DOMContentLoaded", function() {
  const btn = document.getElementById("totalMembersBtn");
  let offsetX, offsetY, isDragging = false;

  btn.addEventListener("mousedown", function(e) {
    isDragging = true;
    offsetX = e.clientX - btn.getBoundingClientRect().left;
    offsetY = e.clientY - btn.getBoundingClientRect().top;
    btn.style.transition = "none";
  });

  document.addEventListener("mousemove", function(e) {
    if (!isDragging) return;
    btn.style.left = e.clientX - offsetX + "px";
    btn.style.top = e.clientY - offsetY + "px";
    btn.style.bottom = "auto";
    btn.style.right = "auto";
  });

  document.addEventListener("mouseup", function() {
    isDragging = false;
    btn.style.transition = "transform 0.2s ease";
  });
});
</script>

  <script>
    document.querySelectorAll('.form-select').forEach(select => {
      select.addEventListener('change', async function() {
        const lga = this.value;
        const zone = this.closest('.card').querySelector('span[id]').id;

        const res = await fetch('count_members.php?lga=' + encodeURIComponent(lga));
        const data = await res.json();
        document.getElementById(zone).textContent = data.total;
      });
    });
  </script>


  <script src="../assets/js/plugins/datepicker-full.min.js"></script>
  <script src="../assets/js/plugins/apexcharts.min.js"></script>
  <script src="../assets/js/plugins/peity-vanilla.min.js"></script>
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

</html>