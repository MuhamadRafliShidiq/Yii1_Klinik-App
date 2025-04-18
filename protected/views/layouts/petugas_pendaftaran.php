<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>

  <!-- Google Fonts - Inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f4f6f9;
    }

    .main-header {
      background-color: #0d6efd;
      padding: 0.75rem 1rem;
    }

    .main-header .navbar-brand,
    .main-header .nav-link {
      color: #fff !important;
    }

    .main-header .nav-link:hover {
      color: #dfe6f1 !important;
    }

    .content-wrapper {
      padding: 2rem 1rem;
      min-height: 100vh;
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.25rem;
    }

    .nav-icon {
      margin-right: 5px;
    }

    @media (min-width: 768px) {
      .content-wrapper {
        padding: 3rem;
      }
    }
  </style>
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <!-- Top Navbar -->
    <nav class="main-header navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('site/pendaftaranDashboard'); ?>" title="pendaftaranDashboard">🩺 Klinik App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo Yii::app()->createUrl('pendaftaran/index'); ?>">
                <i class="fa-solid fa-user-plus nav-icon"></i> Pendaftaran
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/kunjungan'); ?>">
                <i class="fa-solid fa-notes-medical nav-icon"></i> Kunjungan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/laporan'); ?>">
                <i class="fa-solid fa-chart-bar nav-icon"></i> Laporan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/logout'); ?>">
                <i class="fa-solid fa-right-from-bracket nav-icon"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="content-wrapper">
      <div class="container">
        <!-- Optional Section Title -->
        <!-- <h2 class="mb-4 fw-semibold">Pendaftaran Pasien</h2> -->

        <!-- Konten akan ditampilkan dalam card -->
        <div class="card p-4 bg-white">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- JS dependencies -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
