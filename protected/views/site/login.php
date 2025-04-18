<?php
$this->pageTitle = 'Login - ' . Yii::app()->name;
?>

<div style="max-width: 400px; margin: 50px auto; padding: 30px; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">

    <h2 style="text-align:center; margin-bottom: 30px;">Login Pengguna</h2>

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    )); ?>

        <div>
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username', array('class'=>'form-control', 'style'=>'width:100%; padding:8px;')); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div style="margin-top:15px;">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password', array('class'=>'form-control', 'style'=>'width:100%; padding:8px;')); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div style="margin-top:15px;">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->label($model, 'rememberMe'); ?>
        </div>

        <div style="margin-top:20px; text-align:center;">
            <?php echo CHtml::submitButton('Login', array('class'=>'btn btn-primary', 'style'=>'padding:10px 20px;')); ?>
        </div>

    <?php $this->endWidget(); ?>

</div>
