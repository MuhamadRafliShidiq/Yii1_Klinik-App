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
        /* Custom style for Sidebar and content */
        .sidebar {
            min-height: 100vh;
        }
        .main-content {
            padding: 20px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Klinik App</span>
            </a>
            <div class="sidebar">
                <nav class="mt-4">
                    <ul class="nav nav-pills nav-sidebar flex-column mt-2" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="<?php echo Yii::app()->createUrl('site/kasirDashboard'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Pembayaran -->
                        <li class="nav-item">
                            <a href="<?php echo Yii::app()->createUrl('pembayaran/index'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-money-bill-wave"></i>
                                <p>Pembayaran Tagihan</p>
                            </a>
                        </li>

                        <!-- Riwayat Pembayaran -->
                        <li class="nav-item">
                            <a href="<?php echo Yii::app()->createUrl('site/riwayatPembayaran'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>Riwayat Pembayaran</p>
                            </a>
                        </li>

                        <!-- Laporan -->
                        <li class="nav-item">
                            <a href="<?php echo Yii::app()->createUrl('laporan/index'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                <p>Laporan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo Yii::app()->createUrl('site/logout'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Main Content -->
            <div class="container-fluid main-content">
                <?php echo $content; ?>
            </div>
        </div>
    </div> 
    
    <!-- AdminLTE JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>
