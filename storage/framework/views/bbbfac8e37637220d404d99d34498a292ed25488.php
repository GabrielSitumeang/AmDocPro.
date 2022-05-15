<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AMDocPro</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  
  <!-- Template Main CSS Files -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
   <!-- ======= Header ======= -->
   <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <img src="assets/img/itdel.jpg" width="65" height="70">

      <nav id="navbar" class="navbar">
        <ul>
          <li>
			  <a class="nav-link active" href="/">Beranda</a>
			</li>
          <li>
			  <a class="nav-link active" href="/info">Info</a>
			</li>
          <li>
			  <a class="nav-link active" href="/prodi">Prodi</a>
          </li>
        </ul>
      </nav>
	  <!-- .navbar -->

    <ul class="navbar-nav ms-auto">
      <?php if(auth()->guard()->check()): ?> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" 
          role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, <?php echo e(auth()->user()->username); ?>

        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
                <?php echo csrf_field(); ?>
              <button type="submit" class="dropdown-item">
                <i class="bi bi-box-arrow-right"></i>Logout</a>
              </button>
            </form>
          </li>
        </ul>
        </li>
      <?php else: ?>

      <div class="position-relative">
       
      <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
            Login</a>
          </li>
        </ul>

      </div>

      <?php endif; ?>
    </ul>

    </div>

  </header><!-- End Header -->
	<?php echo $__env->yieldContent('container'); ?>
</body>

</html><?php /**PATH E:\LARAVEL\kelompok-03\resources\views/layouts/main.blade.php ENDPATH**/ ?>