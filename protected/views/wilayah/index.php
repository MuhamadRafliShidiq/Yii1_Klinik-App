<?php
$this->breadcrumbs = array('Wilayah');
$this->menu = array(
    array('label'=>'Tambah Wilayah', 'url'=>array('create')),
);
?>

<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="text-gray-800 font-weight-bold">Daftar Wilayah</h2>
        <a href="<?php echo Yii::app()->createUrl('wilayah/create'); ?>" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus-circle"></i> Tambah Wilayah
        </a>
    </div>

    <div class="table-responsive rounded shadow-sm">
        <table class="table table-hover align-middle">
            <thead class="bg-primary text-white">
                <tr >
                    <th class="py-3 px-4">Nama Wilayah</th>
                    <th class="py-3 px-4">Tipe Wilayah</th>
                    <th class="py-3 px-4">Kode Wilayah</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataProvider->data as $wilayah): ?>
                    <tr class="border-bottom">
                        <td class="py-3 px-4"><?php echo CHtml::encode($wilayah->nama_wilayah); ?></td>
                        <td class="py-3 px-4"><?php echo CHtml::encode($wilayah->tipe_wilayah); ?></td>
                        <td class="py-3 px-4"><?php echo CHtml::encode($wilayah->kode_wilayah); ?></td>
                        <td class="text-center">
                            <a href="<?php echo Yii::app()->createUrl('wilayah/view', array('id' => $wilayah->id)); ?>" class="btn btn-sm btn-outline-info mx-1" title="Lihat">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('wilayah/update', array('id' => $wilayah->id)); ?>" class="btn btn-sm btn-outline-warning mx-1" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('wilayah/delete', array('id' => $wilayah->id)); ?>" class="btn btn-sm btn-outline-danger mx-1" title="Hapus" onclick="return confirm('Yakin ingin menghapus data wilayah ini?');">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

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
