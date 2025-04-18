<?php
/* @var $this ObatController */
/* @var $model Obat */
/* @var $form CActiveForm */
?>

<div class="container mt-5">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obat-form',
	'enableAjaxValidation'=>false,
)); ?>

<div class="card shadow-sm rounded-lg border-0">
    <div class="card-header bg-primary text-white text-center">
        <h3 class="mb-0"><?php echo $model->isNewRecord ? 'Tambah Obat' : 'Ubah Data Obat'; ?></h3>
    </div>

    <div class="card-body bg-white">
        <p class="note text-muted mb-4">Kolom dengan tanda <span class="text-danger">*</span> wajib diisi.</p>
        <?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model,'nama', array('class'=>'form-label')); ?>
            <?php echo $form->textField($model,'nama',array('class'=>'form-control','maxlength'=>100)); ?>
            <?php echo $form->error($model,'nama'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'stok', array('class'=>'form-label')); ?>
            <?php echo $form->textField($model,'stok',array('class'=>'form-control')); ?>
            <?php echo $form->error($model,'stok'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'satuan', array('class'=>'form-label')); ?>
            <?php echo $form->textField($model,'satuan',array('class'=>'form-control','maxlength'=>20)); ?>
            <?php echo $form->error($model,'satuan'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'harga', array('class'=>'form-label')); ?>
            <?php echo $form->textField($model,'harga',array('class'=>'form-control','maxlength'=>12)); ?>
            <?php echo $form->error($model,'harga'); ?>
        </div>
		<div class="form-group">
            <?php echo $form->labelEx($model,'keterangan', array('class'=>'form-label')); ?>
            <?php echo $form->textField($model,'keterangan',array('class'=>'form-control','maxlength'=>100)); ?>
            <?php echo $form->error($model,'keterangan'); ?>
        </div>

        <div class="form-group text-center mt-4">
            <a href="<?php echo Yii::app()->createUrl('obat/index'); ?>" class="btn btn-outline-secondary w-100 mb-3">
                Kembali
            </a>
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Simpan' : 'Update', array('class' => 'btn btn-primary w-100')); ?>
        </div>
    </div>
</div>

<?php $this->endWidget(); ?>
</div>

<style>
    .container {
        max-width: 650px;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 6px;
        display: block;
    }

    .form-control {
        border-radius: 6px;
        border: 1px solid #d1d3e2;
        padding: 10px 14px;
        font-size: 15px;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
        border-color: #4e73df;
        box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        outline: none;
    }

    .btn {
        font-size: 16px;
        padding: 12px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: white;
        border-color: #6c757d;
    }

    .btn-primary {
        background-color: #4e73df;
        border-color: #4e73df;
    }

    .btn-primary:hover {
        background-color: #2e59d9;
        border-color: #2653d4;
    }

    .note {
        font-size: 14px;
    }

    .card-header {
        padding: 20px;
        border-radius: 8px 8px 0 0;
        font-size: 22px;
    }

    .card-body {
        padding: 24px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .text-danger {
        font-weight: bold;
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
    }

    .rounded-lg {
        border-radius: 12px;
    }
</style>
