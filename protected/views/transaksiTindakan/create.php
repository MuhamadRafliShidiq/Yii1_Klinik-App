<?php
/* @var $this TransaksiTindakanController */
/* @var $model TransaksiTindakan */

$this->breadcrumbs=array(
	'Transaksi Tindakans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransaksiTindakan', 'url'=>array('index')),
	array('label'=>'Manage TransaksiTindakan', 'url'=>array('admin')),
);
?>

<h1>Create TransaksiTindakan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>