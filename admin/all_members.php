<?php
session_start();
require_once '../config/config.php';

// Check login session
if (!isset($_SESSION['is_admin'])) {
    header("Location: login.php");
    exit();
}

// Fetch all members
$sql = "SELECT id, full_name, lga, ward, polling_unit, phone, photo, created_at FROM adc_members ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>All ADC Members</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/style-preset.css">
  <link rel="stylesheet" href="../assets/fonts/inter/inter.css" />
  <link rel="stylesheet" href="../assets/fonts/feather.css" />
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
</head>

<body>
  <?php include './include/header.php'; ?>
  <?php include './include/sidebar.php'; ?>

  <div class="pc-container">
    <div class="pc-content">
      <div class="page-header">
        <h2 class="text-success">All Registered ADC Members</h2>
      </div>

      <div class="card mt-3">
     
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

  <script src="../assets/js/plugins/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/simplebar.min.js"></script>
  <script src="../assets/js/script.js"></script>
</body>
</html>
