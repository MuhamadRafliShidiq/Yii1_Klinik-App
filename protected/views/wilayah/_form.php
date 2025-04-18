<?php
/* @var $this WilayahController */
/* @var $model Wilayah */
/* @var $form CActiveForm */
?>

<div class="container mt-5">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'wilayah-form',
        'enableAjaxValidation' => false,
    )); ?>
    <div class="card shadow rounded-4 border-0">
        <div class="card-header bg-gradient-primary text-white text-center py-4 rounded-top-4">
            <h3 class="mb-0 fw-bold">
                <?php echo $model->isNewRecord ? 'Tambah Wilayah Baru' : 'Edit Data Wilayah'; ?>
            </h3>
        </div>
        <div class="card-body p-4">
            <p class="note text-muted small">Kolom dengan <span class="text-danger">*</span> wajib diisi.</p>

            <?php echo $form->errorSummary($model, null, null, array('class' => 'alert alert-danger')); ?>

            <div class="form-group mb-4">
                <?php echo $form->labelEx($model, 'nama_wilayah', array('class' => 'form-label fw-semibold')); ?>
                <?php echo $form->textField($model, 'nama_wilayah', array(
                    'class' => 'form-control shadow-sm',
                    'placeholder' => 'Contoh: Jakarta Selatan',
                    'maxlength' => 255
                )); ?>
                <?php echo $form->error($model, 'nama_wilayah', array('class' => 'text-danger small')); ?>
            </div>

            <div class="form-group mb-4">
                <?php echo $form->labelEx($model, 'tipe_wilayah', array('class' => 'form-label fw-semibold')); ?>
                <?php echo $form->dropDownList($model, 'tipe_wilayah', array(
                    'Provinsi' => 'Provinsi',
                    'Kabupaten' => 'Kabupaten',
                    'Kota' => 'Kota',
                ), array('class' => 'form-select shadow-sm', 'prompt' => 'Pilih Tipe')); ?>
                <?php echo $form->error($model, 'tipe_wilayah', array('class' => 'text-danger small')); ?>
            </div>

            <div class="form-group mb-4">
                <?php echo $form->labelEx($model, 'kode_wilayah', array('class' => 'form-label fw-semibold')); ?>
                <?php echo $form->textField($model, 'kode_wilayah', array(
                    'class' => 'form-control shadow-sm',
                    'placeholder' => 'Contoh: JW01',
                    'maxlength' => 10
                )); ?>
                <?php echo $form->error($model, 'kode_wilayah', array('class' => 'text-danger small')); ?>
            </div>

            <div class="form-group text-center mt-5">
                <a href="<?php echo Yii::app()->createUrl('wilayah/index'); ?>"
                   class="btn btn-outline-secondary btn-lg w-100 mb-3 fw-semibold">
                    <i class="bi bi-arrow-left-circle me-2"></i> Kembali
                </a>
                <?php echo CHtml::submitButton(
                    $model->isNewRecord ? 'Simpan Wilayah' : 'Update Wilayah',
                    array('class' => 'btn btn-success btn-lg w-100 fw-semibold')
                ); ?>
            </div>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>

<style>
    .container {
        max-width: 650px;
        margin: auto;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 15px;
        transition: all 0.3s ease-in-out;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .card-header.bg-gradient-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
    }

    .btn-success {
        background-color: #198754;
        border-color: #198754;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn-success:hover {
        background-color: #157347;
        transform: scale(1.02);
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
        transform: scale(1.02);
    }

    .fw-semibold {
        font-weight: 600;
    }

    .rounded-4 {
        border-radius: 1rem !important;
    }

    .text-muted {
        color: #6c757d !important;
    }

    .shadow-sm {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    .text-danger {
        color: #dc3545 !important;
    }
</style>
