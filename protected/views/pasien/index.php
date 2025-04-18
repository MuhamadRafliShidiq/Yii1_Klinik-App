<?php
/* @var $this LaporanPasienController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Laporan Pasien',
);

$this->menu = array(
    array('label' => 'Tambah Laporan', 'url' => array('create')),
    array('label' => 'List Laporan', 'url' => array('index')),
);
?>

<div class="container-fluid">
    <h1 class="ml-2 text-gray-600">Daftar Laporan Pasien</h1>

    <!-- Tombol Tambah Laporan -->
    <p class="text-right">
        <a class="btn btn-primary btn-lg" href="<?php echo Yii::app()->createUrl('pasien/create'); ?>">
            <i class="fa-solid fa-user-plus"></i> Tambah Laporan Pasien
        </a>
    </p>

    <!-- Tabel Laporan Pasien (Enhanced UI) -->
    <div class="table-responsive shadow-sm rounded-3 border border-light bg-white mt-4">
        <table class="table table-bordered table-hover align-middle mb-0">
            <thead class="text-center text-white" style="background-color: #1e88e5;">
                <tr>
                    <th class="py-3">ID</th>
                    <th class="py-3">Nama Pasien</th>
                    <th class="py-3">Tanggal Lahir</th>
                    <th class="py-3">Alamat</th>
                    <th class="py-3">No HP</th>
                    <th class="py-3">Keterangan</th>
                    <th class="py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProvider->data as $pasien): ?>
                    <tr class="transition bg-white">
                        <td class="px-3 py-2"><?php echo htmlspecialchars($pasien->id); ?></td>
                        <td class="px-3 py-2"><?php echo htmlspecialchars($pasien->nama); ?></td>
                        <td class="px-3 py-2"><?php echo date('d-m-Y', strtotime($pasien->tanggal_lahir)); ?></td>
                        <td class="px-3 py-2"><?php echo htmlspecialchars($pasien->alamat); ?></td>
                        <td class="px-3 py-2"><?php echo htmlspecialchars($pasien->no_hp); ?></td>
                        <td class="px-3 py-2"><?php echo htmlspecialchars($pasien->keterangan); ?></td>
                        <td class="px-3 py-2 text-center">
                            <a href="<?php echo Yii::app()->createUrl('pasien/view', array('id' => $pasien->id)); ?>"
                               class="btn btn-sm btn-outline-primary rounded-pill px-3 shadow-sm"
                               style="transition: 0.3s;">
                                <i class="fa-solid fa-eye"></i> View
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Paginasi -->
    <div class="pagination-wrapper mt-3">
        <?php $this->widget('CLinkPager', array('pages' => $dataProvider->pagination)); ?>
    </div>

    <!-- Custom Styling -->
    <style>
        .table th, .table td {
            vertical-align: middle;
        }

        .table-hover tbody tr:hover {
            background-color: #f0f7ff;
        }

        .btn-outline-primary:hover {
            background-color: #1e88e5;
            color: #fff;
            border-color: #1e88e5;
        }

        .table thead th {
            font-weight: 600;
            font-size: 15px;
        }

        .table td {
            font-size: 14px;
        }

        .btn {
            font-size: 14px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all 0.3s;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .table-responsive {
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
    </style>
</div>
