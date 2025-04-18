<?php
/* @var $this PegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Pegawai',
);

$this->menu = array(
    array('label' => 'Tambah Pegawai', 'url' => array('create')),
    array('label' => 'Kelola Pegawai', 'url' => array('admin')),
);
?>
<div class="container-fluid ">
	<h1 class="mb-4 ml-2 text-gray-600">Daftar Pegawai</h1>
	<p class="text-right">
    	<a class="btn btn-primary btn-lg" href="<?php echo Yii::app()->createUrl('pegawai/create'); ?>">
			<i class="fas fa-user-plus"></i> Tambah Pegawai
		</a>
	</p>
	<div class="table-responsive shadow-sm rounded-lg">
    	<table class="table table-hover table-bordered table-striped">
        	<thead style="background-color: #007bff; color: white;">
            	<tr>
					<th style="padding: 12px 15px;">Nama</th>
					<th style="padding: 12px 15px;">Jabatan</th>
					<th style="padding: 12px 15px;">Alamat</th>
					<th style="padding: 12px 15px;">Nomor HP</th>
					<th style="padding: 12px 15px; text-align: center;">Actions</th>
            	</tr>
        	</thead>
			<tbody>
				<?php foreach ($dataProvider->data as $pegawai): ?>
					<tr style="transition: background-color 0.3s;">
						<td style="padding: 10px 15px;"><?php echo htmlspecialchars($pegawai->nama); ?></td>
						<td style="padding: 10px 15px;"><?php echo htmlspecialchars($pegawai->jabatan); ?></td>
						<td style="padding: 10px 15px;"><?php echo htmlspecialchars($pegawai->alamat); ?></td>
						<td style="padding: 10px 15px;"><?php echo htmlspecialchars($pegawai->no_hp); ?></td>
						<td style="padding: 10px 15px; text-align: center;">
							<a href="<?php echo Yii::app()->createUrl('pegawai/view', array('id' => $pegawai->id)); ?>" class="btn btn-info btn-sm mx-1" title="View Pegawai">
								<i class="fas fa-eye"></i> View
							</a>
							<a href="<?php echo Yii::app()->createUrl('pegawai/update', array('id' => $pegawai->id)); ?>" class="btn btn-warning btn-sm mx-1" title="Edit Pegawai">
								<i class="fas fa-edit"></i> Update
							</a>
							<a href="<?php echo Yii::app()->createUrl('pegawai/delete', array('id' => $pegawai->id)); ?>" class="btn btn-danger btn-sm mx-1" title="Delete Pegawai" onclick="return confirm('Are you sure you want to delete this employee?');">
								<i class="fas fa-trash-alt"></i> Delete
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
    	</table>
</div>

<?php $this->widget('CLinkPager', array('pages' => $dataProvider->pagination)); ?>

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
