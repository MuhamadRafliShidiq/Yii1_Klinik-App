<?php
/* @var $this TransaksiObatController */
/* @var $model TransaksiObat */

$this->breadcrumbs=array(
	'Transaksi Obats'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TransaksiObat', 'url'=>array('index')),
	array('label'=>'Manage TransaksiObat', 'url'=>array('admin')),
);
?>

<h1>Create TransaksiObat</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>