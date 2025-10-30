<?php
session_start();

// === LOGIN AUTH LOGIC ===
$error = "";

// Example admin credentials (you can connect to DB later)
$admin_email = "admin@adc.com";
$admin_pass  = "ADC@2025"; // change if needed

if (isset($_POST['login'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // verify credentials
    if ($email === $admin_email && $password === $admin_pass) {
        $_SESSION['is_admin'] = true;
        $_SESSION['admin_email'] = $email;
        header("Location: admindashboard.php");
        exit;
    } else {
        $error = "❌ Invalid email or password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->
<head>
  <title>Login</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="Able Pro is trending dashboard template made using Bootstrap 5 design framework." />
  <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel" />
  <meta name="author" content="Phoenixcoded" />

  <!-- [Favicon] icon -->
  <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
  <!-- [Font] Family -->
  <link rel="stylesheet" href="../assets/fonts/inter/inter.css" id="main-font-link" />
  <link rel="stylesheet" href="../assets/fonts/phosphor/duotone/style.css" />
  <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
  <link rel="stylesheet" href="../assets/fonts/feather.css" />
  <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />
  <link rel="stylesheet" href="../assets/fonts/material.css" />
  <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
  <script src="../assets/js/tech-stack.js"></script>
  <link rel="stylesheet" href="../assets/css/style-preset.css" />
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
  <div class="loader-bg">
    <div class="loader-track"><div class="loader-fill"></div></div>
  </div>

  <div class="auth-main">
    <div class="auth-wrapper v1">
      <div class="auth-form">
        <div class="card my-5">
          <div class="card-body">
            <div class="text-center">
              <h4 class="text-primary">ZAMFARA ADC MEMBERSHIP</h4>
              <div class="d-grid my-3"></div>
            </div>
            <div class="saprator my-3"><span>LOGIN</span></div>
            <h4 class="text-center f-w-500 mb-3">With Your Email </h4>

            <!-- === LOGIN FORM === -->
            <form id="loginform" action="" method="POST">
              <?php if (!empty($error)): ?>
                <div class="alert alert-danger text-center py-2"><?php echo $error; ?></div>
              <?php endif; ?>

              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email Address Or Username" name="email" required />
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password" required />
              </div>

              <div class="d-flex mt-1 justify-content-between align-items-center">
                <div class="form-check">
                  <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked />
                  <label class="form-check-label text-muted" for="customCheckc1">Remember me?</label>
                </div>
                <h6 class="text-secondary f-w-400 mb-0">
                  <a href="#">Forgot Password?</a>
                </h6>
              </div>

              <div class="d-grid mt-4">
                <input type="submit" class="btn btn-primary" value="Login" id="login" name="login" />
              </div>
            </form>
            <!-- === END LOGIN FORM === -->

            <div class="d-flex justify-content-between align-items-end mt-4">
              <h6 class="f-w-500 mb-0">Don't have an Account?</h6>
              <a href="#" class="link-primary">Create Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- [ Scripts ] -->
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

  <script>layout_change("light");</script>
  <script>change_box_container("false");</script>
  <script>layout_caption_change("true");</script>
  <script>layout_rtl_change("false");</script>
  <script>preset_change("preset-1");</script>
  <script>main_layout_change("vertical");</script>
</body>
</html>
