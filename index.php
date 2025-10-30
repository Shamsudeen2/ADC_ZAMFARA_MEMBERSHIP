<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
  <title>ADC Zamfara Registration</title>
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
  <link rel="icon" href="./assets/images/favicon.svg" type="image/x-icon" />

  <!-- [Page specific CSS] start -->
  <link rel="stylesheet" href="./assets/css/plugins/datepicker-bs5.min.css" />
  <!-- [Page specific CSS] end -->
  <!-- [Font] Family -->
  <link rel="stylesheet" href="./assets/fonts/inter/inter.css" id="main-font-link" />
  <!-- [phosphor Icons] https://phosphoricons.com/ -->
  <link rel="stylesheet" href="./assets/fonts/phosphor/duotone/style.css" />
  <!-- [Tabler Icons] https://tablericons.com -->
  <link rel="stylesheet" href="./assets/fonts/tabler-icons.min.css" />
  <!-- [Feather Icons] https://feathericons.com -->
  <link rel="stylesheet" href="./assets/fonts/feather.css" />
  <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
  <link rel="stylesheet" href="./assets/fonts/fontawesome.css" />
  <!-- [Material Icons] https://fonts.google.com/icons -->
  <link rel="stylesheet" href="./assets/fonts/material.css" />
  <!-- [Template CSS Files] -->
  <link rel="stylesheet" href="./assets/css/style.css" id="main-style-link" />
  <script src="./assets/js/tech-stack.js"></script>
  <link rel="stylesheet" href="./assets/css/style-preset.css" />

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

  include('./include/header.php');
  include('./include/sidebar.php');

  ?>

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0 text-success">ADC Zamfara Registration</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->


      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-md-12">
          <div class="card">

            <div class="card-body">
              <h5 class="text-success">Fill this form to register as ADC member. (Zamfara State only)</h5>
              <hr />
              <form id="regForm" action="submit.php" method="post" enctype="multipart/form-data" novalidate>
                <div class="row g-4">
                  <div class="col-md-6 col-lg-4">
                    <div class=" mb-0">
                      <!-- <label class="form-label">Full name</label> -->
                      <input type="text" name="full_name" placeholder="Enter full name" class="form-control" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-floating mb-0">
                      <select id="lga" name="lga" class="form-select" required>
                        <option value="">-- Select LGA --</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-floating mb-0">
                      <select id="ward" name="ward" class="form-select" required>
                        <option value="">-- Select Ward --</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="form-floating mb-0">
                      <select id="pu" name="polling_unit" class="form-select" required>
                        <option value="">-- Select Polling Unit --</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="mb-0">
                      <input type="tel" name="phone" class="form-control" placeholder="e.g. 08012345678" required>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-4">
                    <div class="input-group mb-0">
                      <input type="file" name="photo" class="form-control" accept="image/jpeg,image/png" required>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">You can print card after registration.</small>
                    <button class="btn btn-success" type="submit">Submit</button>
                  </div>
              </form>


            </div>
          </div>


        </div>
        <!-- [ form-element ] end -->
      </div>
    </div>
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
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Required Js -->
  <script src="./assets/js/plugins/popper.min.js"></script>
  <script src="./assets/js/plugins/simplebar.min.js"></script>
  <script src="./assets/js/plugins/bootstrap.min.js"></script>


  <script src="./assets/js/plugins/i18next.min.js"></script>
  <script src="./assets/js/plugins/i18nextHttpBackend.min.js"></script>

  <script src="./assets/js/icon/custom-font.js"></script>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/theme.js"></script>
  <script src="./assets/js/multi-lang.js"></script>
  <script src="./assets/js/plugins/feather.min.js"></script>


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
  <script src="./assets/js/plugins/datepicker-full.min.js"></script>
  <script src="./assets/js/plugins/apexcharts.min.js"></script>
  <script src="./assets/js/plugins/peity-vanilla.min.js"></script>
  <!-- custom widgets js -->
  <script src="./assets/js/widgets/revenue-analytics-chart.js"></script>
  <script src="./assets/js/widgets/membership-state-chart.js"></script>
  <script src="./assets/js/widgets/membership-activity-line-chart.js"></script>
  <!-- [Page Specific JS] end -->

  <script>
    async function loadLGAs() {
      const res = await fetch('get_wards.php');
      const data = await res.json();
      const lgaSelect = document.getElementById('lga');
      lgaSelect.innerHTML = '<option value="">-- Select LGA --</option>';
      data.lgas.forEach(l => {
        const o = document.createElement('option');
        o.value = l;
        o.textContent = l;
        lgaSelect.appendChild(o);
      });
    }
    document.getElementById('lga').addEventListener('change', async function() {
      const lga = this.value;
      const wardSelect = document.getElementById('ward');
      const puSelect = document.getElementById('pu');
      wardSelect.innerHTML = '<option>Loading...</option>';
      puSelect.innerHTML = '<option value="">-- Select Polling Unit --</option>';
      if (!lga) {
        wardSelect.innerHTML = '<option value="">-- Select Ward --</option>';
        return;
      }
      const res = await fetch('get_wards.php?lga=' + encodeURIComponent(lga));
      const data = await res.json();
      wardSelect.innerHTML = '<option value="">-- Select Ward --</option>';
      data.wards.forEach(w => {
        const o = document.createElement('option');
        o.value = w;
        o.textContent = w;
        wardSelect.appendChild(o);
      });
    });
    document.getElementById('ward').addEventListener('change', async function() {
      const ward = this.value;
      const lga = document.getElementById('lga').value;
      const puSelect = document.getElementById('pu');
      puSelect.innerHTML = '<option>Loading...</option>';
      if (!ward) {
        puSelect.innerHTML = '<option value="">-- Select Polling Unit --</option>';
        return;
      }
      const res = await fetch('get_wards.php?lga=' + encodeURIComponent(lga) + '&ward=' + encodeURIComponent(ward));
      const data = await res.json();
      puSelect.innerHTML = '<option value="">-- Select Polling Unit --</option>';
      data.polling_units.forEach(p => {
        const o = document.createElement('option');
        o.value = p;
        o.textContent = p;
        puSelect.appendChild(o);
      });
    });
    loadLGAs();
    document.getElementById('regForm').addEventListener('submit', function(e) {
      if (!this.checkValidity()) {
        e.preventDefault();
        this.classList.add('was-validated');
      }
    });

    document.addEventListener("DOMContentLoaded", function () {
  const saved = localStorage.getItem("adc_member_card");
  if (saved) {
    const card = JSON.parse(saved);

    // Create quick view button dynamically
    const btn = document.createElement("button");
    btn.textContent = "🪪 View My ADC Card";
    btn.className = "btn btn-success mt-3";
    btn.onclick = function () {
      window.location.href = "card.php";
    };

    // Choose where to display the button (for example top of the page)
    const target = document.querySelector(".page-header") || document.body;
    target.appendChild(btn);
  }
});
  </script>

  


</body>
<!-- [Body] end -->

</html>