<?php
/* @var $this Sem1Controller */
/* @var $model Sem1 */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sem1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <div class="row">
            <?php echo $form->labelEx($model,'id'); ?>
            <?php echo $form->textField($model,'id'); ?>
            <?php echo $form->error($model,'id'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'year'); ?>
            <?php echo $form->textField($model,'year'); ?>
            <?php echo $form->error($model,'year'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'maths'); ?>
            <?php echo $form->textField($model,'maths'); ?>
            <?php echo $form->error($model,'maths'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'physics'); ?>
            <?php echo $form->textField($model,'physics'); ?>
            <?php echo $form->error($model,'physics'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'cprograming'); ?>
            <?php echo $form->textField($model,'cprograming'); ?>
            <?php echo $form->error($model,'cprograming'); ?>
        </div>

                <div class="row">
            <?php echo $form->labelEx($model,'drawing'); ?>
            <?php echo $form->textField($model,'drawing'); ?>
            <?php echo $form->error($model,'drawing'); ?>
        </div>

            <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->