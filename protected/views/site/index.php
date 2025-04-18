<?php
/* @var $this SiteController */

$this->pageTitle = 'Beranda - ' . Yii::app()->name;
?>

<div class="text-center py-5 px-3">
    <h1 class="display-5 fw-bold text-primary mb-4">
        Selamat Datang di <i><?php echo CHtml::encode(Yii::app()->name); ?></i>
    </h1>

    <p class="lead text-secondary mb-4">
        Aplikasi Sistem Informasi Klinik membantu proses manajemen data klinik seperti:
    </p>

    <div class="d-flex justify-content-center">
        <ul class="list-unstyled text-start text-dark" style="max-width: 500px;">
            <li class="mb-2">✅ Login berdasarkan hak akses pengguna</li>
            <li class="mb-2">✅ Manajemen data master (Wilayah, User, Pegawai, Tindakan, Obat)</li>
            <li class="mb-2">✅ Transaksi pendaftaran pasien & tindakan medis</li>
            <li class="mb-2">✅ Pengelolaan obat dan pembayaran pasien</li>
            <li class="mb-2">✅ Laporan klinik dengan visualisasi data</li>
        </ul>
    </div>

    <p class="mt-4 fs-6 text-muted">
        Silakan login terlebih dahulu untuk menggunakan sistem.
    </p>

    <a href="<?php echo Yii::app()->createUrl('site/login'); ?>" 
       class="btn btn-primary btn-lg mt-3 shadow-sm rounded-pill">
        🔐 Login Sekarang
    </a>
</div>
