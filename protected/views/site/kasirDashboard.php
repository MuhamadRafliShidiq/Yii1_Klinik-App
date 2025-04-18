<h1>Dashboard Kasir</h1>
<p>Selamat datang, <?php echo Yii::app()->user->nama_lengkap; ?> (Kasir).</p>
<p>Ini adalah halaman Dashboard Kasir.</p>
<ul>
    <li><a href="#">Lihat Tagihan Pasien</a></li>
    <li><a href="#">Proses Pembayaran</a></li>
</ul>
<p><a href="<?php echo Yii::app()->createUrl('site/logout'); ?>">Logout</a></p>