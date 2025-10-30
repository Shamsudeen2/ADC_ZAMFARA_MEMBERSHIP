<?php
require_once __DIR__ . '/config/config.php';

if (!isset($conn)) {
  die("<h3 style='color:red;text-align:center;margin-top:40px;'>Database connection error</h3>");
}

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$member = null;

if ($id > 0) {
  $sql = "SELECT * FROM adc_members WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $member = $result->fetch_assoc();
  $stmt->close();
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>ADC Zamfara Registration</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="./assets/images/favicon.svg" type="image/x-icon" />
  <link rel="stylesheet" href="./assets/css/plugins/datepicker-bs5.min.css" />
  <link rel="stylesheet" href="./assets/fonts/inter/inter.css" />
  <link rel="stylesheet" href="./assets/fonts/phosphor/duotone/style.css" />
  <link rel="stylesheet" href="./assets/fonts/tabler-icons.min.css" />
  <link rel="stylesheet" href="./assets/fonts/feather.css" />
  <link rel="stylesheet" href="./assets/fonts/fontawesome.css" />
  <link rel="stylesheet" href="./assets/fonts/material.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/style-preset.css" />

  <style>
    /* Print view */
    @media print {
      body * {
        visibility: hidden !important;
      }

      .print-card,
      .print-card * {
        visibility: visible !important;
      }

      .btn-print,
      header,
      footer {
        display: none !important;
      }

      .print-card {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
      }
    }

    /* Modern UI for the card */
    .print-card {
      background: linear-gradient(135deg, #f7fffb 0%, #eaf8f1 100%);
      border-radius: 20px;
      box-shadow: 0 8px 35px rgba(0, 0, 0, 0.1);
      border: 3px solid #198754;
      padding: 25px;
      max-width: 650px;
      margin: 40px auto;
      position: relative;
      overflow: hidden;
    }

    .print-card::before {
      content: "";
      position: absolute;
      top: -30%;
      right: -30%;
      width: 300px;
      height: 300px;
      background: rgba(25, 135, 84, 0.1);
      border-radius: 50%;
      z-index: 0;
    }

    .card-content {
      position: relative;
      z-index: 2;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .member-photo {
      width: 130px;
      height: 160px;
      border-radius: 15px;
      object-fit: cover;
      border: 4px solid #198754;
      box-shadow: 0 0 15px rgba(25, 135, 84, 0.3);
    }

    .member-info {
      flex: 1;
      padding: 10px;
    }

    .member-info h3 {
      color: #198754;
      font-weight: bold;
      font-size: 1.1rem;
      margin-bottom: 8px;
      font-family:'Times New Roman', Times, serif;
    }

    .member-info p {
      margin: 2px 0;
      color: #333;
      font-size: 0.99rem;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .member-id {
      color: #777;
      margin-top: 8px;
      font-size: 0.85rem;
    }

    .adc-logo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 3px solid #198754;
      object-fit: cover;
      background: #fff;
    }

    /* Print button */
    .btn-print {
      background-color: #198754;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      transition: background 0.3s ease;
    }

    .btn-print:hover {
      background-color: #146c43;
    }

    /* Saved cards list */
    .saved-section {
      max-width: 900px;
      margin: 40px auto;
      text-align: center;
    }

    .saved-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .saved-item {
      background: #f9fffb;
      border: 2px solid #198754;
      border-radius: 15px;
      padding: 15px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .saved-item:hover {
      background: #e6faf1;
      transform: translateY(-5px);
      box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2);
    }

    .saved-item img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
      border: 2px solid #198754;
      object-fit: cover;
      margin-bottom: 8px;
    }

    .saved-item h6 {
      color: #198754;
      font-weight: 600;
      margin-bottom: 3px;
    }

    .saved-item p {
      font-size: 0.85rem;
      color: #555;
      margin: 0;
    }

    strong {
      color: #4fb67dff;
      font-weight: bold;
      text-transform: uppercase;
    }
  </style>
</head>

<body>

<header>
  <?php include './include/header.php'; ?>
  <?php include './include/sidebar.php'; ?>
</header>
  <div class="pc-container">
    <div class="pc-content">
      <div class="page-header">
        <div class="page-block">
          <h2 class="mb-0 text-success">ADC Zamfara Registration</h2>
        </div>
      </div>

      <?php if ($member): ?>
        <div class="text-end my-3">
          <button class="btn-print" onclick="window.print()">🖨️ Print Card</button>
        </div>

        <div class="print-card">
          <div class="card-content">
            <div class="thumbnail">
              <a href="uploads/<?php echo !empty($member['photo']) ? $member['photo'] : 'assets/data/default-avatar.png'; ?>" target="_blank">
                <img src="<?php echo !empty($member['photo']) ? 'uploads/' . $member['photo'] : 'assets/data/default-avatar.png'; ?>" class="member-photo" alt="Member Photo">
                <div class="caption">
                  <p style="font-size: large; text-align: center; font-weight: bold; color: #dc0c0cff; text-transform: uppercase; font-size:0.9rem;"><?php echo htmlspecialchars($member['full_name']); ?></p>
                </div>
              </a>
            </div>
            <div class="member-info">
              <h3 class="hdr">ADC ZAMFARA MEMBERSHIP CARD</h3>
              <p><strong>LGA:</strong> <?php echo htmlspecialchars($member['lga']); ?></p>
              <p><strong>Ward:</strong> <?php echo htmlspecialchars($member['ward']); ?></p>
              <p><strong>Polling Unit:</strong> <?php echo htmlspecialchars($member['polling_unit']); ?></p>
              <p><strong>Phone:</strong> <?php echo htmlspecialchars($member['phone']); ?></p>
              <p class="member-id"><strong>Member ID:</strong> <?php echo htmlspecialchars($member['id']); ?></p>
            </div>
            <img src="assets/data/adc.jpeg" class="adc-logo" alt="ADC Logo">
          </div>
        </div>

      <?php else: ?>
        <div class="saved-section">
          <h4 class="text-success">Your Saved ADC Cards</h4>
          <p class="text-muted">Select any card below to view or print.</p>
          <div id="savedCards" class="saved-grid"></div>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
      <p class="m-0 text-center">ADC Zamfara Registration</p>
    </div>
  </footer>

  <script src="./assets/js/plugins/popper.min.js"></script>
  <script src="./assets/js/plugins/simplebar.min.js"></script>
  <script src="./assets/js/plugins/bootstrap.min.js"></script>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/theme.js"></script>

  <script>
    <?php if ($member): ?>
      document.addEventListener("DOMContentLoaded", function() {
        const card = {
          id: "<?php echo htmlspecialchars($member['id']); ?>",
          full_name: "<?php echo htmlspecialchars($member['full_name']); ?>",
          lga: "<?php echo htmlspecialchars($member['lga']); ?>",
          ward: "<?php echo htmlspecialchars($member['ward']); ?>",
          polling_unit: "<?php echo htmlspecialchars($member['polling_unit']); ?>",
          phone: "<?php echo htmlspecialchars($member['phone']); ?>",
          photo: "<?php echo htmlspecialchars($member['photo']); ?>"
        };
        let cards = JSON.parse(localStorage.getItem("adc_member_cards")) || [];
        if (!cards.find(c => c.id == card.id)) {
          cards.push(card);
          localStorage.setItem("adc_member_cards", JSON.stringify(cards));
        }
      });
    <?php else: ?>
      document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("savedCards");
        const cards = JSON.parse(localStorage.getItem("adc_member_cards")) || [];
        if (cards.length === 0) {
          container.innerHTML = "<p class='text-danger'>No saved cards yet.</p>";
          return;
        }
        cards.forEach(c => {
          const div = document.createElement("div");
          div.className = "saved-item";
          div.innerHTML = `
              <img src="uploads/${c.photo || 'assets/data/default-avatar.png'}" alt="">
              <h6>${c.full_name}</h6>
              <p>${c.lga}</p>
              <p>${c.ward}</p>
          `;
          div.onclick = () => window.location.href = "card.php?id=" + c.id;
          container.appendChild(div);
        });
      });
    <?php endif; ?>
  </script>

</body>

</html>