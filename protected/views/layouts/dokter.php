<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Roboto', sans-serif;
    }

    /* Navbar */
    .navbar {
      background-color: #007bff; /* Blue for professional look */
    }

    .navbar-brand,
    .nav-link {
      color: #fff !important;
      font-weight: 600;
    }

    .nav-link {
      padding: 12px 20px;
    }

    .nav-link:hover {
      background-color: #0056b3;
      border-radius: 0.25rem;
      transition: all 0.3s ease;
    }

    /* Main content */
    .content-wrapper {
      padding: 40px 20px;
    }

    .content-wrapper .container {
      background: #fff;
      padding: 30px;
      border-radius: 0.75rem;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      max-width: 1100px;
      margin: 0 auto;
    }

    /* Buttons */
    .btn-custom {
      background-color: #28a745;
      color: #fff;
      border-radius: 0.25rem;
    }

    .btn-custom:hover {
      background-color: #218838;
      transition: all 0.3s ease;
    }

    /* Responsive for small screens */
    @media (max-width: 768px) {
      .navbar .container-fluid {
        padding: 0;
      }

      .content-wrapper {
        padding: 20px;
      }

      .content-wrapper .container {
        padding: 15px;
      }
    }
  </style>
</head>
<body>
  <!-- Top Navbar Only -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Klinik App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Yii::app()->createUrl('pasien/index'); ?>">
              <i class="fa-solid fa-user-plus me-1"></i> Pasien
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/kunjungan'); ?>">
              <i class="fa-solid fa-user-check me-1"></i> Jadwal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/tindakan'); ?>">
              <i class="fa-solid fa-stethoscope me-1"></i> Rekam Medis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/obat'); ?>">
              <i class="fa-solid fa-pills me-1"></i> Preskripsi Tindakan & Obat
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/logout'); ?>">
              <i class="fa-solid fa-sign-out-alt me-1"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content Area -->
  <div class="relative m-auto content-wrapper">
    <div class="container">
      <?php echo $content; ?>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
