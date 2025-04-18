<?php
/* @var $this TransaksiTindakanController */
/* @var $model TransaksiTindakan */

$this->breadcrumbs=array(
	'Transaksi Tindakans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TransaksiTindakan', 'url'=>array('index')),
	array('label'=>'Create TransaksiTindakan', 'url'=>array('create')),
	array('label'=>'Update TransaksiTindakan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TransaksiTindakan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransaksiTindakan', 'url'=>array('admin')),
);
?>

<h1>View TransaksiTindakan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_kunjungan',
		'id_tindakan',
		'jumlah',
		'total_harga',
	),
)); ?>
