<?php
/* @var $this WilayahController */
/* @var $model Wilayah */

$this->breadcrumbs=array(
	'Wilayahs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wilayah', 'url'=>array('index')),
	array('label'=>'Manage Wilayah', 'url'=>array('admin')),
);
?>
 

<?php $this->renderPartial('_form', array('model'=>$model)); ?>