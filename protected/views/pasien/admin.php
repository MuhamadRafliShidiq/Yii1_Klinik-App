<?php
/* @var $this LaporanPasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Laporan Pasien',
);

$this->menu=array(
	array('label'=>'Create Pasien', 'url'=>array('create')),
	array('label' => 'Kelola Laporan', 'url' => array('admin')),
);
?>
<div class="container-fluid ">
    <h1 class="mb-4 ml-2 text-gray-600  ">Daftar Laporan Pasien</h1>

    <!-- Tombol Tambah Laporan -->
    <p class="text-right">
        <a class="btn btn-primary btn-lg" href="<?php echo Yii::app()->createUrl('pasien/create'); ?>">
            <i class="fa-solid fa-user-plus"></i> Tambah Laporan Pasien
        </a>
    </p>

    <!-- Tabel Laporan Pasien -->
    <div class="table-responsive shadow-sm rounded-lg">
        <table class="table table-hover table-bordered table-striped">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 12px 15px;">ID Pasien</th>
                    <th style="padding: 12px 15px;">Nama Pasien</th>
                    <th style="padding: 12px 15px;">Tanggal Lahir</th>
                    <th style="padding: 12px 15px;">Alamat</th>
                    <th style="padding: 12px 15px;">No HP</th>
                    <th style="padding: 12px 15px;">Wilayah</th>
                    <th style="padding: 12px 15px; text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dataProvider->data as $pasien): ?>
                    <tr style="transition: background-color 0.3s;">
                        <td style="padding: 10px 15px;"><?php echo htmlspecialchars($pasien->id); ?></td>
                        <td style="padding: 10px 15px;"><?php echo htmlspecialchars($pasien->nama); ?></td>
                        <td style="padding: 10px 15px;"><?php echo date('d-m-Y', strtotime($pasien->tanggal_lahir)); ?></td>
                        <td style="padding: 10px 15px;"><?php echo htmlspecialchars($pasien->alamat); ?></td>
                        <td style="padding: 10px 15px;"><?php echo htmlspecialchars($pasien->no_hp); ?></td>
                        <td style="padding: 10px 15px;"><?php echo htmlspecialchars($pasien->idWilayah->nama_wilayah); ?></td>
                        <td style="padding: 10px 15px; text-align: center;">
                            <!-- View Button -->
                            <a href="<?php echo Yii::app()->createUrl('', array('id' => $pasien->id)); ?>" class="btn-action btn-view" style="background-color: #007bff; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; margin-right: 8px; transition: background-color 0.3s ease;">
                                <i class="fa-solid fa-eye"></i> View
                            </a>
                            <!-- Update Button -->
                            <a href="<?php echo Yii::app()->createUrl('laporan/update', array('id' => $pasien->id)); ?>" class="btn-action btn-update" style="background-color: #ffc107; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; margin-right: 8px; transition: background-color 0.3s ease;">
                                <i class="fa-solid fa-pencil-alt"></i> Update
                            </a>
                            <!-- Delete Button -->
                            <a href="<?php echo Yii::app()->createUrl('pasien/delete', array('id' => $pasien->id)); ?>" class="btn-action btn-delete" style="background-color: #dc3545; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; transition: background-color 0.3s ease;" onclick="return confirm('Are you sure you want to delete this report?');">
                                <i class="fa-solid fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<!-- Paginasi -->
<?php $this->widget('CLinkPager', array('pages'=>$dataProvider->pagination)); ?>

<!-- Custom Styling -->
<style>
    .table-responsive {
        border: 1px solid #ddd;
        border-radius: 8px;
        background-color: #ffffff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
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

    .pagination-wrapper {
        margin-top: 15px;
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    .table th {
        text-align: center;
    }

    .table-bordered td, .table-bordered th {
        border: 1px solid #ddd;
    }

    .btn-info, .btn-warning, .btn-danger {
        font-size: 13px;
    }

    .btn-info {
        background-color: #17a2b8;
    }

    .btn-warning {
        background-color: #f0ad4e;
    }

    .btn-danger {
        background-color: #d9534f;
    }
</style>
