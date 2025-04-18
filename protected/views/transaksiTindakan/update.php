<?php
/* @var $this TransaksiTindakanController */
/* @var $model TransaksiTindakan */

$this->breadcrumbs=array(
	'Transaksi Tindakans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransaksiTindakan', 'url'=>array('index')),
	array('label'=>'Create TransaksiTindakan', 'url'=>array('create')),
	array('label'=>'View TransaksiTindakan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TransaksiTindakan', 'url'=>array('admin')),
);
?>

<h1>Update TransaksiTindakan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>