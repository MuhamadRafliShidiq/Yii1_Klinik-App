<?php
/* @var $this PegawaiController */
/* @var $model Pegawai */
/* @var $form CActiveForm */
?>

<div class="container mt-5">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'pegawai-form',
		'enableAjaxValidation'=>false,
	)); ?>
	<div class="card shadow-lg rounded-xl border-0">
        <div class="card-header bg-primary text-white text-center py-4 rounded-top">
            <h3 class="mb-0 font-weight-bold"><?php echo $model->isNewRecord ? 'Create Pegawai' : 'Update Pegawai'; ?></h3>
        </div>
	    <div class="card-body p-4 bg-light">
			<p class="note mb-3">Kolom dengan tanda <span class="required">*</span> wajib diisi.</p>
			<?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); ?>

			<div class="form-group mb-4">
				<?php echo $form->labelEx($model,'nama', array('class' => 'form-label')); ?>
				<?php echo $form->textField($model,'nama',array('class' => 'form-control form-control-lg', 'placeholder'=>'Masukkan nama pegawai', 'maxlength'=>100)); ?>
				<?php echo $form->error($model,'nama', array('class' => 'text-danger small')); ?>
			</div>

			<div class="form-group mb-4">
				<?php echo $form->labelEx($model,'jabatan', array('class' => 'form-label')); ?>
				<?php echo $form->textField($model,'jabatan',array('class' => 'form-control form-control-lg', 'placeholder'=>'Masukkan jabatan', 'maxlength'=>50)); ?>
				<?php echo $form->error($model,'jabatan', array('class' => 'text-danger small')); ?>
			</div>

			<div class="form-group mb-4">
				<?php echo $form->labelEx($model,'alamat', array('class' => 'form-label')); ?>
				<?php echo $form->textArea($model,'alamat',array('class' => 'form-control form-control-lg', 'rows'=>4, 'placeholder'=>'Masukkan alamat lengkap')); ?>
				<?php echo $form->error($model,'alamat', array('class' => 'text-danger small')); ?>
			</div>

			<div class="form-group mb-4">
				<?php echo $form->labelEx($model,'no_hp', array('class' => 'form-label')); ?>
				<?php echo $form->textField($model,'no_hp',array('class' => 'form-control form-control-lg', 'placeholder'=>'Masukkan nomor HP', 'maxlength'=>20)); ?>
				<?php echo $form->error($model,'no_hp', array('class' => 'text-danger small')); ?>
			</div>

			<div class="form-group text-center mt-4">
                <a href="<?php echo Yii::app()->createUrl('pegawai/index'); ?>" class="btn btn-outline-secondary btn-lg w-100 mb-3">
                    Kembali
                </a>
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-lg w-100')); ?>
            </div>
		</div>
	</div>
	<?php $this->endWidget(); ?>
</div>

<style>
    .container {
        max-width: 640px;
    }

    .form-label {
        font-weight: 600;
        font-size: 15px;
    }

    .form-control {
        border-radius: 6px;
        border: 1px solid #ced4da;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
    }

    .card {
        background-color: #ffffff;
    }

    .btn-lg {
        padding: 12px;
        font-size: 16px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-weight: 600;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004a99;
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

    .alert-danger {
        padding: 10px 15px;
        font-size: 14px;
        border-radius: 6px;
        margin-bottom: 20px;
    }
</style>
