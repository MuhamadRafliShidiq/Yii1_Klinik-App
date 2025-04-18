<?php
/* @var $this TransaksiObatController */
/* @var $model TransaksiObat */

$this->breadcrumbs=array(
	'Transaksi Obats'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TransaksiObat', 'url'=>array('index')),
	array('label'=>'Create TransaksiObat', 'url'=>array('create')),
	array('label'=>'View TransaksiObat', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TransaksiObat', 'url'=>array('admin')),
);
?>

<h1>Update TransaksiObat <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>