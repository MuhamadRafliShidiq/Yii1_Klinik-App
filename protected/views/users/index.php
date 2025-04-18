<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Manajemen Pengguna',
);

$this->menu = array(
    array('label'=>'Tambah Pengguna', 'url'=>array('create')),
    array('label'=>'Kelola Pengguna', 'url'=>array('admin')),
);
?>

<div class="container-fluid ">
    <h1 class="mb-4 ml-2 text-primary">Manajemen User</h1>
    <p class="text-right">
        <a href="<?php echo Yii::app()->createUrl('users/create'); ?>" class="btn btn-primary btn-lg" role="button">
            <i class="fas fa-user-plus"></i> Tambah Pengguna
        </a>
    </p>
    
    <div class="table-responsive shadow-sm rounded-lg">
        <table class="table table-hover table-bordered table-striped">
            <thead style="background-color: #007bff; color: white;">
                <tr>
                    <th style="padding: 12px 15px;">Nama Lengkap</th>
                    <th style="padding: 12px 15px;">Username</th>
                    <th style="padding: 12px 15px;">Role</th>
                    <th style="padding: 12px 15px; text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($dataProvider->data as $user): ?>
                    <tr style="transition: background-color 0.3s;">
                        <td style="padding: 10px 15px;"><?php echo CHtml::encode($user->nama_lengkap); ?></td>
                        <td style="padding: 10px 15px;"><?php echo CHtml::encode($user->username); ?></td>
                        <td style="padding: 10px 15px;"><?php echo CHtml::encode($user->role); ?></td>
                        <td style="padding: 10px 15px; text-align: center;">
                            <a href="<?php echo Yii::app()->createUrl('users/view', array('id' => $user->id)); ?>" class="btn btn-info btn-sm mx-1" title="View User">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('users/update', array('id' => $user->id)); ?>" class="btn btn-warning btn-sm mx-1" title="Edit User">
                                <i class="fas fa-edit"></i> Update
                            </a>
                            <a href="<?php echo Yii::app()->createUrl('users/delete', array('id' => $user->id)); ?>" class="btn btn-danger btn-sm mx-1" title="Delete User" onclick="return confirm('Are you sure you want to delete this user?');">
                                <i class="fas fa-trash-alt"></i> Delete
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
