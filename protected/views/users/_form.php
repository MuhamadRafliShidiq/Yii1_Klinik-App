<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="container mt-5">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'users-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <div class="card shadow-sm rounded-lg">
        <div class="card-header bg-primary text-white text-center">
            <h3 class="mb-0"><?php echo $model->isNewRecord ? 'Create User' : 'Update User'; ?></h3>
        </div>
        <div class="card-body">
            <p class="note">Fields with <span class="required">*</span> are required.</p>
            <?php echo $form->errorSummary($model); ?>

            <div class="form-group">
                <?php echo $form->labelEx($model,'nama_lengkap', array('class' => 'form-label')); ?>
                <?php echo $form->textField($model,'nama_lengkap', array('class'=>'form-control', 'maxlength'=>128)); ?>
                <?php echo $form->error($model,'nama_lengkap'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'username', array('class' => 'form-label')); ?>
                <?php echo $form->textField($model,'username', array('class'=>'form-control', 'maxlength'=>128)); ?>
                <?php echo $form->error($model,'username'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->labelEx($model,'password', array('class' => 'form-label')); ?>
                <?php echo $form->passwordField($model,'password', array('class'=>'form-control', 'maxlength'=>128)); ?>
                <?php if (!$model->isNewRecord): ?>
                    <p class="hint text-muted">Kosongkan jika tidak ingin mengubah password.</p>
                <?php endif; ?>
                <?php echo $form->error($model,'password'); ?>
            </div>

            <div class="form-group mb-3">
                <?php echo $form->labelEx($model,'role', array('class' => 'form-label')); ?>
                <?php echo $form->dropDownList($model,'role', array(
                    'Admin' => 'Admin',
                    'Dokter' => 'Dokter',
                    'Kasir' => 'Kasir',
                    'Petugas Pendaftaran' => 'Petugas Pendaftaran',
                ), array('class' => 'form-control', 'empty' => 'Pilih Role')); ?>
                <?php echo $form->error($model,'role'); ?>
            </div>

            <div class="form-group text-center">
                <!-- Tombol Kembali -->
                <a href="<?php echo Yii::app()->createUrl('users/index'); ?>" class="btn btn-outline-secondary btn-lg w-100 mb-3">
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

    .hint {
        font-size: 14px;
        margin-top: 5px;
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
