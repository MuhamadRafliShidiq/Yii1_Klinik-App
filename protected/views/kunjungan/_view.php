<?php
/* @var $this KunjunganController */
/* @var $data Kunjungan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pasien')); ?>:</b>
	<?php echo CHtml::encode($data->id_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_kunjungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kunjungan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_kunjungan')); ?>:</b>
	<?php echo CHtml::encode($data->status_kunjungan); ?>
	<br />


</div>