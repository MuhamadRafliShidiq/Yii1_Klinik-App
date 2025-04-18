<?php
/* @var $this ObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Manajemen Obat',
);

$this->menu = array(
    array('label'=>'Tambah Obat', 'url'=>array('create')),
    array('label'=>'Kelola Obat', 'url'=>array('admin')),
);
?>

<div class="container-fluid">
    <h1 class="mb-2 ml-2 text-gray-600">Daftar Obat</h1>
    <p class="text-right">
        <a href="<?php echo Yii::app()->createUrl('obat/create'); ?>" class="btn btn-primary btn-lg" role="button">
            <i class="fas fa-plus-circle"></i> Tambah Obat
        </a>
    </p>

    <div class="table-responsive shadow-sm rounded-lg">
        <table class="table table-hover table-bordered table-striped">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 12px 15px;">Nama Obat</th>
                    <th style="padding: 12px 15px;">Harga</th>
                    <th style="padding: 12px 15px;">Keterangan</th>
                    <th style="padding: 12px 15px; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataProvider->data as $obat): ?>
                    <tr style="transition: background-color 0.3s;">
                        <td style="padding: 10px 15px;"><?php echo CHtml::encode($obat->nama); ?></td>
                        <td style="padding: 10px 15px;"> <?php echo 'Rp ' . number_format($obat->harga, 0, ',', '.'); ?></td>
                        <td style="padding: 10px 15px;"><?php echo CHtml::encode($obat->keterangan); ?></td>
                        <td style="padding: 10px 15px; text-align: center;">
                            <a href="<?php echo Yii::app()->createUrl('obat/view', array('id' => $obat->id)); ?>" class="btn btn-info btn-sm mx-1" title="Lihat">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('obat/update', array('id' => $obat->id)); ?>" class="btn btn-warning btn-sm mx-1" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('obat/delete', array('id' => $obat->id)); ?>" class="btn btn-danger btn-sm mx-1" title="Hapus" onclick="return confirm('Yakin ingin menghapus obat ini?');">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="pagination-wrapper text-center mt-3">
        <?php $this->widget('CLinkPager', array('pages'=>$dataProvider->pagination)); ?>
    </div>
</div>

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
