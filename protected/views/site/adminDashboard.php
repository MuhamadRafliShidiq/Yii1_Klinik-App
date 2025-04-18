<h1>Dashboard Admin</h1>
<p>Selamat datang, <?php echo Yii::app()->user->nama_lengkap; ?> (Admin).</p>
<p>Ini adalah halaman Dashboard Admin.</p>

<!-- Kunjungan Pasien Chart -->
<div class="chart-container">
    <canvas id="kunjunganChart"></canvas>
</div>

<!-- Tindakan Chart -->
<div class="chart-container">
    <canvas id="tindakanChart"></canvas>
</div>

<!-- Obat Chart -->
<div class="chart-container">
    <canvas id="obatChart"></canvas>
</div>

