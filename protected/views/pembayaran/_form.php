<?php
/* @var $this PembayaranController */
/* @var $model Pembayaran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pembayaran-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kunjungan'); ?>
		<?php echo $form->textField($model,'id_kunjungan'); ?>
		<?php echo $form->error($model,'id_kunjungan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_tagihan'); ?>
		<?php echo $form->textField($model,'total_tagihan',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'total_tagihan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_bayar'); ?>
		<?php echo $form->textField($model,'jumlah_bayar',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'jumlah_bayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_bayar'); ?>
		<?php echo $form->textField($model,'tanggal_bayar'); ?>
		<?php echo $form->error($model,'tanggal_bayar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_pembayaran'); ?>
		<?php echo $form->textField($model,'status_pembayaran',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'status_pembayaran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->