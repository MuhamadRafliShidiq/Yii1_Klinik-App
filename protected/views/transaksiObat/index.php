<?php
/* @var $this TransaksiObatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transaksi Obats',
);

$this->menu=array(
	array('label'=>'Create TransaksiObat', 'url'=>array('create')),
	array('label'=>'Manage TransaksiObat', 'url'=>array('admin')),
);
?>

<h1>Transaksi Obats</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
