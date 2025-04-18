<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <style>
        /* Custom Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .main-content {
            padding: 20px;
            background-color: #f4f6f9;
        }

        .brand-link {
            text-align: center;
            font-weight: bold;
            color: #ffffff;
        }

        .sidebar {
            background-color: #343a40;
        }

        .sidebar .nav-link {
            color: #ddd;
            font-size: 16px;
        }

        .sidebar .nav-link:hover, .sidebar .nav-item.active .nav-link {
            background-color: #007bff;
            color: #fff;
        }

        .sidebar .nav-icon {
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: #495057;
            font-size: 16px;
        }

        .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        .navbar-nav .dropdown-menu {
            border-radius: 5px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .content-wrapper {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-pills .nav-link.active {
            background-color: #007bff;
        }

        .dropdown-item {
            font-size: 14px;
        }

        .main-content {
        padding: 20px;
        background-color: #f4f6f9;
    }

    .chart-container {
        width: 100%;
        max-width: 600px; /* Atur ukuran maksimal chart */
        margin: 0 auto; /* Agar chart berada di tengah */
        height: 400px; /* Tentukan tinggi chart */
    }

    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item dropdown">
                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="fas fa-user-circle fa-2xl"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">Profil</a>
                    <div class="dropdown-divider"></div>
                    <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>" class="dropdown-item text-danger">
                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link">
            <span class="brand-text">Klinik App</span>
        </a>
        <div class="sidebar">
            <nav class="mt-4">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="<?php echo Yii::app()->createUrl('site/adminDashboard'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-database"></i>
                            <p>Master Data<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="<?php echo Yii::app()->createUrl('users/index'); ?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>User</p></a></li>
                            <li class="nav-item"><a href="<?php echo Yii::app()->createUrl('pegawai/index'); ?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Pegawai</p></a></li>
                            <li class="nav-item"><a href="<?php echo Yii::app()->createUrl('wilayah/index'); ?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Wilayah</p></a></li>
                            <li class="nav-item"><a href="<?php echo Yii::app()->createUrl('tindakan/index'); ?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tindakan</p></a></li>
                            <li class="nav-item"><a href="<?php echo Yii::app()->createUrl('obat/index'); ?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Obat</p></a></li>
                        </ul>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>Transaksi<i class="right fas fa-angle-left"></i></p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="<?php echo Yii::app()->createUrl('transaksiTindakan/index'); ?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Tindakan</p></a></li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"><a href="<?php echo Yii::app()->createUrl('transaksiObat/index'); ?>" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Obat</p></a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo Yii::app()->createUrl('pembayaran/index'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-money-bill-wave"></i>
                            <p>Pembayaran</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo Yii::app()->createUrl('laporan/index'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-chart-bar"></i>
                            <p>Laporan</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo Yii::app()->createUrl('pengaturan/index'); ?>" class="nav-link">
                            <i class="nav-icon fas fa-cogs"></i>
                            <p>Pengaturan</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="main-content">
            <?php echo $content; ?>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Data dummy – bisa diganti dengan data dari PHP
  const kunjunganData = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei'],
    datasets: [{
      label: 'Kunjungan Pasien',
      data: [30, 45, 28, 50, 40],
      backgroundColor: 'rgba(54, 162, 235, 0.5)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }]
  };

  const tindakanData = {
    labels: ['Tindakan A', 'Tindakan B', 'Tindakan C'],
    datasets: [{
      label: 'Jumlah Tindakan',
      data: [20, 35, 15],
      backgroundColor: ['#36a2eb', '#ff6384', '#ffcd56']
    }]
  };

  const obatData = {
    labels: ['Paracetamol', 'Amoxicillin', 'Ibuprofen'],
    datasets: [{
      label: 'Jumlah Resep',
      data: [50, 30, 20],
      backgroundColor: ['#4bc0c0', '#9966ff', '#ff9f40']
    }]
  };

  new Chart(document.getElementById('kunjunganChart'), {
    type: 'bar',
    data: kunjunganData,
    options: {
      responsive: true,
      scales: {
        y: { beginAtZero: true }
      }
    }
  });

  new Chart(document.getElementById('tindakanChart'), {
    type: 'pie',
    data: tindakanData,
    options: {
      responsive: true
    }
  });

  new Chart(document.getElementById('obatChart'), {
    type: 'doughnut',
    data: obatData,
    options: {
      responsive: true
    }
  });
</script>

</body>
</html>
