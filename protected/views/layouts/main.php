<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="language" content="id">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Page Title -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Magic UI Styling -->
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f1f4f9;
            color: #333;
        }

        header {
            background: linear-gradient(90deg, #2c3e50, #34495e);
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        nav {
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
        }

        nav .nav-link {
            color: #2c3e50;
            font-weight: 500;
            margin: 0 10px;
        }

        nav .nav-link:hover {
            color: #0d6efd;
        }

        .container {
            padding: 30px 15px;
            background-color: #ffffff;
            margin-top: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        .navbar-brand {
            font-weight: bold;
            color: #0d6efd !important;
        }

        .btn-primary {
            border-radius: 30px;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1 class="fw-bold mb-0"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm px-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo Yii::app()->createUrl('site/index'); ?>">KlinikApp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/index'); ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo Yii::app()->createUrl('site/login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://yiiframework.com" target="_blank">Yii Docs</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">
        <?php echo $content; ?>
    </div>

    <!-- Footer -->
    <footer>
        &copy; <?php echo date('Y'); ?> Sistem Informasi Klinik. Powered by <strong>Muhamad Rafli Shidiq</strong>.
    </footer>

</body>
</html>
