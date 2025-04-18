<h1>Dashboard Dokter</h1>
<p>Selamat datang, Dokter <?php echo Yii::app()->user->nama_lengkap; ?>.</p>
<p>Ini adalah halaman Dashboard Dokter.</p>
<ul>
    <li><a href="#">Lihat Pasien Terdaftar</a></li>
    <li><a href="#">Tindakan dan Obat Pasien</a></li>
    <li><a href="#">Riwayat Kunjungan Pasien</a></li>
</ul>

<p><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a></p>