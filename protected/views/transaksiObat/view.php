<?php
/* @var $this TransaksiObatController */
/* @var $model TransaksiObat */

$this->breadcrumbs=array(
	'Transaksi Obats'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TransaksiObat', 'url'=>array('index')),
	array('label'=>'Create TransaksiObat', 'url'=>array('create')),
	array('label'=>'Update TransaksiObat', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TransaksiObat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TransaksiObat', 'url'=>array('admin')),
);
?>

<h1>View TransaksiObat #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_kunjungan',
		'id_obat',
		'jumlah',
		'total_harga',
	),
)); ?>
