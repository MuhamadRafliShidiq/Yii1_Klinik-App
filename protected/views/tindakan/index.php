<?php
/* @var $this TindakanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Manajemen Tindakan',
);

$this->menu = array(
    array('label'=>'Tambah Tindakan', 'url'=>array('create')),
    array('label'=>'Kelola Tindakan', 'url'=>array('admin')),
);
?>

<div class="container-fluid">
    <!-- Tombol Tambah -->
    <p class="text-right">
        <a href="<?php echo Yii::app()->createUrl('tindakan/create'); ?>" class="btn btn-primary btn-lg shadow-sm">
            <i class="fas fa-plus-circle"></i> Tambah Tindakan
        </a>
    </p>

    <!-- Tabel Tindakan -->
    <div class="table-responsive shadow rounded-lg">
        <table class="table table-hover align-middle">
            <thead class="bg-primary text-white">
                <tr>
                    <th class="py-3 px-4">Nama Tindakan</th>
                    <th class="py-3 px-4">Tarif</th>
                    <th class="py-3 px-4">Keterangan</th>
                    <th class="py-3 px-4 text-center ">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataProvider->data as $tindakan): ?>
                    <tr class="border-bottom">
                        <td class="py-3 px-4"><?php echo CHtml::encode($tindakan->nama); ?></td>
                        <td class="py-3 px-4 text-success font-weight-bold">
                            <?php echo 'Rp ' . number_format($tindakan->harga, 0, ',', '.'); ?>
                        </td>
                        <td class="py-3 px-4"><?php echo CHtml::encode($tindakan->keterangan); ?></td>
                        <td class="py-4 px-5 text-center">
                            <a href="<?php echo Yii::app()->createUrl('tindakan/view', array('id' => $tindakan->id)); ?>" class="btn btn-sm btn-outline-info" title="Lihat">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('tindakan/update', array('id' => $tindakan->id)); ?>" class="btn btn-sm btn-outline-warning" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('tindakan/delete', array('id' => $tindakan->id)); ?>" class="btn btn-sm btn-outline-danger" title="Hapus" onclick="return confirm('Yakin ingin menghapus tindakan ini?');">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Paginasi -->
    <div class="pagination-wrapper text-center mt-4">
        <?php $this->widget('CLinkPager', array('pages'=>$dataProvider->pagination)); ?>
    </div>
</div>

<!-- Custom Styling -->
<style>
    .table-responsive {
        background-color: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.07);
    }

    .table th, .table td {
        vertical-align: middle;
    }

    .table thead th {
        background: linear-gradient(90deg, #007bff, #0056b3);
        color: #fff;
        border: none;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn {
        transition: all 0.2s ease;
        font-size: 14px;
    }

    .btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
        color: #212529;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .pagination-wrapper .yiiPager a,
    .pagination-wrapper .yiiPager span {
        margin: 0 4px;
        padding: 6px 12px;
        background-color: #f1f1f1;
        border-radius: 4px;
        color: #007bff;
        text-decoration: none;
    }

    .pagination-wrapper .yiiPager .selected {
        background-color: #007bff;
        color: white;
        font-weight: bold;
    }
</style>
