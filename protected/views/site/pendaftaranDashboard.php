<h1>Dashboard Pendaftaran</h1>
<p>Selamat datang, <?php echo Yii::app()->user->nama_lengkap; ?> (Petugas Pendaftaran).</p>
<p>Ini adalah halaman Dashboard Pendaftaran.</p>
<ul>
    <li><a href="#">Tambah Pasien Baru</a></li>
    <li><a href="#">Lihat Pasien Terdaftar</a></li>
</ul>
<p><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a></p>