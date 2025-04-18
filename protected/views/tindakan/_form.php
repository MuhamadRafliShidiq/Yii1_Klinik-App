<?php
/* @var $this TindakanController */
/* @var $model Tindakan */
/* @var $form CActiveForm */
?>

<div class="container mt-5">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'tindakan-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <div class="card shadow-sm rounded-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0"><?php echo $model->isNewRecord ? 'Create Tindakan' : 'Update Tindakan'; ?></h3>
        </div>
        <div class="card-body">
            <p class="note">Fields with <span class="required">*</span> are required.</p>
            <?php echo $form->errorSummary($model); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model,'nama', array('class' => 'form-label')); ?>
                <?php echo $form->textField($model,'nama', array('class'=>'form-control', 'maxlength'=>100)); ?>
                <?php echo $form->error($model,'nama'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'deskripsi', array('class' => 'form-label')); ?>
                <?php echo $form->textArea($model,'deskripsi', array('class'=>'form-control', 'rows'=>4)); ?>
                <?php echo $form->error($model,'deskripsi'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'harga', array('class' => 'form-label')); ?>
                <?php echo $form->textField($model,'harga', array('class'=>'form-control', 'maxlength'=>12)); ?>
                <?php echo $form->error($model,'harga'); ?>
            </div>

            <div class="form-group text-center">
                <!-- Tombol Kembali -->
                <a href="<?php echo Yii::app()->createUrl('tindakan/index'); ?>" class="btn btn-outline-secondary btn-lg w-100 mb-3">
                    Kembali
                </a>
                <!-- Tombol Create/Save -->
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success btn-lg w-100')); ?>
            </div>
        </div>
    </div>

    <?php $this->endWidget(); ?>
</div>

<style>
    .container {
        max-width: 600px;
    }

    .card {
        border-radius: 8px;
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-control {
        border-radius: 4px;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        border: 1px solid #ced4da;
        padding: 10px;
        font-size: 14px;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        font-size: 16px;
        padding: 12px;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-outline-secondary {
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: white;
        border-color: #6c757d;
    }

    .note {
        font-size: 14px;
        color: #6c757d;
    }

    .card-header {
        border-radius: 8px 8px 0 0;
        font-size: 20px;
        padding: 20px;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>
